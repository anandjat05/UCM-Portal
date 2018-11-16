<?php
			//Created By: Anand Jat
			//Id: 700673474
			session_start();
			
			if(isset($_POST['submit'])){
				//round trip
				//credentials for db:
				$servername = "localhost";
				$username = "root";
				$password = "";
				$database = "ucm_student_portal";
				
				$ucmId = $_POST['ucmId'];
				$fName = $_POST['fName'];
				$lName = $_POST['lName'];
				$email =$_POST['email'];
				$gender =$_POST['gender'];
				$pass =$_POST['password'];
				$rePassword =$_POST['rePassword'];
				
				$dobDay = $_POST['dobDay'];
				$dobMonth = $_POST['dobMonth'];
				$dobYear = $_POST['dobYear'];
				
				$dob = $dobYear.'-'.$dobMonth.'-'.$dobDay;
				
				$passEncrypt = md5($pass); //encryption of password for enhancing the security of password
				$result;
				
				$sql = "INSERT INTO students_registration (ucmId, fName, lName, email, password, gender, dob) 
				VALUES ('$ucmId', '$fName', '$lName', '$email', '$passEncrypt', '$gender', '$dob')";
				
				//connection object
				$connection = new mysqli($servername, $username, $password, $database);
				
				//try to connect to the database
				if($connection->errno){
					echo"Connection failed: Error Details: ".$connection->errno."</br>";
					die ($connection->error);
				}
				//connect check
				try{
					if($connection->query($sql)){
						//query succeed
						$_SESSION['fName'] = $fName;
						$_SESSION['lName'] = $lName;
						$_SESSION['message'] = "Congratulations!! "."<strong>".$_SESSION['fName'].' '.$_SESSION['lName']."</strong>"." Your Account is Created";
						header('location: enrollment.php'); //redirect to index page
					}else{
						//die
						throw new Exception("Insert Failed". $connection->error);
					}//end if else for insert query
				}catch(Exception $e){
					echo ("Error:".$e->getMessage());
					//error handling
				}//end try catch
			}//end if round trip
			$connection->close();
		
		?>