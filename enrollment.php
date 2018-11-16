<!DOCTYPE html>
<html>
	<head>
		<!-- Created by Anand Jat
		Id: 700673474 -->
		<title>Student Enrollment Form</title>
		<meta charset = "utf-8"/>
		<link rel = "stylesheet" href = "index1.css"/>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0"/>
		<!--bootstarp start-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		
	</head>
	<body>
		<div class = "img">
			<div class ="signUp">
			<form method = "post" action = "studentEnrollment.php" onsubmit = "return validation()">
				<h1><strong>UCM Student Enrollment</strong></h1>
				<hr>
					<div class = "display">
						<h4><?php
							session_start();
							echo $_SESSION['message'];
							
						?></h4>
					</div>
				<div>
					<a href = "login.html"><input type = "button" id = "signIn" name = "signIn" value = "Login"></a>
					<a href = "studentEnrollment1.html"><input type = "button" id = "signUp" name = "signUp" value = "Student Enrollment"></a>
				</div>
			
				<div class = "copyRight">
					© Ucm Sign-In Form. All Right Reserved | Design by Anand Jat
				</div>
			
			</form>
			</div>
		</div>
	</body>

</html>