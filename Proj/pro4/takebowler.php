<?php
	session_start();
	$_SESSION['bowler']=$_POST['bowler'];
	echo "take : ".$_SESSION['bowler']." <br>";
	header('location:ball.php');
?>