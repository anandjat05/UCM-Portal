<?php
	
	//$_SERVER;
	session_start();
	
	
		$conn = new mysqli('localhost', 'root', '', 'ucm_student_portal');
		
		if(@$_SESSION['proper_credentials'] == 1){
		
		header('location: dashboard.php');
	}	
	
	
	if(!empty(@$_POST)){
			
		
			// Create connection
		
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT ucmId FROM students_registration where ucmId = '".@$_POST['ucmId'] ."' and password = '".md5(@$_POST['password'])."' ";
			//$fname = "SELECT fName FROM students where ucmId = $ucmId";
			
			
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				// output data of each row
						$_SESSION['proper_credentials'] = 1;
						//echo "send me on dashboard page";
						$_SESSION['fName'] = $fname;
						$_SESSION['message'] = "Welcome!! "."<strong>".$_SESSION['$fName']."</strong>"." Your Have Logged In , Your Schedule is under process will reached you Shortly..!!";
						header('location: dashboard.php');
			} else {
				echo "Sorry!! Invalid Credentials";
				
				}
			$conn->close();
	
	}
	
?>