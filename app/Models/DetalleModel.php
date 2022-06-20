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
        $data = $this->db->query("SELECT * FROM `detalles` WHERE `idFactura` = $id");
        return $data->getResult();
    }

}
