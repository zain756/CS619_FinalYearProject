<?php
//require_once('DBConnection.php');

	class User extends DBConnection{
		private $event;              //Event class object
		private $authenAdmin;         //AuthenticateAdmin class object
		private $userDetail;            //UserDetails object
		
		
	
		public function createUserAccount($userDetail){
			echo  "hello";
			
			
		}
		
		public function createEvent($event){
			
		}
		
		public  function getEvent($id){
			parent::createConnection();
			
			//echo "getttt";
			
		}
		private function addEventDetails ($eventDetail){
			
		}
		public function modifyEvent ($event){
			
		}
		private function modifyEventDetails ($event){
			
		}
		public function subscribeToEmails ($userId){
			
		}
		public function unsubscribeToEmails ($userId){
			
		}
		public function viewMyEvents (){
			
			
		}
		
		
		
	}

?>