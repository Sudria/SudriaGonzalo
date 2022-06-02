<?php

namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController
{   
    public function crear(){
        $valid = $this->validate([
            'nombre'   => 'required|min_length[3]|max_length[20]|alpha',
            'apellido'   => 'required|min_length[3]|max_length[20]|alpha',
            'email'   => 'required|min_length[3]|max_length[50]|is_unique[usuarios.email]',
            'rep_email'   => 'required|min_length[3]|max_length[50]|matches[email]',
            'direccion'   => 'required|min_length[8]|max_length[75]|',
            'telefono'   => 'required|min_length[8]|max_length[20]|is_natural',
            'usuario'   => 'required|min_length[5]|max_length[20]|is_unique[usuarios.usuario]',
            'dni'   => 'required|min_length[8]|max_length[8]|is_natural|is_unique[usuarios.dni]',
            'contra'   => 'required|min_length[8]',
            'rep_contra'   => 'required|min_length[8]|matches[contra]',
        ]);

        if ($valid){
            
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
    return redirect()->to(base_url().'/');

        }else{
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje',$error); 
            return redirect()->to(base_url('/crear_usuario'));
        }
}

public function eliminar($id){
    $crud = new UsuarioModel();
    $respuesta = $crud->deleteForId($id);

    if ($respuesta) {
        return redirect()->to(base_url().'/tabla_usuarios')->with('mensaje','4');
    } else {
        return redirect()->to(base_url().'/tabla_usuarios')->with('mensaje','5');
    }
}
public function modificar($id){
    $crud = new UsuarioModel();
    $datos = $crud->readForId($id);
    $respuesta = $crud->update($datos);
}

public function login(){
    $valid = $this->validate([
        'usuario'   => 'required|min_length[5]|max_length[20]',
        'contra'   => 'required|min_length[8]|max_length[20]',
    ]);

    if ($valid){
    $crud = new UsuarioModel();

    $usuario = $this->request->getPost('usuario');
	$contra = $this->request->getPost('contra');
    
    $data = $crud->readForUsuario(['usuario' => $usuario]);;  

    if(count ($data) > 0 && password_verify($contra, $data[0]['contra']) ){

         $datosUsuario = [
        "usuario" => $data[0]['usuario'],
        "nombre" => $data[0]['nombre'],
        "apellido" => $data[0]['apellido'],
        "email" => $data[0]['email'],
        "rol" => $data[0]['rol'],
        "telefono" => $data[0]['telefono'],
        "id" => $data[0]['id'],
        ];

        $session = session();
        $session ->set($datosUsuario);

        return redirect()->to(base_url().'/');
         }else{
            return redirect()->to(base_url().'/ingresar');
        }
    }else{
        return redirect()->to(base_url().'/ingresar');
    }
}

        public function logout(){
        $session = session();
        $session->destroy();
       return redirect()->to(base_url().'/');
        }

}
