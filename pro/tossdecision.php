<html>
<body>

<?php
	session_start();
	$match = $_SESSION['match'];
	$toss=$_POST['toss'];
	$tossdecision=$_POST['tossdecision'];
	$team1 = $_SESSION['team1'];
	$team2 = $_SESSION['team2'];
	echo $toss." ".$tossdecision."kjdf<br>";
	if($toss==$team1) {
		if($tossdecision=="BAT") {
			$_SESSION['inning1']=$toss;
			$_SESSION['inning2']=$team2;
		} else {
			$_SESSION['inning1']=$team2;
			$_SESSION['inning2']=$toss;
		}
	} else {
		if($tossdecision=="BAT") {
			$_SESSION['inning1']=$toss;
			$_SESSION['inning2']=$team1;
		} else {
			$_SESSION['inning1']=$team1;
			$_SESSION['inning2']=$toss;
		}
	}
	include('dbms.php');
	$qry = "UPDATE MATCHES SET TOSS='".$toss."'".",TOSS_DECISION='".$tossdecision."'"."WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry); 
	header('location:match.php');
?>
</body>
</html>