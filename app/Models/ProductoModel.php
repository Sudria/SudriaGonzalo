<?php namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{

    public function read()
    {
        $data = $this->db->query("SELECT * FROM productos");
        return $data->getResult();
    }

    public function create($datos)
    {
        $productos = $this->db->table('productos');
        return $productos->insert($datos);
    }

    public function changeState($id,$estado)
    {
        $tabla = $this->db->table('productos');
        if($estado){
            $tabla->set('estado', '0');
        }else{
            $tabla->set('estado', '1');
        }
        $tabla->where('id', $id);
        return $tabla->update();
    }

    public function readForId($id)
    {
        $datos = $this->db->query("SELECT * FROM `productos` WHERE id = $id");
        return $datos->getRow();
    }

    public function readForProducto($data)
    {
        $Usuario = $this->db->table('productos');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    public function toUpdate($id, $data)
    {
        $tabla = $this->db->table('productos');
        $tabla->set($data);
        $tabla->where('id', $id);
        return $tabla->update();
    }

}
