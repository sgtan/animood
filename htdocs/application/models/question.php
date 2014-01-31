<?php
	
	class Question extends CI_Model{
		private $question;
		private $type;

		public function getQuestion(){
			return $this->question;
		}

		public function setQuestion($question){
			$this->quesstion = $question;
		}

		public function getType(){
			return $this->type;
		}

		public function setQuestion($type){
			$this->type = $type;
		}

	}
?>