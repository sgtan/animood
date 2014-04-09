<?php

	class FacultyMain_Model extends CI_Model{

		public function getMoodID($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314 AND questionID = 1;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID2($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314 AND questionID =1;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID3($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314 AND questionID =1;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID4($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314 AND questionID =2;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID5($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314 AND questionID =2;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID6($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314 AND questionID =2;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

			public function getMoodID7($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID8($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

		public function getMoodID9($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314;";
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}


		


		public function getMoodNames(){
			$queryStr = "SELECT moodid, name FROM MOOD";

			$query = $this->db->query($queryStr);
			return $query->result();
		}
	}
