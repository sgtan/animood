<?php
	class Assignment extends CI_Model{
		private $assignmentId;
		private $termAy;
		private $idNumber;
		private $courseCode;
		private $section;

		public function getAssignmentId(){
			return $this->enlistmentId;
		}

		public function setAssignmentId($assignmentId){
			$this->assignmentId = $assignmentId;
		}

		public function getTermAy(){
			return $this->termAy;
		}

		public function setTermAy($termAy){
			$this->termAy = $termAy;
		}

		public function getIdNumber(){
			return $this->idNumber;
		}

		public function setIdNumber($idNumber){
			$this->idNumber = $idNumber;
		}

		public function getCourseCode(){
			return $this->courseCode;
		}

		public function setCourseCode($courseCode){
			$this->courseCode = $courseCode;
		}

		public function getSection(){
			return $this->section;
		}

		public function setSection($section){
			$this->section = $section;
		}
	}
?>