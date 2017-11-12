<?php
	class DBConnection{
		private $servername;
        private $username;
        private $password;
        private $dbname;
		private $conn;
		
		function __construct (){
		   $this->servername = "localhost";
           $this->username = "root";
           $this->password = "";
           $this->dbname = "eims";
			
		}
 
        public function createConnection(){
			//echo "conn";
			//echo $this->username;
			
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
			//$conn = new mysqli($this->servername, 'root', '', 'eims');
            // Check connection
            if ($this->conn->connect_error) {
				
                die("Connection failed: " . $conn->connect_error);
            } 
            else{ 
            	//echo "connection Successful";
				 //echo $this->conn->connect_error;
				 
			    
			}
	        return $this->conn;
	    }
		
		public function closeConnection(){
			$this->conn->close();
		}
			
		
}




?>