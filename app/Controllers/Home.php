<?php

namespace App\Controllers;

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

    
}