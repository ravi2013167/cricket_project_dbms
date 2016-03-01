<html>
<body bgcolor="#cccccc">
<?php
	session_start();
	$match=$_SESSION['match'];
	echo $match." mtc<br>";
	$inning=1;
	$over=0.0;
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
	/*$striker="";
	$nonStriker="";
	if($over=0) {
		$striker=$_SESSION[']
	}
	$qry="SELECT * FROM balls WHERE MATCH_ID='".$match."'";
	$result = mysql_query($qry);*/
?>
</body>
</html>