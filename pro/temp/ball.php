<html>
<body bgcolor="#aaabbf">
<?php
	session_start();
	include('maintop.php');	
	$match = $_SESSION['match'];
	$inning=$_SESSION['inning'];
	echo $inning." <br>";
	$over=$_SESSION['over'];
	$bowler=$_SESSION['bowler'];
	$striker=$_SESSION['striker'];
	$nonstriker=$_SESSION['nonstriker'];
	echo $striker." ".$nonstriker." <br>".$_SESSION['inning1']." ".$_SESSION['inning2'];
	if($inning==1) {
		$batting = $_SESSION['inning1'];
	} else {
		$batting = $_SESSION['inning2'];
	}
	//echo $over." ".($over*10%10);
	if(($over%10==5)) {//echo 'yes';
		$over+=5;
	} else{// echo 'no';
		$over+=1;
	}
	if(($over%10)==1) {
		$temp = $_SESSION['striker'];
		$_SESSION['striker'] = $_SESSION['nonstriker'];
		$_SESSION['nonstriker'] = $temp;
	}
	$_SESSION['over']=$over;
	echo "<center><h2><b>-Inning ".$inning."- </b></h2></center>";
	echo "<center><h3><b>-Fill data for over ".($over/10)."-</b></h3></cetner>";
	
	echo "<center><form name='myform' method='post' action='fill.php'>";
	echo "<table border='1' cellpadding='10px' width='300px' cellspacing='0'>";
		echo "<tr>";
			echo "<td>Runs</td>";
			echo "<td>";
					echo "<select name='runs'>";
						echo "<option value=0>0</option>";	
						echo "<option value=1>1</option>";
						echo "<option value=2>2</option>";
						echo "<option value=3>3</option>";
						echo "<option value=4>4</option>";
						echo "<option value=5>5</option>";
						echo "<option value=6>6</option>";
					echo "</select>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Wicket</td>";
			echo "<td>";
					echo "<select name='iswicket'>";
						echo "<option value=0>0</option>";
						echo "<option value=1>1</option>";
					echo "</select> ";
					echo "<select name='howwicket'>";
						echo "<option value='w'>bowled</option>";
						echo "<option value='c'>catch out</option>";
						echo "<option value='r'>run out</option>";
						echo "<option value='l'>lbw</option>";
					echo "</select>";
					include('dbms.php');
					$qry="SELECT * FROM plays_in WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					echo "<select name='whowicket'>";
					while($row=mysql_fetch_assoc($result)) {
							if($row['PLAYER_ID'][0]!=$batting[0]) {
								echo "<option value='".$row['PLAYER_ID']."'".">".$row['PLAYER_ID']."</option>";
							}
					}
					echo "</select>";				
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td>Extras</td>";
			echo "<td>";
					echo "<select name='extras'>";
						echo "<option value=0>0</option>";
						echo "<option value=1>1</option>";
						echo "<option value=2>2</option>";
						echo "<option value=3>3</option>";
						echo "<option value=4>4</option>";
						echo "<option value=5>5</option>";
						echo "<option value=6>6</option>";
						echo "<option value=7>7</option>";
						echo "<option value=8>8</option>";
						echo "<option value=9>9</option>";
						echo "<option value=10>10</option>";
					echo "</select>";
			echo "</td>";
		echo "</tr>";
		echo "<tr>
			<td colspan='2'"."align='center'".">
				<input type='submit'"."VALUE='SUBMIT'"."
			</td>
		</tr>";
	echo "</table>";
	echo "</form></center>";
?>
</body>
</html>