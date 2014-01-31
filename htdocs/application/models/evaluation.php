<?php
	
	class Evaluation extends CI_model{
		private $evaluationId;
		private $enlistmentId;
		private $comment;
		private $timestamp;

		public function getEvaluationId(){
			return $this->evaluationId;
		}

		public function setEvaluationId($evaluationId){
			$this->evaluationId = $evaluationId;
		}

		public function getEnlistmentId(){
			return $this->enlistmentId;
		}

		public function setEnlistmentId($enlistmentId){
			$this->enlistmentId = $enlistmentId;
		}

		public function getComment(){
			return $this->comment;
		}

		public function setComment($comment){
			$this->comment = $comment;
		}

		public function getTimestamp(){
			return $this->timestamp;
		}

		public function setTimestamp($timestamp){
			$this->timestamp = $timestamp;
		}

	}
?>