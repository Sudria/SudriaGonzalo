<?php

namespace App\Controllers;

use App\Models\ConsultaModel;
use App\Models\ProductoModel;
use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('mains/principal');
        echo view('templates/footer');
    }

    public function quienes()
    {
        echo view('templates/header');
        echo view('mains/quienes');
        echo view('templates/footer');
    }

    public function comercializacion()
    {
        echo view('templates/header');
        echo view('mains/comercializacion');
        echo view('templates/footer');
    }

    public function contacto()
    {
        echo view('templates/header');
        echo view('mains/contacto');
        echo view('templates/footer');
    }

    public function terminos()
    {
        echo view('templates/header');
        echo view('mains/terminos');
        echo view('templates/footer');
    }

    public function crear_usuario()
    {
        echo view('templates/header');
        echo view('mains/crear_usuario');
        echo view('templates/footer');
    }

    public function crear_producto()
    {
        echo view('templates/header');
        echo view('mains/crear_producto');
        echo view('templates/footer');
    }

    public function editar_usuario($id)
    {

        $crud = new UsuarioModel();
        $datos = $crud->readForId($id);

        $data = [
            'datos' => $datos,
        ];

        echo view('templates/header');
        echo view('mains/editar_usuario', $data);
        echo view('templates/footer');
    }

    public function login()
    {
        echo view('templates/header');
        echo view('mains/login');
        echo view('templates/footer');
    }

    public function catalogo()
    {
        $crud = new ProductoModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/catalogo', $data);
        echo view('templates/footer');
    }

    public function lista_consultas()
    {
        $crud = new ConsultaModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/lista_consultas', $data);
        echo view('templates/footer');
    }

    public function lista_productos()
    {
        $crud = new ProductoModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/lista_productos', $data);
        echo view('templates/footer');
    }

    public function lista_usuarios()
    {
        $crud = new UsuarioModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/lista_usuarios', $data);
        echo view('templates/footer');
    }

}
