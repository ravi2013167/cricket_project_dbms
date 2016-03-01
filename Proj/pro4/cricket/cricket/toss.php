<html>
<body bgcolor="#dddddd">

<?php
	session_start();
	$match=$_POST['match'];
	$_SESSION['match']=$match;
	include('dbms.php');
	$qry="SELECT * FROM MATCHES WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry);
	while ($row = mysql_fetch_assoc($result)){
		$team1 = $row['TEAM1'];
		$team2 = $row['TEAM2'];
		$toss = $row['TOSS'];
	}
	$_SESSION['team1']=$team1;
	$_SESSION['team2']=$team2;
	echo $match." ".$team1." ".$team2." ".$toss." <br>";
	if($toss!="") {
		$toss = $row['TOSS'];
		$decision = $row['TOSS_DECISION'];
		if($toss==$team1) {
			if($decision=="BAT") {
				$_SESSION['inning1']=$toss;
				$_SESSION['inning2']=$team2;
			} else {
				$_SESSION['inning1']=$team2;
				$_SESSION['inning2']=$toss;
			}
		} else {
			if($decision=="BAT") {
				$_SESSION['inning1']=$toss;
				$_SESSION['inning2']=$team1;
			} else {
				$_SESSION['inning1']=$team1;
				$_SESSION['inning2']=$toss;
			}
		}
		header('location:match.php');
	} else {
		echo "<center><h1>Fill Toss details</h1></center>";
		echo "<form name='myform' method='post' action='tossdecision.php'>";
			echo '<center><table border="1" cellpadding="10px" width="400px00px">';
				echo "<tr>";
					echo "<td>Winner of Toss</td>";
					echo "<td><select name='toss'>";
						echo "<option value='".$team1."'>".$team1."</option>";
						echo "<option value='".$team2."'>".$team2."</option>";
					echo "</select></td>";
				echo "</tr>";
				echo "<tr>";
					echo "<td>Decision of Toss</td>";
					echo "<td><select name='tossdecision'>";
						echo "<option value='BAT'>BAT</option>";
						echo "<option value='BWL'>BWL</option>";
					echo "</select></td>";
				echo "</tr>";
				echo "<tr><td colspan='2' align='center'".">";
					echo "<input type='submit' value='SUBMIT'>";
				echo "</td></tr>";
			echo "</table></center>";
		echo "</form>";
	}
?>
</body>
</html>