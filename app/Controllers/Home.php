<?php

namespace App\Controllers;
use App\Models\UsuarioModel;


class Home extends BaseController
{
    public function index(){
        echo view('templates/header');
        echo view('mains/principal');
        echo view('templates/footer');
    }


    public function quienes(){
        echo view('templates/header');
        echo view('mains/quienes');
        echo view('templates/footer');
    }


    public function comercializacion(){
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


    public function terminos(){
        echo view('templates/header');
        echo view('mains/terminos');
        echo view('templates/footer');
    }


    public function crear_usuario(){
        echo view('templates/header');
        echo view('mains/crear_usuario');
        echo view('templates/footer');
    }


    public function crear_producto(){
        echo view('templates/header');
        echo view('mains/crear_producto');
        echo view('templates/footer');
    }


    public function actualizar(){
        echo view('templates/header');
        echo view('mains/editar_usuario');
        echo view('templates/footer');
    }

    
    public function login(){
        echo view('templates/header');
        echo view('mains/login');
        echo view('templates/footer');
    }

    
    public function lista_usuarios(){
        $crud = new UsuarioModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos
        ]; 
        echo view('templates/header');
        echo view('mains/lista_usuarios',$data);
        echo view('templates/footer');
    }


    public function editar_usuario(){
        $crud = new UsuarioModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos
        ]; 
        echo view('templates/header');
        echo view('mains/lista_usuarios',$data);
        echo view('templates/footer');
    }


}