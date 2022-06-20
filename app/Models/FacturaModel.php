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


    public function readForIdUsuario($id)
    {
        $datos = $this->db->query("SELECT * FROM `facturas` WHERE idUsuario = $id");
        return $datos->getResult();
    }



 



}
