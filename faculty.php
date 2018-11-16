<!--Created By: Abhideep Dharga 
	ID:700651014 -->
	<?php
	include_once ("databaseClass.php");
	?>
<!DOCTYPE html>  
<html>
   <head>
		<meta charset="utf-8">
		<link rel ="stylesheet" href="faculty.css" text="text/css"/>
		<title>Faculty</title>
			
		<!--BootStrap Start-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  
	</head>
    <body>
	<!--Nav bar started-->
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
		<!--image div started-->
       	<div id="main">
			<img src="faculty.JPG" alt="background image" style="width:100%; background-repeat:repeat-x;
			position:relative; z-index=-10; padding-top:0%;"/>
		</div>
		<!--Home div for faculty area-->	
		<div id="home">
		
			<div id="faculty">
				<form method="POST" action="#">
					<p>UCM Faculty:<select name="select">
							<?php
							
							$dbClass= new DatabaseClass();
							$selectsql= "SELECT * FROM ucm_faculty ";
							
							try{
								$result= $dbClass->Select($selectsql);
								if($result){
									
									 while($row = $result->fetch_assoc()) 
									{
										echo '<option value="'.$row['faculty_id'].'">'.$row['name'].'</option>';
									}
								}//end if:
							}catch(Exception $e){
								echo"faculty not found";
							}
							?>
							
							</select>
					</p>
					<p><input type="submit" value="Faculty Details" name="submit"></p>
				</form>
				<?php
					if(isset($_POST['submit'])){
						
						$selectsql= "SELECT `name`, `position`, `address`, `email`, `degree`, `telephone` FROM ucm_faculty WHERE faculty_id= '".$_POST['select']."'";
						$result= $dbClass->Select($selectsql);
						?>
						<table>
						<caption style="color:white;"><center><b>Faculty Details</b></center></caption>
						<?php
							while($row = $result->fetch_assoc ()){
								
								foreach($row as $value){
									print("<tr>");
									print ("<td>$value</td>");
									print("</tr>");
								}//end foreach:
								
							}//end while
						?>
					</table>
						<?php
					}
				?>
		</div>
		
	
	</body>
</html>
	
	











