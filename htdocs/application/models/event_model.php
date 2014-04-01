<?php
	class Event_Model extends CI_Model{

		public function getEventList(){
			$this->db->select('*');
			$this->db->from('orgevent');

			$query = $this->db->get();
			return $query->result();
		}
	}
?>