<?php

	class FacultyMain_Model extends CI_Model{

		public function getMoodID($idnumber, $moodID){
<<<<<<< HEAD
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314 AND questionID = 1;";
=======
			$queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
			
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID2($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314 AND questionID =1;";
			
=======
		public function getMoodID1($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 1 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID3($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314 AND questionID =1;";
			
=======
		public function getMoodID2($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 2 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID4($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314 AND questionID =2;";
			
=======
		public function getMoodID3($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 3 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID5($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314 AND questionID =2;";
			
=======
		public function getMoodID4($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 4 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID6($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314 AND questionID =2;";
			
=======
		public function getMoodID5($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 5 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
			public function getMoodID7($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 11314;";
			
=======
		public function getMoodID6($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 6 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID8($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
			
=======
		public function getMoodID7($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 7 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD
		public function getMoodID9($idnumber, $moodID){
			$queryStr = "SELECT COUNT($moodID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = $moodID AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 31314;";
			
=======
		public function getMoodID8($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 8 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		    $query = $this->db->query($queryStr); 
		    return $query->result();
		}

<<<<<<< HEAD

		


		public function getMoodNames(){
			$queryStr = "SELECT moodid, name FROM MOOD";

			$query = $this->db->query($queryStr);
			return $query->result();
=======
		public function getMoodID9($idnumber){
		   $queryStr = "SELECT COUNT(MOODID) AS total FROM EVALENTRY, EVALUATION, classassignment WHERE EVALENTRY.moodID = 9 AND classassignment.idnumber = $idnumber AND classassignment.coursecode = evaluation.coursecode AND evalentry.evaluationID = evaluation.evaluationID AND evaluation.termay = 21314;";
		    $query = $this->db->query($queryStr); 
		    return $query->result();
>>>>>>> 6f43911c29a27dbe7133d4430f3bbf469fec4a2f
		}
	}
