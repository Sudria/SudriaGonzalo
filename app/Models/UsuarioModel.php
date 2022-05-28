<?php namespace App\Models;
	
	use CodeIgniter\Model;

class UsuarioModel extends Model{

    public function read(){
        $data = $this->db->query("SELECT * FROM usuarios");
        return $data->getResult();
    }
    

    public function create($datos){
        $usuarios = $this->db->table('usuarios');
		return $usuarios->insert($datos);
    }
   

    public function deleteForId($id){
           return $this->db->query("DELETE FROM `usuarios` WHERE `usuarios`.`id` = $id"); 
        }


    public function readForId($id){
        $data = $this->db->query("SELECT * FROM usuarios WHERE id = $id");
        return $data->getResult();
    }


    public function readForUsuario($data){
      
        $Usuario = $this->db->table('usuarios');
        $Usuario->where($data);
        return $Usuario->get()->getResultArray();
    }

    /* public function update($data){
           return $this->db->query("UPDATE `usuarios` SET `nombre` = 'Gonzalo',
            `apellido` = '$data->apellido', `email` = '$data->email', `direccion` = '$data->direccion',
             `telefono` = '$data->telefono', `usuario` = 'sdasa', `dni` = 'sadasa', `contraseña` = 'asdasa' 
             WHERE `usuarios`.`id` = $data->id; ");
        }
*/
        
    }