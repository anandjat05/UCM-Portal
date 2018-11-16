<!DOCTYPE html>
<html>
	<head>
		<!-- Created by Anand Jat
		Id: 700673474 -->
		<title>Student Enrollment Form</title>
		<meta charset = "utf-8"/>
		<link rel = "stylesheet" href = "dashboard.css"/>
		<meta name = "viewport" content = "width = device-width, initial-scale = 1.0"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		
	</head>
	<body>
		<div class = "img">
			<div class ="signUp">
			
				<h1>UCM Student Enrollment</h1>
				<hr>
					<div class = "display">
						<?php
							session_start();

							if($_SESSION['proper_credentials'] == 1){
								echo $_SESSION['message'];
							}
							else
							{
							header("Location: login.php");
							}
						?><br>
						<a href ="logout.php"><input type = "button" id = "signOut" name = "signOut" value = "Logout"></a>
					</div>
				<div class = "copyRight">
					© Ucm Sign-In Form. All Right Reserved | Design by Anand Jat
				</div>
			
			
			</div>
		</div>
	</body>

</html>
