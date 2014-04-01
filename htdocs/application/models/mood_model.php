<?php
	
	class Mood_Model extends CI_Model{

		public function getMoodColor($mood){
			$this->db->select('bgcolor');
			$this->db->from('mood');
			$this->db->where('name', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodColorbyId($mood){
			$this->db->select('bgcolor');
			$this->db->from('mood');
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodById($mood){
			$this->db->select('name');
			$this->db->from('mood');
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMood(){
			$this->db->select('name');
			$this->db->from('mood');

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodOfTheDay(){
			$today = date("Y-m-d");
			
			$greatest = 0;
			$greatestIndex =0;

			for($i=1; $i<=9; $i++){
				$sum = 0;
				$sum += count($this->getMoodCountStudentEval($i, $today));
				$sum += count($this->getMoodCountOrgEval($i, $today));
				$sum += count($this->getMoodCountEventEval($i, $today));
				$sum += count($this->getMoodCountOfficeEval($i, $today));

				if($sum > $greatest){
					$greatest = $sum;
					$greatestIndex = $i;
				}
			}

			if($greatestIndex == 0)
				return 5;
			else
				return $greatestIndex;

		}

		public function getMoodCountStudentEval($mood, $date){
			$this->db->select('moodId');
			$this->db->from('evalentry');
			$this->db->join('evaluation', 'evalentry.evaluationID = evaluation.evaluationID');
			$this->db->like('timestamp', $date);
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodCountOrgEval($mood, $date){
			$this->db->select('moodId');
			$this->db->from('orgevalentry');
			$this->db->join('orgevaluation', 'orgevalentry.evaluationID = orgevaluation.evaluationID');
			$this->db->like('timestamp', $date, 'after');
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodCountEventEval($mood, $date){
			$this->db->select('moodId');
			$this->db->from('orgeventevalentry');
			$this->db->join('orgeventevaluation', 'orgeventevalentry.evaluationID = orgeventevaluation.evaluationID');
			$this->db->like('timestamp', $date, 'after');
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}

		public function getMoodCountOfficeEval($mood, $date){
			$this->db->select('moodId');
			$this->db->from('officeevalentry');
			$this->db->join('officeevaluation', 'officeevalentry.evaluationID = officeevaluation.evaluationID');
			$this->db->like('timestamp', $date, 'after');
			$this->db->where('moodId', $mood);

			$query = $this->db->get();
			return $query->result();
		}
	}
	
?>