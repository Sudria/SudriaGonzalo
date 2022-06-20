<?php

namespace App\Controllers;

use App\Models\ConsultaModel;
use App\Models\ProductoModel;
use App\Models\UsuarioModel;
use App\Models\FacturaModel;
use App\Models\DetalleModel;

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


    public function editar_producto($id)
    {

        $crud = new ProductoModel();
        $datos = $crud->readForId($id);

        $data = [
            'datos' => $datos,
        ];
        
        echo view('templates/header');
        echo view('mains/editar_producto', $data);
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


    public function carrito (){
        $crud = new ProductoModel();
        $datos = $crud->read();
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/carrito',$data);
        echo view('templates/footer');
    }


    public function usuario_deshabilitado (){
        echo view('templates/header');
        echo view('templates/usuario_deshabilitado');
        echo view('templates/footer');
    }

    public function detalles($id){
        $crud = new ProductoModel();
        $datos = $crud->readForId($id);
        $data = [
            'datos' => $datos,
        ];
        echo view('templates/header');
        echo view('mains/detalles',$data);
        echo view('templates/footer');
    }

    public function compras(){
        $crudFactura = new FacturaModel();
        $facturas = $crudFactura->read();
        $crudUsuario = new UsuarioModel();
        $usuarios = $crudUsuario->readKeyCamps();

        $data = [
            'facturas' => $facturas,
            'usuarios' => $usuarios,
        ];
        echo view('templates/header');
        echo view('mains/lista_facturas',$data);
        echo view('templates/footer');
    }

    public function facturas($idFactura){
        $crudDetalle = new DetalleModel();
        $detalles = $crudDetalle->readForId($idFactura);

        $crudProducto = new ProductoModel();
        $productos = $crudProducto->read();

        $crudFactura = new FacturaModel();
        $factura = $crudFactura->readForId($idFactura);

        $crudUsuario = new UsuarioModel();
        $usuario = $crudUsuario->readForIdFactura($factura->idUsuario);

        $data = [
            'detalles' => $detalles,
            'productos' => $productos,
            'factura' => $factura,
            'usuario' => $usuario,
        ];
        echo view('templates/header');
        echo view('mains/facturas', $data);
        echo view('templates/footer');
    }

    public function mis_compras(){

        $session = session();
        $crudFactura = new FacturaModel();
        $facturas = $crudFactura->readForIdUsuario($session->id);


        $data = [
            'facturas' => $facturas,
        ];
        echo view('templates/header');
        echo view('mains/mis_compras', $data);
        echo view('templates/footer');
    }
}
