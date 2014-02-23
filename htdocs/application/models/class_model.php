<?php
	class Class_Model extends CI_Model{
		
		public function getCourses($idnumber, $termay){
			  $this->db->select( 'coursecode, section');
			  $this->db->from('classassignment');
			  $this->db->where('idnumber', $idnumber);
			  $this->db->where('termay', $termay);
			  
			  $query = $this->db->get();
			  return $query->result();
		}
	}
?>