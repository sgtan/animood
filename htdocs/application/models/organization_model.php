<?php 
	class Organization_Model extends CI_Model{ 
	

		public function addMember($org, $id_num){
<<<<<<< HEAD
				$str_query = "INSERT INTO orgmember(orgCode,idnumber,type) VALUES('$org', $id_num, '2')"; 
=======
				$str_query = "INSERT INTO orgmember VALUES($org, $id_num, '2')"; 
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f

				$query_result = $this->db->query($str_query); 

				return $query_result;
		 } 

		public function getMembers($orgCode){ 
			$this->db->select('user.idnumber, firstname, lastname, email'); 
			$this->db->from('user');
			$this->db->join('orgmember', 'user.idnumber = orgmember.idnumber'); 
			$this->db->where('orgCode', $orgCode ); 
			$this->db->order_by('user.idnumber', 'asc');
			 
			$query = $this->db->get();
			return $query->result();

		}

		public function getOrgs($idnum){

			$this->db->select('orgCode, type'); 
			$this->db->from('orgmember');
			$this->db->where('idnumber', $idnum); 
			$this->db->order_by('orgCode', 'asc');
			 
			$query = $this->db->get();
			return $query->result();

		}

		public function getAdmins($orgCode){ 
			$this->db->select('user.idnumber, firstname, lastname, email'); 
			$this->db->from('user');
			$this->db->join('orgmember', 'user.idnumber = orgmember.idnumber'); 
			$this->db->where('orgCode', $orgCode ); 
			$this->db->where('orgmember.type', 1 ); 
			$this->db->order_by('user.lastname, user.firstname', 'asc');
			 
			$query = $this->db->get();
			return $query->result();

		}
		
		public function appointAdmins($users, $orgCode){
				$str_query = "UPDATE orgmember SET type = 1 WHERE orgCode = '$orgCode' AND idnumber IN("; 
				$ctr = 1;
				foreach($users as $user){
					$str_query .= "$user";
					
					if($ctr < count($users)) $str_query.=",";
					
					$ctr++;
				}
				
				$str_query.=")";
				
				$query_result = $this->db->query($str_query); 

				return $query_result;
		} 

		public function getOrgName($orgCode){
			$this->db->select('orgName');
			$this->db->from('organization');
			$this->db->where('orgCode', $orgCode);

			$query = $this->db->get();
			return $query->result();
		}
	}