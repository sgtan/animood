<?php
	
	class Organization extends CI_Model{
		private $orgName;
		private $orgDesc;

		public function getOrgName(){
			return $this->orgName;
		}

		public function setOrgName($orgName){
			$this->orgName = $orgName;
		}

		public function getOrgDesc(){
			return $this->orgDesc;
		}

		public function setOrgDesc($orgDesc){
			$this->orgDesc = $orgDesc;
		}
	}
?>