<?php
	include_once ("databaseClass.php");
	function getFaculty($select){
		$dbClass= new DatabaseClass;
		$selectsql= "SELECT * FROM ucm_faculty WHERE name=".$select;
		
		try{
			$result= $dbClass->Select($selectsql);
			if($result){
				return $result;
			}//end if:
		}catch(Exception $e){
			echo"faculty not found";
		}//end of try/catch:
	}//end of function getFaculty:
	
?>