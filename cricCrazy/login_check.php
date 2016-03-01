<?php
	if ($_POST['submit'] == 'Login') {
	$login = $_POST['login'];
	$password = MD5($_POST['password']);
	//$login = 'jugal';
	//$password = 'jugal';
	echo $password.' '.$login.'<br>';
	
	if($login && $password){
		include('dbms.php');
		$qry="SELECT * FROM logins WHERE USERNAME = '".$login."' AND PASSWORD ='".$password."'";
		echo $qry."<br>";

		$result=mysql_query($qry);

		if($result){echo 'yes';
			$count = mysql_num_rows($result);
		} else{echo 'no';
			include('login_form.php');
			echo '<center>Incorrect Username or Password !!!<center>';
			exit();
		}
 
		if( $count == 1){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1;
			$_SESSION['USER_ID'] = $login;
			header('location:admin.php');
		} else {
			include('login_form.php');
			echo '<center>Incorrect Username or Password !!!<center>';
			exit();
		}
	} else{
		include('login_form.php');
		echo '<center>Username or Password missing!!</center>';
		exit();
	}
 }
 else{
	header("location: login_form.php");
	exit();
 }
?>