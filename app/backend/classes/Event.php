<?php
class Event extends DBConnection{
		
		private $eventDS;
		private $eventDetailDaywise;
		private $eventDSList;
		private $resp;
		private $conn;

		function __construct(){
			parent:: __construct();
			//$this->conn = parent :: createConnection();
			$this->eventDSList = [];
			$this->resp = [];
			
			
		}
		
		
		
		
		public function getEvent($id){
			
			$this->conn = parent :: createConnection();
			$sql = "SELECT eventid,eventname,eventtype,startdate,enddate,city,venue,charges,status FROM Event where eventid = '$id'";
            $result = $this->conn->query($sql);
            //getting row from event table
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					$this->eventDS = new EventDS($row["eventid"], $row["eventname"], $row["eventtype"],$row["startdate"],
                                                 $row["enddate"],$row["city"], $row["venue"], $row["charges"],$row["status"]);
                }
            } 
			else {
                echo "0 results";
            }
			//getting rows from eventdetails table
			$sql = "SELECT eventid,eventday,destination,pickuptime,stay,isBreakfast,isLunch,isDinner FROM eventdetails where eventid = '$id'";
            $result = $this->conn->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					$this->eventDetailDaywise = new EventDetailDaywise($row["eventid"], $row["eventday"], $row["destination"],$row["pickuptime"],
                                                 $row["stay"],$row["isBreakfast"], $row["isLunch"], $row["isDinner"]);
					$this->eventDS->eventDetaildaywise[] = $this->eventDetailDaywise;						 
                }
            } 
			else {
                echo "0 results";
            }
	        return $this->eventDS;
		}
		public function addEvent($eventTypeObj){
			
		}
		
		public function modifyEvent($eventTypeObj){
			
		}
		
		public function deleteEvent($id){
			
		}
		
		public function getManyEvents($status, $user){
			$this->conn = parent :: createConnection();
			$sql = "SELECT eventid FROM Event where status = '$status'";
            $result =$this->conn ->query($sql);
            
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					$this->eventDSList[] = $this->getEvent($row["eventid"]);
                }
				$this->resp["count"] = $this->getEventsCount($status, $user);
				$this->resp["results"] = $this->eventDSList;
            } 
			else {
                echo "0 results";
            }
	        return $this->resp;
		}
		
		public function getEventsCount($status, $user){
			$this->conn = parent :: createConnection();
			$count = "";
			$sql = "SELECT count(*) as count FROM Event where status = '$status'";
            $result =$this->conn ->query($sql);
           
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
					 $count = $row["count"];
                }
            } 
			else {
                echo "0 results";
            }
			return $count;     
		}
		
		
}

?>