<?php namespace App\Models;
	
	use CodeIgniter\Model;

class UsuarioModel extends Model{

    public function read(){
        $data = $this->db->query("SELECT * FROM usuarios");
        return $data->getResult();
    }
    
    public function create($datos){
        $usuarios = $this->db->table('usuarios');
        $usuarios->insert($datos);
		return $this->db->insertID(); 
    }
   

    public function modificate(){

    }
   // public function delete(){ }

}