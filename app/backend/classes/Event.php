<?php
	class Event{
		
		private $eventID;
		private $eventName;
		private $eventType;
		private $startDate;
		private $endDate;
		private $city;
		private $venue;
		private $charges;
		private $lastAction;         //NEW,ACCEPTED,REJECTED,MODIFIED
		private $eventDetailList         //eventDetail object
		
		function __construct(){
			$this->$eventDetailList = new Array();
			$this->$eventName = $name;
			$this->$eventType = $type;
			$this->$startDate = $startDate;
			$this->$endDate = $endDate;
			$this->$city = $city;
			$this->$venue = $venue;
			$this->$charges = $charges;
			$this->$lastAction = "NEW";
		}
		
		public function getEventById ($eventID){
			
		}
		public function setEventDetail($eventDetail){
			$this->eventDetailList[] = $eventDetail;
		}
		public function getEventDetail(){
			return $this->eventDetailList;
		
		
		public function setLastAction
		
		
		
	}

?>