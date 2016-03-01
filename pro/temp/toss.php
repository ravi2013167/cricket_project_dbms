<html>
<body bgcolor="#dddddd">
<?php
include('maintop.php');
?>
<?php
	session_start();
	$match=$_POST['match'];
	$_SESSION['match']=$match;
	include('dbms.php');
	//echo $match." ".$team1." ".$team2." ".$toss." ".$decision." <br>";

	if($match=='M7') {
		include('dbms.php');
		$qry1="SELECT * FROM teams WHERE POOL='A' order by POINTS DESC";
		$qry2="SELECT * FROM teams WHERE POOL='B' order by POINTS DESC";
		$result1 = mysql_query($qry1);
		$result2 = mysql_query($qry2);
		$i=0;$j=0;
		$row = mysql_fetch_assoc($result1);
			$t1=$row['TEAM_ID'];
		$row = mysql_fetch_assoc($result1);
			$t3=$row['TEAM_ID'];
		$row = mysql_fetch_assoc($result2);
			$t2=$row['TEAM_ID'];
		$row = mysql_fetch_assoc($result2);
			$t4=$row['TEAM_ID'];
		$qry1="UPDATE matches set TEAM1='".$t1."',TEAM2='".$t2."' WHERE MATCH_ID='M7'";
		$qry2="UPDATE matches set TEAM1='".$t3."',TEAM2='".$t4."' WHERE MATCH_ID='M8'";
		$result1 = mysql_query($qry1);
		$result2 = mysql_query($qry2);
		$_SESSION['flag']=0;
		//header('location:toss.php');
	}
	
	if($match=='M9') {
		$qry1="SELECT * FROM matches WHERE MATCH_ID='M7'";
		$qry2="SELECT * FROM matches WHERE MATCH_ID='M8'";
		$result1 = mysql_query($qry1);
		$result2 = mysql_query($qry2);
		$row = mysql_fetch_assoc($result1);
			$t1=$row['WINNER'];
		$row = mysql_fetch_assoc($result2);
			$t2=$row['WINNER'];
		$qry="UPDATE matches set TEAM1='".$t1."',TEAM2='".$t2."' WHERE MATCH_ID='M9'";
		$result = mysql_query($qry);
	}
	
	//take teams of the match
	$qry="SELECT * FROM MATCHES WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry);
	while ($row = mysql_fetch_assoc($result)){
		$team1 = $row['TEAM1'];
		$team2 = $row['TEAM2'];
		$toss = $row['TOSS'];
		$decision = $row['TOSS_DECISION'];
	}
	$_SESSION['team1']=$team1;
	$_SESSION['team2']=$team2;
	
	if($toss!="") {//echo 'yes';
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
		echo $_SESSION['inning1']." ".$_SESSION	['inning2']."<br>";
		header('location:match.php');
	} else {//echo 'no';
		echo "<center><h3>-Fill Toss details-</h3></center>";
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
<?php
include('mainbottom.php');
?>
</body>
</html>