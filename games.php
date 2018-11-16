<!--Created By: Abhideep Dharga 
	ID:700651014 -->
<!DOCTYPE html>  
<html>
   <head>
		<meta charset="utf-8">
		<link rel ="stylesheet" href="games.css" text="text/css"/>
		<title>Games</title>
			
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
			<img src="games.tiff" alt="background image" style="width:100%; background-repeat:repeat-x;
			position:relative; z-index=-10; padding-top:0%;"/>
		</div>
		<!--Home div for game area-->	
		<div id="home">
		
			<div id="game">
				<form method="POST" action="#">
					<p id="text">Enter Your name to find out your Lucky Number:<input trype="text" id="userInputText" name="userInputText"/></p>
					<p><input type="submit" id="resultButton" value="Find Your Lucky Number" name="submit"/></p>
					<p id="resultPara">	<?php
					//checking for round trip:
					
				if(isset($_POST['submit'])){
					//validations for user input:
					
					if(!empty($_POST['userInputText'])){
						//validations for user input:
						
						if(!is_numeric($_POST['userInputText'])){
							//validations for user input:
							
							if(!ctype_space($_POST['userInputText'])){
								
									if (!preg_match('/[^A-Z a-z]/', $_POST['userInputText'])) //validations for user input to get only alphabets:
									{
	  
									$userinput = $_POST['userInputText'];
									 $count = strlen($userinput)+2;//$count for counting number of characters in input and increase it by 2:
									
										if($count > 9){
											$count = $count%10;//depend on modulus case will run:
										}
										
										switch(intval($count))
										{
											case 0:
											
											echo "<p>Your lucky number is: <b>zero</b> <br/>\"<p>Take care that your independence doesn't see you lonely.".
																							  "While your energy levels are generally so high that you are usually found doing something ambitious and active.".
																							  "it might be wise to slow down every now and then to pursue a relationship.". 
																							  "This 2-Day can be the perfect time to do just this. This vibration focuses on". 
																							  "the connections you have or want to have in your life.".
																							  "Let this essence give you the focus you need to see growth in this important area.</p>";
											break;
											case 1:
											
											echo "<p>Your lucky number is: <b>ONE</b> <br/>\"<p>Take care that your independence doesn't see you lonely.".
																							  "While your energy levels are generally so high that you are usually found doing something ambitious and active.".
																							  "it might be wise to slow down every now and then to pursue a relationship.". 
																							  "This 2-Day can be the perfect time to do just this. This vibration focuses on". 
																							  "the connections you have or want to have in your life.".
																							  "Let this essence give you the focus you need to see growth in this important area.</p>";
											
											break;
											
											case 2:
											echo "Your lucky number is: <b>TWO</b> <br/>\"This is the day to give your romantic side a chance to come out and".
																							  "play on this 2-Day. You're sure to be acutely aware of the love you have in your life, as love is what makes".
																							  "you tick. Your appreciation and devotion to the special people in your life is sure to be very strong,". 
																							  "and you'll enjoy expressing this now even more than usual. See about making a date or plans to share time with".
																							  " your closest friends. Don't hesitate to act on your impulses today”,";
											break;
											
											case 3:

											echo "Your lucky number is: <b> THREE </b><br/>\"Your usual live-for-the-moment attitude may create troubles in the area of romance.".
																							 " This can especially be the case if you've been involved with someone for a long time, and you've resisted the idea of making a ". 
																							 "commitment to something more serious. On this 2-Day, it might be important for you to consider what you really want out of life and ". 
																							 "the relationship you're involved in. It might be that the current scenario doesn't feel right for you for the long haul. ". 
																							 "Or it can be fear that holds you back. Take time to think it through";
											break;
											
											case 4:
											echo"Your lucky number is: <b>FOUR </b><br/>\"If you are having difficulty with your partner this 2-Day may shed a little ".
																							 "light on the situation. You'll find it much easier to understand where another person is coming from under this".
																							 " vibration's influence. Further, your communication skills will be enhanced, making it very worth your while to ".
																							 "try and talk things over. You will feel the caring and love you have for this person in a stronger way, ".
																							 "and chances are, they will to. Be sure to bring a little romance to the table.";
											break;
											
											case 5:
											echo "Your lucky number is: <b>FIVE</b> <br/>\"A 2-Day brings emphasis to your personal and professional relationships.".
																							 " However, this is directly related to one-on-one contact rather than group interaction. This gives you the ".
																							 "opportunity to get closer to the special people in your life. You'll find it much easier to communicate and".
																							 " to understand than usual. Whether you apply this vibration's energy toward work or play, you're sure to make ".
																							 "progress. Make the most of this, Five. Whatever you want to see develop in your contacts, this is the time to go for it";
											break;
											
											case 6:
											echo "Your lucky number is: <b>SIX</b> <br/>\"Spending some individual time with the people in your life is likely to seem ".
																							 " more important than usual. This is a common effect when a 2-vibration is happening, as it encourages you to connect ".
																							 "on a deeper level than usual. This brings you the chance to get closer to your partner, children, friends, and ".
																							 "extended family. All you have to do is decide whom you would most like to connect with. No matter what you have on ".
																							 "your agenda, be sure to take time for this. You're sure to enjoy it very much.";
											break;
											
											case 7:
											echo "Your lucky number is: <b>SEVEN</b> <br/>\"Take time to nurture your romantic relationship on this 2-Day. Whether ".
																							 " you've been with your special someone for many years, or are just thinking of getting something going, this ".
																							 "vibration will enhance your desire to connect with another person. Without this kind of emotional release, ".
																							 "life can get pretty boring. Use your creativity to do something unexpected and special. There's nothing like ".
																							 "spontaneity to rejuvenate a relationship or attract a new one. Acting on your impulses can be a great thing once and a while.";
											break;
											
											case 8:
											echo "Your lucky number is: <b>EIGHT</b> <br/>\"Be sure that you don't neglect your romantic side. As easy as it can be for you to ".
																							 "get caught up in your work and reaching your goals, Eight, you would not enjoy life nearly as much without someone to  ".
																							 "share it all with. This day's 2-vibration is terrific for bringing out the best in you when it comes to interacting  ".
																							 "with someone. Whether you've got a partner or are thinking about a date, this is the perfect day to have some fun.";
											break;
											
											case 9:
											echo"Your lucky number is: <b>NINE <br/>\"Today's 2-vibration may highlight your popularity with friends.".
																							 " This essence can add a real boost to your enthusiasm and high energy for doing things, and people ".
																							 "will feel drawn to you. You might even find that others look up to you. This kind of notable ".
																							 "popularity can make you feel special and lucky to have so many friends. On the flip side, ".
																							 "it can make you think you are better than you are. Stay humble, Nine. It will keep you endearing";
											break;
											
										}//end switch:
									
								// }//end for:
								
								}else{
									echo"Please remove Numbers from your name";
								}//end if/else:
							}else{
								echo "Your input Contains undefined Spaces";
							}//end if/else for spaces
						}else{
							echo "Please remove Numbers from your name";
						}//end if else numbers:
					}else{
						echo "Please enter Your name in Input box";
					}//end if/else empty:
				}//end if
			?>
			</p>
				</form>
		</div>
		
	
	</body>
</html>
	
	











