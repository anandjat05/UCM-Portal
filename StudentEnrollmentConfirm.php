<?php
//Created By Ashwani Koul
//Student ID:- 700671753
session_start();
if(!empty($_POST))
{
	if(!empty($_POST['confirmationButton']))
	{
		// save info into database from taking GET url parameter. Round Trip:
		// Credentials For DataBase:
		$servername= "localhost";
		$username= 'root';
		$password= '';
		$database= 'ucm_student_portal';
		//Declaring variables for values, and creating SQL query;
		$fName= $_GET['fName'];
		$lName= $_GET['lName'];
		$email= $_GET['email'];
		$ucmId= $_GET['ucmId'];
		$gender= $_GET['gender'];
				
		$_SESSION['message'] = "Thank You ".$fName.' '.$lName.", Thanks For Choosing UCM Shuttle Service, You Are Successfully Registered For Buss Service. ";;
			
		$sql= "INSERT INTO registration(firstName, lastName, emailAddress, studentID, genderSelection) 
				VALUES('$fName', '$lName', '$email', '$ucmId', '$gender');";
		
		//Connection object.
		$connection= new mysqli($servername, $username, $password, $database);
			
		//connected to the batabase.
		if ($connection -> errno){
			echo "Connection failed: Error Details: " .$connection->errno. "<br>";
			die ($connection->error);
		}//Connect Check
			
		try{
			//run the insert query.
			if ($connection-> query($sql)){
				//Query Succeeded:
			}else{
				throw new Exception("Insert Failed". $connection->error);
			}//End if/else For insert Q.
		}catch(Exception $e){
			echo ("Error: ".$e->getMessage());
			exit;
		}//End try catch.
		$connection->close();
		header("Location: confirmationReceipt.php");
		
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<!--Created By Ashwani Koul
		Student ID:- 700671753-->
		
		<title>Student Enrollment Form</title>
		<meta charset = "utf-8"/>
		<script type = "text/javascript" src = "studentEnrollment.js"></script>
		<link rel = "stylesheet" href ="studentEnrollmentConfirm.css"/>
		
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0"/>
		<!--BootStrap Start-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class = "img"></div>
		<!--Used Nav Bar-->
			<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="index.php">UCM</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="gallery.php">UCM Gallery</a></li>
					<li><a href="login.html">New Student</a></li>
					<li><a href="faculty.php">UCM Faculty</a></li>
					<li><a href="ShuttleService.html">Shuttle Schedule</a></li>
					<li><a href="NewsEvents.html">Events & News</a></li>
					<li><a href="bookPage.html">Books</a></li>
					<li><a href="games.php">Games</a></li>
					<li><a href="teamNew.php">Team</a></li>
				</ul>
			</div>
		</nav>
			<!--Class For Signup-->
		<div class ="signUp">
			<!--Form Created -->
			<form action = "#" method="post"  >
				<input name="page" id="page" type="hidden" value="page">
					<h1>UCM Shuttle Confirmation Check</h1>
					<hr>
					<p>First Name:<label name ="firstName" id="firstName"><?php echo $_GET['fName']?></label></p></br>
			
					<p>Last Name:<label name = "lastName" id="lastName"><?php echo $_GET['lName']?></label></p></br>
			
					<p>Email Address:<label name = "emailAddress" id="emailAddress"><?php echo $_GET['email']?></label></p></br>
			
					<p>Student ID:<label name = "studentID" id="studentID"><?php echo $_GET['ucmId']?></label></p></br>
			
					<p>Gender:<label name = "genderSelection" id="genderSelection"><?php echo $_GET['gender']?></label></p></br>
			
					<p>Please verify details once again and proceed further with confirmation.</p>
			
					<a href="studentEnrollment.html""><input type="button" value="Back" name="confirmationEditButton" id="confirmationEditButton" ></a>
					<input type="submit" value="Confirm" name="confirmationButton" id="confirmationButton">
					
			</form>
		</div>
	</body>
</html>