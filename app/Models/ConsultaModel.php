<?php namespace App\Models;

use CodeIgniter\Model;

class ConsultaModel extends Model
{

    public function read()
    {
        $data = $this->db->query("SELECT * FROM consultas");
        return $data->getResult();
    }

    public function create($datos)
    {
        $consulta = $this->db->table('consultas');
        return $consulta->insert($datos);
    }

    public function deleteForId($id)
    {
        return $this->db->query("DELETE FROM `consultas` WHERE `consultas`.`id` = $id");
    }

    public function readForId($id)
    {
        $data = $this->db->query("SELECT * FROM consultas WHERE id = $id");
        return $data->getResult();
    }

    public function readForProducto($data)
    {
        $Usuario = $this->db->table('consultas');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

}
