<?php namespace App\Models;

use CodeIgniter\Model;

class DetalleModel extends Model
{

    public function read()
    {
        $data = $this->db->query("SELECT * FROM detalles");
        return $data->getResult();
    }

    public function create($datos)
    {
        $detalles = $this->db->table('detalles');
        return $detalles->insert($datos);
    }


    public function readForId($id)
    {
        $datos = $this->db->query("SELECT * FROM `detalles` WHERE id = $id");
        return $datos->getRow();
    }

    public function readForProducto($data)
    {
        $usuario = $this->db->table('detalles');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }

    public function toUpdate($id, $data)
    {
        $tabla = $this->db->table('detalles');
        $tabla->set($data);
        $tabla->where('id', $id);
        return $tabla->update();
    }

}
