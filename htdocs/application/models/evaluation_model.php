<?php
	class Evaluation_Model extends CI_Model{
		
		public function getEvalQuestions($type){
		   $this->db->select('question, questionid');
		   $this->db->from('question');
		   $this->db->where('type', $type);

		   $query = $this->db->get();
		   return $query->result();

		}

		public function getProfessor($courseCode, $section, $termay){
			$this->db->select('firstname, lastname'); 
			$this->db->from('user'); 
			$this->db->join('classassignment', 'user.idnumber = classassignment.idnumber'); 
			$this->db->where('termay', 21314 ); 
			$this->db->where('coursecode', $courseCode); 
			$this->db->where('section', $section); 
			$this->db->where('type', 2);

			$query = $this->db->get();
			return $query->result();
		}

		public function getEvalRecom($type){
			$this->db->select('recommendation, recommendationid');
			$this->db->from('recommendation');
			$this->db->where('type', $type);

			$query = $this->db->get();
			return $query->result();
		}

		public function insertEval($idnum, $termay, $code, $sec, $comment, $timestamp){
			
			$this->db->set('idnumber', $idnum);
			$this->db->set('termay', $termay);
			$this->db->set('courseCode', $code);
			$this->db->set('section', $sec);
			$this->db->set('comment', $comment);
			$this->db->set('timestamp', $timestamp);

			$this->db->insert('evaluation');
			
			return $this->db->insert_id();
		}

		public function insertRecom($id, $checkbox, $type){
			for($i=0; $i<count($checkbox); $i++){
				$this->db->set('evaluationid', $id);
				$this->db->set('recommendationid', $checkbox[$i]);

				if($type==1)
					$this->db->insert('recommendationentry');
				else if($type==2)
					$this->db->insert('orgrecommendationentry');
				else if($type==3)
					$this->db->insert('orgeventrecommendationentry');
				else if($type==4)
					$this->db->insert('officerecommendationentry');
			}
		}

		public function insertAns($id, $question, $answer, $type){
			for($i=0; $i<count($question); $i++){
				$this->db->set('evaluationid', $id);
				$this->db->set('questionid', $question[$i]);
				$this->db->set('moodid', $answer[$i]);

				if($type==1)
					$this->db->insert('evalentry');
				else if($type==2)
					$this->db->insert('orgevalentry');
				else if($type==3)
					$this->db->insert('orgeventevalentry');
				else if($type==4)
					$this->db->insert('officeevalentry');
			}
		}

		public function insertOrgEval($idnum, $orgCode, $termay, $comment, $timestamp){
			$this->db->set('idnumber', $idnum);
			$this->db->set('orgCode', $orgCode);
			$this->db->set('termay', $termay);
			$this->db->set('comment', $comment);
			$this->db->set('timestamp', $timestamp);

			$this->db->insert('orgevaluation');

			return $this->db->insert_id();
		}
		
		public function insertEventEval($idnum, $eventid, $comment, $timestamp){
			$this->db->set('idnumber', $idnum);
			$this->db->set('eventid', $eventid);
			$this->db->set('comment', $comment);
			$this->db->set('timestamp', $timestamp);

			$this->db->insert('orgeventevaluation');
			
			return $this->db->insert_id();
		}

		public function insertOfficeEval($idnum, $officeid, $termay, $comment, $timestamp){
			$this->db->set('idnumber', $idnum);
			$this->db->set('officeid', $officeid);
			$this->db->set('termay', $termay);
			$this->db->set('comment', $comment);
			$this->db->set('timestamp', $timestamp);

			$this->db->insert('officeevaluation');

			return $this->db->insert_id();
		}
	}


?>