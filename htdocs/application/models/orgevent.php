<?php
	
	class Orgevent extends CI_Model{
		private $eventName;
		private $eventDesc;

		public function getEventName(){
			return $this->eventName;
		}

		public function setEventName($eventName){
			$this->eventName = $eventName;
		}

		public function getEventDesc(){
			return $this->eventDesc;
		}

		public function setEventDesc($eventDesc){
			$this->eventDesc = $eventDesc;
		}
	}
?>