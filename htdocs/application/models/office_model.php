<?php
	class Office_Model extends CI_Model{

		public function getOfficeList(){
			$this->db->select('*');
			$this->db->from('office');

			$query = $this->db->get();
			return $query->result();
		}
	}
?>