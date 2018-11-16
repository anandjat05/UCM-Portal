<!DOCTYPE html>
<html>
    <head>
        <!-- Created by Ashwani Koul
        Id: 700671753 -->
		<meta http-equiv="refresh" content="4;URL='index.php'" />
        <title>Student Enrollment Form</title>
        <meta charset = "utf-8"/>
        <link rel = "stylesheet" href = "confirmationReceipt.css"/>
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
       
    </head>
    <body>
        <div class = "img">
            <div class ="signUp">
           
                <h1>UCM Student Shuttle Confirmation Receipt</h1>
                <hr>
                    <div class = "display">
                        <?php
                            session_start();

                            if(!empty($_SESSION['message'])){
                                echo $_SESSION['message'];
                            }
                          
                        ?><br>
                       
                    </div>
           
           
            </div>
        </div>
    </body>