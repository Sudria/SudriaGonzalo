<?php

namespace App\Controllers;

use App\Models\ConsultaModel;

class ConsultaController extends BaseController
{

    public function crear()
    {

        $valid = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[20]|alpha',
            'apellido' => 'required|min_length[3]|max_length[20]|alpha',
            'email' => 'required|min_length[4]|max_length[50]',
            'telefono' => 'required|min_length[1]|max_length[20]',
            'mensaje' => 'required|min_length[0]|max_length[255]',
            'usuarioid' => 'min_length[0]|max_length[10]',
        ]);

        if ($valid) {
            $datos = [
                "nombre" => $_POST['nombre'],
                "apellido" => $_POST['apellido'],
                "email" => $_POST['email'],
                "telefono" => $_POST['telefono'],
                "mensaje" => $_POST['mensaje'],
                "usuarioid" => $_POST['usuarioid'],
            ];

            $crud = new ConsultaModel();
            $respuesta = $crud->create($datos);
            return redirect()->to(base_url() . '/contacto');

        } else {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('/contacto'));
        }
    }

    public function eliminar($id)
    {
        $crud = new ConsultaModel();
        $respuesta = $crud->deleteForId($id);

        if ($respuesta) {
            return redirect()->to(base_url() . '/tabla_consultas')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/tabla_consultas')->with('mensaje', '5');
        }
    }

    public function modificar($id)
    {
        $crud = new ConsultaModel();
        $datos = $crud->readForId($id);
        $respuesta = $crud->update($datos);
    }

    public function cambioEstado($id, $estado)
    {
        $crud = new ConsultaModel();
        $respuesta = $crud->changeState($id, $estado);

        if ($respuesta) {
            return redirect()->to(base_url() . '/tabla_consultas')->with('mensaje', '4');
        } else {
            return redirect()->to(base_url() . '/tabla_consultas')->with('mensaje', '5');
        }
    }
}
