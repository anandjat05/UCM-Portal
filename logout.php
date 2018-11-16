<?php
session_start();
$_SESSION['proper_credentials'] = 0;
	header('Location:login.html');

?>