<html>
<body>

<?php
	session_start();
	$match = $_SESSION['match'];
	$inning=$_SESSION['inning'];
	$over=$_SESSION['over'];
	$bowler=$_SESSION['bowler'];
	$striker=$_SESSION['striker'];
	$nonstriker=$_SESSION['nonstriker'];
	if(isset($_SESSION['score']))
	$score=$_SESSION['score'];
	
	$runs = $_POST['runs'];
	$iswicket = $_POST['iswicket'];
	$howwicket = $_POST['howwicket'];
	$whowicket = $_POST['whowicket'];
	$extras = $_POST['extras'];
	
	include('dbms.php');
	$qry = "SELECT * FROM players WHERE PLAYER_ID='".$bowler."'";
	$result = mysql_query($qry);
	$row = mysql_fetch_assoc($result);
	$bowler1=$row['PLAYER_NAME'];
	
	$qry = "SELECT * FROM players WHERE PLAYER_ID='".$whowicket."'";
	$result = mysql_query($qry);
	$row = mysql_fetch_assoc($result);
	$whowicket1=$row['PLAYER_NAME'];
	
	
	$btrs=0;$btrc=0;$btob=0;$btbp=0;$bts=0;$btf=0;$btw=0;
	$bwrs=0;$bwrc=0;$bwob=0;$bwbp=0;$bws=0;$bwf=0;$bww=0;
	$btrs+=$runs;
	$bwrc+=$runs;
	$btbp+=1;
	$bwob+=1;
	echo $btrs."   <br><br>";
	echo $striker." ".$bowler." <br>";
	if($inning==1) {
		$batting = $_SESSION['inning1'];
	} else {
		$batting = $_SESSION['inning2'];
	}
	
	if($runs==4) {
			$btf+=1;
	} else if($runs==6) {
			$bts+=1;
	}
	//for plays table
	$qry3="UPDATE plays SET SCORE_RUN=SCORE_RUN+".$runs.",SCORE_WICKET=SCORE_WICKET+".$iswicket." WHERE MATCH_ID='".$match."' AND TEAM_ID='".$batting."'";
	echo $qry3."<br>";
	$result = mysql_query($qry3);
	
	//for balls table
	if($iswicket==1) { $bww=$bww+1;echo "kdjfldjugal";
		if($howwicket=='w') {
			$qry="INSERT INTO balls VALUES('".$match."',".$inning.",".$over.",".$runs.",'b ".$bowler1." w',".$extras.",'".$striker."','".$bowler."')";
		} else if($howwicket=='c') {
			$qry="INSERT INTO balls VALUES('".$match."',".$inning.",".$over.",".$runs.",'b ".$bowler1." c ".$whowicket1."',".$extras.",'".$striker."','".$bowler."')";
		} else if($howwicket=='r') {
			$qry="INSERT INTO balls VALUES('".$match."',".$inning.",".$over.",".$runs.",'Run Out',".$extras.",'".$striker."','".$bowler."')";
		} else {
			$qry="INSERT INTO balls VALUES('".$match."',".$inning.",".$over.",".$runs.",'b ".$bowler1." l',".$extras.",'".$striker."','".$bowler."')";
		}
	} else {echo "nojugal ".$bowler." <br>";
		$qry="INSERT INTO balls VALUES('".$match."',".$inning.",".$over.",".$runs.",'',".$extras.",'".$striker."','".$bowler."')";
	}
	echo $qry."<br>";
	$result = mysql_query($qry);
	
	//for plays_in table
	if($iswicket==1) {echo 'yesb';
		if($howwicket=='w') {
			$qry1="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$btrs.",RUN_CONCEDED=RUN_CONCEDED+".$btrc.",OVER_BOWLED=OVER_BOWLED+".$btob.",BALL_PLAYED=BALL_PLAYED+".$btbp.",SIXES=SIXES+".$bts.",FOURS=FOURS+".$btf.",WICKET=WICKET+".$btw.",OUTS='b ".$bowler1." w ' WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
			$qry2="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$bwrs.",RUN_CONCEDED=RUN_CONCEDED+".$bwrc.",OVER_BOWLED=OVER_BOWLED+".$bwob.",BALL_PLAYED=BALL_PLAYED+".$bwbp.",SIXES=SIXES+".$bws.",FOURS=FOURS+".$bwf.",WICKET=WICKET+".$bww." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$bowler."'";
		} else if($howwicket=='c') {
			$qry1="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$btrs.",RUN_CONCEDED=RUN_CONCEDED+".$btrc.",OVER_BOWLED=OVER_BOWLED+".$btob.",BALL_PLAYED=BALL_PLAYED+".$btbp.",SIXES=SIXES+".$bts.",FOURS=FOURS+".$btf.",WICKET=WICKET+".$btw.",OUTS='b ".$bowler1." c ".$whowicket1."' WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
			$qry2="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$bwrs.",RUN_CONCEDED=RUN_CONCEDED+".$bwrc.",OVER_BOWLED=OVER_BOWLED+".$bwob.",BALL_PLAYED=BALL_PLAYED+".$bwbp.",SIXES=SIXES+".$bws.",FOURS=FOURS+".$bwf.",WICKET=WICKET+".$bww." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$bowler."'";
		} else if($howwicket=='r') {
			$qry1="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$btrs.",RUN_CONCEDED=RUN_CONCEDED+".$btrc.",OVER_BOWLED=OVER_BOWLED+".$btob.",BALL_PLAYED=BALL_PLAYED+".$btbp.",SIXES=SIXES+".$bts.",FOURS=FOURS+".$btf.",WICKET=WICKET+".$btw.",OUTS='Run Out' WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
			$qry2="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$bwrs.",RUN_CONCEDED=RUN_CONCEDED+".$bwrc.",OVER_BOWLED=OVER_BOWLED+".$bwob.",BALL_PLAYED=BALL_PLAYED+".$bwbp.",SIXES=SIXES+".$bws.",FOURS=FOURS+".$bwf.",WICKET=WICKET+".$bww." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$bowler."'";
		} else {
			$qry1="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$btrs.",RUN_CONCEDED=RUN_CONCEDED+".$btrc.",OVER_BOWLED=OVER_BOWLED+".$btob.",BALL_PLAYED=BALL_PLAYED+".$btbp.",SIXES=SIXES+".$bts.",FOURS=FOURS+".$btf.",WICKET=WICKET+".$btw.",OUTS='b ".$bowler1." l ' WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
			$qry2="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$bwrs.",RUN_CONCEDED=RUN_CONCEDED+".$bwrc.",OVER_BOWLED=OVER_BOWLED+".$bwob.",BALL_PLAYED=BALL_PLAYED+".$bwbp.",SIXES=SIXES+".$bws.",FOURS=FOURS+".$bwf.",WICKET=WICKET+".$bww." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$bowler."'";
		}
	} else {echo 'nob';
		$qry1="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$btrs.",RUN_CONCEDED=RUN_CONCEDED+".$btrc.",OVER_BOWLED=OVER_BOWLED+".$btob.",BALL_PLAYED=BALL_PLAYED+".$btbp.",SIXES=SIXES+".$bts.",FOURS=FOURS+".$btf.",WICKET=WICKET+".$btw." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$striker."'";
		$qry2="UPDATE plays_in set RUN_SCORED=RUN_SCORED+".$bwrs.",RUN_CONCEDED=RUN_CONCEDED+".$bwrc.",OVER_BOWLED=OVER_BOWLED+".$bwob.",BALL_PLAYED=BALL_PLAYED+".$bwbp.",SIXES=SIXES+".$bws.",FOURS=FOURS+".$bwf.",WICKET=WICKET+".$bww." WHERE MATCH_ID='".$match."' AND PLAYER_ID='".$bowler."'";
	}
	echo $qry1." ".$qry2." <br>";
	$result = mysql_query($qry1);
	$result = mysql_query($qry2);
	
	//if runs are 1 or 3 swap striker with nonstriker
	if($runs==1 || $runs==3) {
		$temp = $_SESSION['striker'];
		$_SESSION['striker']=$_SESSION['nonstriker'];
		$_SESSION['nonstriker']=$temp;
	}
	//checking for inning over
	include('dbms.php');
	if($inning==1){
		$qry = "SELECT * FROM plays WHERE MATCH_ID='".$match."' AND TEAM_ID='".$_SESSION['inning1']."'";
	} else {
		$qry = "SELECT * FROM plays WHERE MATCH_ID='".$match."' AND TEAM_ID='".$_SESSION['inning2']."'";
	}
	echo $qry." inning exchange<br>";
	$result = mysql_query($qry);
	$row = mysql_fetch_assoc($result);
	
	echo $row['SCORE_WICKET']."<br>";
	if($over==500 || $row['SCORE_WICKET']>=10) {
		if($inning==1){
			$_SESSION['score']=$row['SCORE_RUN'];
			$_SESSION['inning']=2;
			$inning=2;
			header('location:inning.php');
		} else{
			if($row['SCORE_RUN']==$_SESSION['score']){
		$_SESSION['win']=0;echo'<br><br>yes1<br><br>';}
			else{
			$_SESSION['win']=1;echo'<br><br>yes1<br><br>';}
			header('location:result.php');
		}
		$_SESSION['over']=0;
		$over=0;
	} else if($row['SCORE_RUN']>$score && $inning==2) {
		$_SESSION['win']=2;
		$_SESSION['over']=0;
		$over=0;echo "<br><br>no<br><br>";
		header('location:result.php');
	} else  {
		header('location:inning.php');
	}
	echo $runs." ".$iswicket." ".$extras." ".$inning." ".$over." <br>";
?>
</body>
</html>