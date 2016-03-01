<body bgcolor="#aabbcc">
<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){
	echo '<a style="float:right"href="log_out.php">Log Out </a>';
	include('dbms.php');
	$qry = 'SELECT MATCH_ID,WINNER FROM matches order by MATCH_ID';
	$result = mysql_query($qry);
	echo '<center><form name="myform" method="post" action="toss.php">';
		echo '<table border="1" cellpadding="10px" width="400px00px">';
			echo "<tr>
					<td align='center'"."><b>Select Match</b></td>
					<td align='center'"."><b>Winner</b></td>
				</tr>";
				while($row = mysql_fetch_assoc($result)) {
					if($row['WINNER']=="") {
						echo "<tr>
								<td align='center'".">
									<input type='radio'"."name='match'"."value='".$row['MATCH_ID']."'".">
										".'&nbsp&nbsp;&nbsp;&nbsp;'.'Match&nbsp;&nbsp;'.$row['MATCH_ID'][1]."
									</input>
								</td>";
								echo "<td align='center'".">Yet to be Played</td>";
						echo '</tr>';
					} else {
						echo "<tr>
								<td align='center'".">
									".'&nbsp&nbsp;&nbsp;&nbsp;'.'Match&nbsp;&nbsp;'.$row['MATCH_ID'][1]."
								</td>";
								echo "<td align='center'".">".$row['WINNER']."</td>";
						echo '</tr>';
					}
				}
			echo "<tr>
					<td colspan='2'"."align='center'".">
						<input type='submit'"."VALUE='SUBMIT'"."
					</td>
				</tr>";
		echo '</table>';
	echo '</form></center>';
} else {
 header('location:login_form.php');
 exit();
}
?>
</body>