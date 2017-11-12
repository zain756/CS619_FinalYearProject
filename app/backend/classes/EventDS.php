<?php
class EventDS{
		
		public $eventID;
		public $eventName;
		public $eventType;
		public $startDate;
		public $endDate;
		public $city;
		public $venue;
		public $charges;
		public $status;         //NEW,ACCEPTED,REJECTED,MODIFIED
		public $eventDetaildaywise;         //eventDetail object
		
		function __construct($id, $name, $type, $startDate, $endDate, $city, $venue, $charges, $status){
			$this->eventDetaildaywise = [];
			$this->eventID = $id;
			$this->eventName = $name;
			$this->eventType = $type;
			$this->startDate = $startDate;
			$this->endDate = $endDate;
			$this->city = $city;
			$this->venue = $venue;
			$this->charges = $charges;
			$this->status = $status;
		}
		
		
		public function setEventDetail($eventDetail){
			$this->eventDetaildaywise[] = $eventDetail;
		}
		public function getEventDetail(){
			return $this->eventDetaildaywise;
		}
		
		
		public function setLastAction($act){
			$this->lastAction = $act;
		}
		
		
		
}

?>