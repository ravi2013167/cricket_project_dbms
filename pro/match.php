<html>
<body bgcolor="#cccccc">
<?php
	session_start();
	$match=$_SESSION['match'];
	$inning=1;
	$over=0;
	$bowler="";
	$striker="";
	$nonstriker="";
	include('dbms.php');
	$qry="SELECT max(INNING) as maximum FROM balls WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry);
	echo $qry."<br>";
	while($row=mysql_fetch_assoc($result)) {
		if($row['maximum']>$inning) {
			$inning=$row['maximum'];
		}
	}
	$qry="SELECT max(OVER) as maximum FROM balls WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry);
	echo $qry."<br>";
	while($row=mysql_fetch_assoc($result)) {
		if($row['maximum']>$over) {
			$over=$row['maximum'];
		}
	}
	if($over==0) {echo 'yes<br><br>';
		if($inning==1) {
			$striker=$_SESSION['inning1'].'01';
			$nonstriker=$_SESSION['inning1'].'02';
		} else {
			$striker=$_SESSION['inning2'].'01';
			$nonstriker=$_SESSION['inning2'].'02';
		}
		echo $striker." ".$nonstriker." <br>";
	} else {echo 'no<br><br>';
		$qry="SELECT * FROM balls WHERE MATCH_ID='".$match."' AND INNING='".$inning."' AND OVER='".$over."'";
		$result = mysql_query($qry);
		$run=0;
		while($row = mysql_fetch_assoc($result)) {
			$run=$row['RUN'];	
		}
		$qry="SELECT * FROM balls WHERE MATCH_ID='".$match."' AND INNING='".$inning."' AND OVER='".$over."'";
		$result = mysql_query($qry);
		if($run == 1 || $run == 3) {echo '1<br>';
			while($row = mysql_fetch_assoc($result)) {
					$nonstriker = $row['BATSMAN'];
					$bowler = $row['BOWLER'];
			}
			$result = mysql_query("SELECT * FROM plays_in WHERE MATCH_ID='".$match."'");
			while($row = mysql_fetch_assoc($result)) {
				if($inning==1) {
					if($row['OUTS']=='' && $row['PLAYER_ID'][0]==$_SESSION['inning1'][0] && $row['PLAYER_ID']!=$nonstriker) {
						$striker = $row['PLAYER_ID'];
						break;
					}
				} else {
					if($row['OUTS']=='' && $row['PLAYER_ID'][0]==$_SESSION['inning2'][0] && $row['PLAYER_ID']!=$nonstriker) {
						$striker = $row['PLAYER_ID'];
						break;
					}
				}
			}
		} else {echo '2<br>';
			while($row = mysql_fetch_assoc($result)) {
					$striker = $row['BATSMAN'];
					echo $striker." y<br>";
					$bowler = $row['BOWLER'];
			}
			$result = mysql_query("SELECT * FROM plays_in WHERE MATCH_ID='".$match."'");
			while($row = mysql_fetch_assoc($result)) {
				if($inning==1) {
					if($row['OUTS']=='' && $row['PLAYER_ID'][0]==$_SESSION['inning1'][0] && $row['PLAYER_ID']!=$striker) {
						$nonstriker = $row['PLAYER_ID'];
						break;
					}
				} else {
					if($row['OUTS']=='' && $row['PLAYER_ID'][0]==$_SESSION['inning2'][0] && $row['PLAYER_ID']!=$striker) {
						$nonstriker = $row['PLAYER_ID'];
						break;
					}
				}
			}
		}
	}
	echo '<br><br>jdkf';
	$_SESSION['inning']=$inning;
	$_SESSION['over']=$over;
	$_SESSION['bowler']=$bowler;
	$_SESSION['striker']=$striker;
	$_SESSION['nonstriker']=$nonstriker;
	echo $inning." ".$over." ".$bowler." ".$striker." ".$nonstriker." <br>";
	header("location:inning.php");
?>
</body>
</html>