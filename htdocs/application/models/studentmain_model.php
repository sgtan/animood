<?php

	class studentmain_model extends CI_Model{

		public function getTopProf(){
			$queryStr = "SELECT concat(firstname,' ',lastname) AS total  FROM USER where type = 2";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getTopOffice(){
			$queryStr = "SELECT officeName AS total  FROM office";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getTopOrg(){
			$queryStr = "SELECT orgName AS total  FROM organization";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}
		

	
	}

?>