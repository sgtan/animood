<?php

class User_Model extends CI_Model{

	public function getAll(){
		
		$query =$this->db->query("SELECT * FROM student");
	
		return $query->result();
	}


	public function insert2($data){
		$this->db->insert("student", $data);

	}
	
}
