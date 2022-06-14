<?php

namespace App\Controllers;

use App\Models\FacturaModel;

class FacturaController extends BaseController
{

    protected $helpers = ['form'];

    public function crear()
    {


        if ($valid) {
            $datos = [
                "idproducto" => $_POST['idproducto'],
                "cantidad" => $_POST['cantidad'],
                "usuarioid" => $_POST['usuarioid'],
            ];

            $crud = new FacturaModel();
            $respuesta = $crud->create($datos);
            return redirect()->to(base_url() . '/prueba');

        } else {
            $error = $this->validator->listErrors();
            session()->setFlashdata('mensaje', $error);
            return redirect()->to(base_url('/prueba'));
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
