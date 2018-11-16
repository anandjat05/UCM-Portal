<!--Created By: Abhideep Dharga 
	ID:700651014-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gallery Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel ="stylesheet" href="gallery.css" text="text/css"/>
  
  <!--BootStrap Start-->	 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<!--Image for background-->
	<div class="bg">
	<!--Navigation Starts-->
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
		<!--UCM logo section-->
		<div class="container">
			<div id="hero">
				<div id="logo" ><img src="ucm.png" width="50%"></div>
				<div id="text-wrapper">Welcome to UCM Gallery</div>
			</div>
        </div>
		<!--Menu for Portal-->
		<div class="container">	
			  <div class="row">
				<div class="col-md-4">
				  <div class="thumbnail">
					<a href="campusGallery.html">
					  <img class="img-responsive" src="campus.jpg" alt="UCM Campus" style="height:250px" style="width:250px" >
					  <div class="caption">
						<p><h3>UCM CAMPUS</h3></p>
					  </div>
					</a>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail">
					<a href="libraryGallery.html">
					  <img class="img-responsive"  src="library.jpg" alt="UCM Library" style="height:250px" style="width:250px" >
					  <div class="caption">
						<p><h3>UCM Library</h3></p>
					  </div>
					</a>
				  </div>
				</div>
				<div class="col-md-4">
				  <div class="thumbnail">
					<a href="sportsGallery.html">
					  <img class="img-responsive"  src="sports.jpg" alt="Fjords" style="height:250px" style="width:250px" >
					  <div class="caption">
						<p><h3>UCM Sports</h3></p>
					  </div>
					</a>
				  </div>
				</div>
			  </div>
			</div>
			<!--Div for Video section-->
			<div class="container">
			  <div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-4">
				  <div class="video">
					<iframe width="450" height="250" src="https://www.youtube.com/embed/MOJRWYzevLg" 
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
				  </div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
				  <div class="video">
				  <iframe width="450" height="250" src="https://www.youtube.com/embed/91mzBN0-Iuo" 
					frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
				  </div>
				</div>
				</div>
			  </div>
			</div>
		</div>
	</body>
</html>
