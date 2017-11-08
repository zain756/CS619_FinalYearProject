<?php
	class EventDetail{
		private $eventID;
		private $eventDetailDaywiseList;
	
		function __construct (){
			$this->eventDetailDaywiseList = new Array();
		}
		
		public function seteventDetailDaywiseList($obj){
			$this->eventDetailDaywiseList[] = $obj;
		}
		
		public function geteventDetailDaywiseList($obj){
			return $this->eventDetailDaywiseList;
		}
		
		
	}

?>