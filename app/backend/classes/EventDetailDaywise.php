<?php
	class EventDetail{
		private $eventID;
		private $destinationsList
		private $pickUpTimesList;
		private $stayTimesList;
		
		function __construct (){
			$this->$eventID = $eventID;
			$this->$destinationsList = new Array();
			$this->$pickUpTimesList = new Array();
			$this->$stayTimesList = new Array();
			
		}
		
		public function setEventID ($id){
			$this->$eventID = $id;
		}
	     
		public function setDestinationsList ($dest){
			$this->$destinationsList[] = $dest;
		} 
		
		public function setDestinationsList ($dest){
			$this->$destinationsList[] = $dest;
		}
        public function setpickUpTimesList ($time){
			$this->$pickUpTimesList[] = $time;
		}		
		public function setstayTimesList ($time){
			$this->$stayTimesList[] = $time;
		}
		public function getDestinationsList (){
			return $this->$destinationsList;
		} 
		
		public function getDestinationsList (){
			return $this->$destinationsList;
		}
        public function getpickUpTimesList (){
			return $this->$pickUpTimesList;
		}		
		public function getstayTimesList (){
			return $this->$stayTimesList;
		}
		
	}

?>