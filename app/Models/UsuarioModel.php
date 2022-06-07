<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{

    public function read()
    {
        $data = $this->db->query("SELECT * FROM usuarios");
        return $data->getResult();
    }

    public function create($datos)
    {
        $usuarios = $this->db->table('usuarios');
        return $usuarios->insert($datos);
    }

    public function deleteForId($id)
    {
        return $this->db->query("DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id");
    }

    public function readForId($id)
    {
        $datos = $this->db->query("SELECT * FROM `usuarios` WHERE id = $id");
        return $datos->getRow();
    }

    public function toUpdate($id, $data)
    {
        $tabla = $this->db->table('usuarios');
        $tabla->set($data);
        $tabla->where('id', $id);
        return $tabla->update();
    }

    public function readForUsuario($data)
    {

        $usuario = $this->db->table('usuarios');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }

}
