<html>
<body>

<?php
session_start();
	include('maintop.php');
	$win = $_SESSION['win'];
	$match = $_SESSION['match'];
	$inning1 = $_SESSION['inning1'];
	$inning2 = $_SESSION['inning2'];
	
	//increase points
	include('dbms.php');
	if($win==1 || $win==2)
	{
		if($win==1) 
			$qry1="UPDATE teams set POINTS=POINTS+2 WHERE TEAM_ID='".$inning1."'";
		else
			$qry1="UPDATE teams set POINTS=POINTS+2 WHERE TEAM_ID='".$inning2."'";
		$result = mysql_query($qry1);
		
		$qry1="SELECT * FROM plays WHERE MATCH_ID='".$match."' AND TEAM_ID='".$inning1."'";
		$result1 = mysql_query($qry1);
		$row1 = mysql_fetch_assoc($result1);
		
		$qry2="SELECT * FROM plays WHERE MATCH_ID='".$match."' AND TEAM_ID='".$inning2."'";
		$result2 = mysql_query($qry2);
		$row2 = mysql_fetch_assoc($result2);
		
		$description1=$inning1." won by ".($row1['SCORE_RUN']-$row2['SCORE_RUN'])." runs";
		$description2=$inning2." won by ".(10-$row2['SCORE_WICKET'])." wickets";
		$qry="";
		if($win==1) {
			echo '<br><br><br><center><b>winner is '.$inning1."</b><center><br>";
			$qry = "UPDATE matches set WINNER='".$inning1."',RESULT_DESCRIPTION='".$description1."' WHERE MATCH_ID='".$match."'";
		} else {
			echo '<br><br><br><center><b>winner is '.$inning2."</b><center><br>";
			$qry = "UPDATE matches set WINNER='".$inning2."',RESULT_DESCRIPTION='".$description2."' WHERE MATCH_ID='".$match."'";
		}
		//ECHO $qry." <br>";
		$result = mysql_query($qry);
		echo "<center><h3><b><a href='admin.php'>Go for next match</b></h3></a>";
	} else {
		//echo "yes";
		$qry2 = "UPDATE matches set WINNER='NILL',RESULT_DESCRIPTION='TIE' WHERE MATCH_ID='".$match."'";
		$result2 = mysql_query($qry2);
		//$row2 = mysql_fetch_assoc($result2);
		echo "<center><h3>Match tied</h3><br><br>";
		echo "<center><h3><b><a href='admin.php'>Go for next match</b></h3></a>";
	}
?>
</body>
</html>