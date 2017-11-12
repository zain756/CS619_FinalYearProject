<?php
	class EventDetailDaywise{
		private $eventID;
		public $eventDay;
		public $destinationsList;
		public $pickUpTimesList;
		public $stayTimesList;
		public $isBreakfast;
		public $isLunch;
		public $isDinner;
		
		function __construct ($id, $eventDay, $destList, $pickList, $stayList,$isB, $isL, $isD){
			$this->eventID = $id;
			$this->eventDay = $eventDay;
			$this->destinationsList = $destList;
			$this->pickUpTimesList = $pickList;
			$this->stayTimesList = $stayList;
			$this->isBreakfast = $isB;
			$this->isDinner = $isD;
			$this->isLunch = $isL;
			
		}
		
		public function setEventID ($id){
			$this->eventID = $id;
		}
	     
		public function setDestinationsList ($dest){
			$this->destinationsList[] = $dest;
		} 
		
		
        public function setpickUpTimesList ($time){
			$this->pickUpTimesList[] = $time;
		}		
		public function setstayTimesList ($time){
			$this->stayTimesList[] = $time;
		}
		public function getDestinationsList (){
			return $this->destinationsList;
		} 
		
		
        public function getpickUpTimesList (){
			return $this->pickUpTimesList;
		}		
		public function getstayTimesList (){
			return $this->stayTimesList;
		}
		
	}

?>