<?php
	
	$login = $_POST['login'];
	$password = MD5($_POST['password']);
	//$login = 'jugal';
	//$password = 'jugal';
	echo $password.' '.$login.'<br>';
	
	if($login && $password){
		include('dbms.php');
		$qry="SELECT * FROM logins WHERE USERNAME = '".$login."' AND PASSWORD ='".$password."'";
		//echo $qry."<br>";

		$result=mysql_query($qry);

		if($result){//echo 'yes';
			$count = mysql_num_rows($result);
		} else{//echo 'no';
			include('index.php');
			echo '<br><center>Incorrect Username or Password !!!<center>';
			exit();
		}
 
		if( $count == 1){
			session_start();
			$_SESSION['IS_AUTHENTICATED'] = 1;
			$_SESSION['USER_ID'] = $login;
									include('dbms.php');
									$qry="SELECT * FROM logins WHERE USERNAME='".$login."'";
									$result=mysql_query($qry);
									while($row=mysql_fetch_assoc($result))
									{
										echo $row['POSITION'];
										$_SESSION['NAME']=$row['NAME'];
										if(!strcmp($row['POSITION'],"student"))
										{header('location:project/dashboard.php');
										}
										else {header('location:project/faculty.php');}
		}
			
		} else {
			include('index.php');
			echo '<br><center>Incorrect Username or Password !!!<center>';
			exit();
		}
	} else{
		include('index.php');
		echo '<br><center>Username or Password missing!!</center>';
		exit();
	}
 
?>