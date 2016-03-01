<html>
<body bgcolor="#aabbcc">
<?php
include('maintop.php');
?>
<?php
	session_start();
	$match = $_SESSION['match'];
	$inning=$_SESSION['inning'];
	$over=$_SESSION['over'];
	$bowler=$_SESSION['bowler'];
	$striker=$_SESSION['striker'];
	$nonstriker=$_SESSION['nonstriker'];

	if($inning==1) {
		$batting = $_SESSION['inning1'];
	} else {
		$batting = $_SESSION['inning2'];
	}
	
	if($over==0) {
		$striker=$batting."01";
		$_SESSION['striker']=$striker;
		$nonstriker=$batting."02";
		$_SESSION['nonstriker']=$nonstriker;
	}
	
	echo $_SESSION['inning1']." ".$_SESSION['inning2']." <br>";
	echo $striker." ".$nonstriker." <br>";
	echo $inning." inning ".$batting." <br>";
	include('dbms.php');
	$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
	$result = mysql_query($qry);
	$row=mysql_fetch_assoc($result);
	if($row['OUTS']!="") {//echo 'yes';
		$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."' AND PLAYER_ID LIKE '".$batting."%'";
		$result = mysql_query($qry);
		while($row=mysql_fetch_assoc($result)) {
			if($row['PLAYER_ID']!=$nonstriker && $row['OUTS']=="") {
				$striker=$row['PLAYER_ID'];
				$_SESSION['striker']=$striker;
				break;
			}
		}
	}// else echo 'no';
	
	$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$nonstriker."'";
	$result = mysql_query($qry);
	$row=mysql_fetch_assoc($result);
	if($row['OUTS']!="") {//echo 'yes';
		$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."' AND PLAYER_ID LIKE'".$batting."%'";
		$result = mysql_query($qry);
		while($row=mysql_fetch_assoc($result)) {
			if($row['PLAYER_ID']!=$striker && $row['OUTS']=="") {
				$nonstriker=$row['PLAYER_ID'];
				$_SESSION['nonstriker']=$nonstriker;
				break;
			}
		}
	}// else echo 'no';
	
	//echo $inning." ".$over." ".$bowler." ".$striker." ".$nonstriker." <br>";
	echo "<center><h2><b>-Inning ".$inning."- </b></h2></center>";
	echo "<center><h3><b>Select bowler for over ".(($over/10)+1)."</b></h3></cetner>";
	include('dbms.php');
	$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."'";
	//echo $qry."<br>";
	$result = mysql_query($qry);
	if(($over%10)==0) {//echo 'yes'.$over;
		echo "<center><form name='myform' method='post' action='takebowler.php'>";
			echo "<table border='1' cellpadding='10px' width='300px' cellspacing=0>";
				
				//echo "<select name='bowler'>";
						$i=1;
						while($row=mysql_fetch_assoc($result)) {
							if($row['PLAYER_ID'][0]!=$batting[0]) {
								echo "<tr>";
								echo "<td>bowler ".$i."</td><td><input type='radio' name='bowler' value='".$row['PLAYER_ID']."'".">".$row['PLAYER_ID']."</td>";
								echo "</tr>";
								$i++;
							}
						}
				//echo "</select>";
				echo "<tr>
						<td colspan='2'"."align='center'".">
							<input type='submit'"."VALUE='SUBMIT'"."
						</td>
					</tr>";
			echo "</table>";
		echo "</form></center>";
	} else {//echo 'no';
		header('location:ball.php');
	}
?>
<?php
include('mainbottom.php');
?>
</body>
</html>