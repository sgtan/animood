<?php
	
	class Evalentry extends CI_model{
		private $entryId;
		private $evaluationId;
		private $questionId;
		private $moodId;

		public function getEntryId(){
			return $this->entryId;
		}

		public function setEntryId($entryId){
			$this->entryId = $entryId;
		}

		public function getEvaluationId(){
			return $this->evaluationId;
		}

		public function setEvaluationId($evaluationId){
			$this->evaluationId = $evaluationId;
		}

		public function getQuestionId(){
			return $this->questionId;
		}

		public function setQuestionId($questionId){
			$this->questionId = $questionId;
		}

		public function getMoodId(){
			return $this->moodId;
		}

		public function setMoodId($moodId){
			$this->moodId = $moodId;
		}

	}
?>