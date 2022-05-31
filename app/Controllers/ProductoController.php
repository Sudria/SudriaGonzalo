<?php

namespace App\Controllers;
use App\Models\ProductoModel;
use CodeIgniter\Files\File;


class ProductoController extends BaseController
{   

    protected $helpers = ['form'];


    public function crear(){
     
        $valid = $this->validate([
         'titulo'   => 'required|min_length[3]|max_length[20]|alpha',
            'precio'   => 'required|min_length[1]|max_length[6]|is_natural',
            'categoria'   => 'required|alpha',
            'stock'   => 'required|min_length[1]|max_length[4]|is_natural',
            'descripcion'   => 'required|min_length[0]|max_length[255]|alpha',
            'imagen' => [
                'label' => 'Image File',
                'rules' => 'uploaded[imagen]'
                    . '|is_image[imagen]'
                    . '|mime_in[imagen,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[imagen,100]'
                    . '|max_dims[imagen,1024,768]',
            ],
        ]);


           
        if ($valid){
            
             $img = $this->request->getFile('imagen');

            if ($img -> isValid()){
                $img->move('./img/productos','cactus.jpg');
            }        
            $datos = [ 
                "titulo" => $_POST['titulo'],
                "precio" => $_POST['precio'],
                "categoria" => $_POST['categoria'],
                "stock" => $_POST['stock'],
                "descripcion" => $_POST['descripcion'],
                "imagen" => $img ->getName(),
        ];
        $crud = new ProductoModel();
    $respuesta = $crud->create($datos);
    return redirect()->to(base_url().'/');

        }else{
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje',$error); 
            return redirect()->to(base_url('/crear_producto'));
        }
}

public function eliminar($id){
    $crud = new ProductoModel();
    $respuesta = $crud->deleteForId($id);

    if ($respuesta) {
        return redirect()->to(base_url().'/tabla_productos')->with('mensaje','4');
    } else {
        return redirect()->to(base_url().'/tabla_productos')->with('mensaje','5');
    }
}

public function modificar($id){
    $crud = new ProductoModel();
    $datos = $crud->readForId($id);
    $respuesta = $crud->update($datos);
}


}