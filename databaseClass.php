<?php
//Created by Abhideep Dharga:
//ID:700641014
	class DatabaseClass{
		protected static $connection;
		
		public function connect(){
			if(!isset(self::$connection)){
				include("dbConfig.php");
				self::$connection = new mysqli($host,$username,$password,$dbname);
			}//end if:
			
			if(self::$connection===false){
				return false;
			}//end if:
			return self::$connection;
		}//end of function:
		
		public function Select($query){
			$connection = $this->connect();
			$result = $connection->query($query);
			if(!$result){
				return $connection->error;
			}else{
				return $result;
			}//end if/else:
		}//end of function:
		
		public function error(){
			$connection = $this->connect();
			return $connection->error;
		}//end of function:
		
	}//end of class:


?>