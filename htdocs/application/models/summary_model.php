<?php
	class Summary_Model extends CI_Model{

		public function getMoodSummary(){
			$this->load->model('mood_model');

			$today = date("Y-m-d");
			
			$sum = 0;
			for($i=1; $i<=9; $i++){
				$mood = 0;
				if($type == 1)
					$mood = count($this->mood_model->getMoodCountStudentEval($i, $today));
				else if($type ==2)
					$mood = count($this->mood_model->getMoodCountOrgEval($i, $today));
				else if($type ==3)
					$mood = count($this->mood_model->getMoodCountEventEval($i, $today));
				else if($type ==4)
					$mood = count($this->mood_model->getMoodCountOfficeEval($i, $today));

				$sum += $mood;
			}

		}

		public function getRecommendation($type){
			$this->db->select('recommendation');
			$this->db->from('recommendation');
			if($type == 1){
				$this->db->join('recommendationId', 'recommendation.recommendationId = recommendationentry.recommendationId');
				$this->db->join('evaluationId', 'recommendationentry.evaluationId = evaluation.evaluationId');
			} else if ($type == 2){
				$this->db->join('recommendationId', 'recommendation.recommendationId = orgrecommendationentry.recommendationId');
				$this->db->join('evaluationId', 'orgrecommendationentry.evaluationId = orgevaluation.evaluationId');
			} else if($type == 3){
				$this->db->join('recommendationId', 'recommendation.recommendationId = orgeventrecommendationentry.recommendationId');
				$this->db->join('evaluationId', 'orgeventrecommendationentry.evaluationId = orgeventevaluation.evaluationId');
			} else if($type == 4){
				$this->db->join('recommendationId', 'recommendation.recommendationId = officerecommendationentry.recommendationId');
				$this->db->join('evaluationId', 'officerecommendationentry.evaluationId = officeevaluation.evaluationId');
			}

			$this->db->like('timestamp', date("Y-m-d"), 'after');

			$query = $this->db->get();
			return $query->result();
		}

		public function getComments($type){
			$this->db->select('comment');
			if($type==1)
				$this->db->from('evaluation');
			else if($type == 2)
				$this->db->from('orgevaluation');
			else if($type == 3)
				$this->db->from('orgeventevaluation');
			else if($type == 4)
				$this->db->from('officeevaluation');
			$this->db->like('timestamp', date("Y-m-d"), 'after');

			$query = $this->db->get();
			return $query->result(); 
		}
	}
?>