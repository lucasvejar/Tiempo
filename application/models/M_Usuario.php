<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Usuario extends CI_Model {

	/* Atributos */
	public $id_usuario;
	public $password;
	public $nombre_usuario;
	public $email_usuario;



	function init($row){
		$this->id_usuario = $row->id_usuario;
		$this->password = $row->password;
		$this->nombre_usuario = $row->nombre_usuario;
		$this->email_usuario = $row->email_usuario;
	}
	

	function obtenerUno($dni)
    {
		$this->db->from('usuario');
		$this->db-> where('dni_usuario', $dni);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$row = $query->result();
			$new_object = new self();
			$new_object->init($row[0]);
			return $new_object;
		} else {
			return false;
		}
	}

	function obtenerPorID($id)
    {
		$this->db->from('usuario');
		$this->db-> where('id_usuario', $id);
		$query = $this->db->get();

		if ($query->num_rows() == 1) {
			$row = $query->result();
			$new_object = new self();
			$new_object->init($row[0]);
			return $new_object;
		} else {
			return false;
		}
	}

	function existeUsuario($dni,$email)
	{
		$this-> db -> from('usuario');
		$this-> db -> where('dni_usuario',$dni);
		$this-> db -> where('email_usuario',$email);
		$query = $this -> db -> get();
		if ($query->num_rows()>0) {
			return true;
		} else {
			return false;
		}
		
	}

	function obtenerTodos()
	{
		$result = array();
		$this->db->from('usuario');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$new_object = new self();
				$new_object->init($row);
				$result[] = $new_object;
			}
			return $result;
		} else {
			return false;
		}
	}
	

	function IniciarSesion($email_usuario,$password)
	{
		$consulta = $this->db->get_where('usuario', array('email_usuario' => $email_usuario, 'password' => md5($password)));
		if ($consulta->num_rows()>0) {
			$usuario = $consulta->result_array()[0];
			return $usuario;
		} else {
			return false;
		}
	}


	function updateUsuario($data)
	{
		$this-> db -> where('dni_usuario',$data['dni_usuario']);
		return $this -> db -> update('usuario',$data);
	}

	function guardarUsuario($data)
	{
		return $this -> db -> insert('usuario',$data);
	}



}

/* End of file M_Usuario.php */
/* Location: ./application/models/M_Usuario.php */