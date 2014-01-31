<?php
	class Evaluation_Model extends CI_Model{
		
		public function getEvalQuestions($type){
		   $this->db->select('question');
		   $this->db->from('question');
		   $this->db->where('type', $type);

		   $query = $this->db->get();
		   return $query->result();

		}

		public function getEvalRecom($type){
			$this->db->select('recommendation');
			$this->db->from('recommendation');
			$this->db->where('type', $type);

			$query = $this->db->get();
			return $query->result();
		}

		public function saveEntry($evalInfo, $entryInfo){
			$this->db->insert("evaluation",$evalInfo);
			$this->db->insert("evalentry", $entryInfo);
		}
	}


?>