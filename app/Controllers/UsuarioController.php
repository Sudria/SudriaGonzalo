<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{   
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

public function eliminar($id){
    $crud = new UsuarioModel();
    $respuesta = $crud->deleteForId($id);

    if ($respuesta) {
        return redirect()->to(base_url().'/lista_usuarios')->with('mensaje','4');
    } else {
        return redirect()->to(base_url().'/lista_usuarios')->with('mensaje','5');
    }
}



}