<?php

namespace App\Controllers;

use App\Models\DetalleModel;
use App\Models\FacturaModel;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{
    public function crear()
    {
        $valid = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[20]|alpha',
            'apellido' => 'required|min_length[3]|max_length[20]|alpha',
            'email' => 'required|min_length[3]|max_length[50]|is_unique[usuarios.email]',
            'rep_email' => 'required|min_length[3]|max_length[50]|matches[email]',
            'direccion' => 'required|min_length[8]|max_length[75]|',
            'telefono' => 'required|min_length[8]|max_length[20]|is_natural',
            'usuario' => 'required|min_length[5]|max_length[20]|is_unique[usuarios.usuario]',
            'dni' => 'required|min_length[8]|max_length[8]|is_natural|is_unique[usuarios.dni]',
            'contra' => 'required|min_length[5]|max_length[20]',
            'rep_contra' => 'required|min_length[5]|matches[contra]',
        ]);

        if ($valid) {

            $datos = [
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "email" => $_POST['email'],
                "direccion" => $_POST['direccion'],
                "telefono" => $_POST['telefono'],
                "usuario" => $_POST['usuario'],
                "dni" => $_POST['dni'],
                "contra" => [password_hash($this->request->getPost('contra'), PASSWORD_DEFAULT)],
            ];
            $crud = new UsuarioModel();
            $respuesta = $crud->create($datos);
            return redirect()->to(base_url() . '/');

        } else {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('/crear_usuario'));
        }
    }

    public function modificar()
    {
        $valid = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[20]|alpha',
            'apellido' => 'required|min_length[3]|max_length[20]|alpha',
            'email' => 'required|min_length[3]|max_length[50]',
            'rep_email' => 'required|min_length[3]|max_length[50]|matches[email]',
            'direccion' => 'required|min_length[8]|max_length[75]|',
            'telefono' => 'required|min_length[8]|max_length[20]|is_natural',
            'contra' => 'required|min_length[8]|max_length[20]',
            'rep_contra' => 'required|min_length[8]|matches[contra]',
        ]);

        $id = $this->request->getPost('id');

        if ($valid) {
            $datos = [
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "email" => $_POST['email'],
                "direccion" => $_POST['direccion'],
                "telefono" => $_POST['telefono'],
                "contra" => [password_hash($this->request->getPost('contra'), PASSWORD_DEFAULT)],
            ];
            $crud = new UsuarioModel();
            $respuesta = $crud->toUpdate($id, $datos);
            return redirect()->to(base_url() . '/');

        } else {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('/editar_usuario/' . $id));
        }
    }

    public function login()
    {
        $valid = $this->validate([
            'usuario' => 'required|min_length[5]|max_length[20]',
            'contra' => 'required|min_length[5]|max_length[20]',
        ]);

        if ($valid) {
            $crud = new UsuarioModel();

            $usuario = $this->request->getPost('usuario');
            $contra = $this->request->getPost('contra');

            $data = $crud->readForUsuario(['usuario' => $usuario]);

            if (count($data) > 0 && password_verify($contra, $data[0]['contra'])) {

                $datosUsuario = [
                    "usuario" => $data[0]['usuario'],
                    "nombre" => $data[0]['nombre'],
                    "apellido" => $data[0]['apellido'],
                    "email" => $data[0]['email'],
                    "rol" => $data[0]['rol'],
                    "telefono" => $data[0]['telefono'],
                    "id" => $data[0]['id'],
                    "carrito" => array(
                    ),
                ];

                $session = session();
                $session->set($datosUsuario);

                return redirect()->to(base_url() . '/');
            } else {
                return redirect()->to(base_url() . '/ingresar');
            }
        } else {
            return redirect()->to(base_url() . '/ingresar');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url() . '/');
    }

    public function cambioEstado($id, $estado)
    {
        $crud = new UsuarioModel();
        $respuesta = $crud->changeState($id, $estado);

        if ($respuesta) {
            return redirect()->to(base_url() . '/tabla_usuarios')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/tabla_usuarios')->with('mensaje', '5');
        }
    }

    public function agregar_pcarrito($id)
    {
        $valid = $this->validate([
            'cantidad' => 'required|min_length[1]|max_length[2]|is_natural_no_zero',
        ]);

        if (!$valid) {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('/catalogo'));
        }

        $cantidad = $this->request->getPost('cantidad');
        $session = session();
        $datos = array(
            $id => (int) $cantidad,
        );

        if (array_key_exists($id, $session->carrito)) {
            $carrito = $session->carrito;
            $carrito[$id] += $cantidad;
            $session->carrito = $carrito;
        } else {
            $session->carrito += $datos;
        }
        return redirect()->to(base_url('/catalogo'));

    }

    public function eliminar_pcarrito($id)
    {
        $session = session();
        $carrito = $session->carrito;
        unset($carrito[$id]);
        $session->carrito = $carrito;
        return redirect()->to(base_url('/prueba'));
    }

    public function vaciar_carrito()
    {
        $session = session();
        $session->carrito = array();
        return redirect()->to(base_url('/prueba'));
    }

    public function comprar()
    {
        date_default_timezone_set("America/Argentina/Buenos_Aires");
        $session = session();
        $carrito = $session->carrito;
        $fechaActual = date('Y-m-d H:i:s');
        $factura = new FacturaModel();
        $detalleFactura = new DetalleModel();

        $datos = [
            "idUsuario" => $session->id,
            "fecha" => $fechaActual,
        ];

        $idFactura = $factura->create($datos);

        foreach ($carrito as $id => $cantidad):
            $detalle = [
                "idFactura" => $idFactura,
                "idProducto" => $id,
                "cantidad" => $cantidad,
            ];
            $detalleFactura->create($detalle);
        endforeach;
        $session->carrito = array();
        return redirect()->to(base_url('/prueba'));
    }

}
