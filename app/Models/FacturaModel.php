<?php namespace App\Models;

use CodeIgniter\Model;

class FacturaModel extends Model
{

    public function read()
    {
        $data = $this->db->query("SELECT * FROM facturas");
        return $data->getResult();
    }

    public function create($datos)
    {
        $facturas = $this->db->table('facturas');
        $facturas->insert($datos);
        return $this->db->insertID();
    }
   
    public function readForId($id)
    {
        $datos = $this->db->query("SELECT * FROM `facturas` WHERE id = $id");
        return $datos->getRow();
    }

    public function readForProducto($data)
    {
        $Usuario = $this->db->table('facturas');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    public function toUpdate($id, $data)
    {
        $tabla = $this->db->table('facturas');
        $tabla->set($data);
        $tabla->where('id', $id);
        return $tabla->update();
    }

}
