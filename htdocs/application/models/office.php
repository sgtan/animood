<?php
	
	class Office extends CI_Model{
		private $officeName;
		private $officeDesc;

		public function getOfficeName(){
			return $this->officeName;
		}

		public function setOfficeName($officeName){
			$this->officeName = $officeName;
		}

		public function getOfficeDesc(){
			return $this->officeDesc;
		}

		public function setOfficeDesc($officeDesc){
			$this->officeDesc = $officeDesc;
		}
	}
?>