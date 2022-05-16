<?php

namespace App\Controllers;
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
       $crud = new UsuarioModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos
        ]; 
        echo view('templates/header');
        echo view('mains/crear_usuario',$data);
        echo view('templates/footer');
    }

    public function crear(){
        $datos = [
            "nombre" => $_POST['nombre'],
            "apellido" => $_POST['apellido'],
            "email" => $_POST['email'],
            "direccion" => $_POST['direccion'],
            "telefono" => $_POST['telefono'],
            "usuario" => $_POST['usuario'],
            "dni" => $_POST['dni'],
            "contraseña" => $_POST['contraseña']
                ];
        $crud = new UsuarioModel();
        $respuesta = $crud->create($datos);

        if ($respuesta > 0) {
        return redirect()->to(base_url().'/')->with('mensaje','1');
        } else {
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }
    
}