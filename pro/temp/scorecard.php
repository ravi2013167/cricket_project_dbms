<!DOCTYPE HTML>
<html>
	<head>
		<style>
				.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radiu
	s-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.CSSTableGenerator tr:hover td{
	background-color:#0099FF;
}
.CSSTableGenerator td{
	vertical-align:middle;
	
	background-color:#BBD6FF;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);

	background-color:#003366;
	border:0px solid #ffffff;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);

	background-color:#003366;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
	
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.text_line {
    clear: both;
    margin-bottom: 2px;
}
		</style>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body id="body">
		<div id="container">
			<div id="logo">
				<font id="head">CricCrazy</font>
				<p class="login">
					<br>
					<br>
					<form class="login" method="post" action="login_form.php">
						<input type="submit" value="Login"></input>
					</form>

				</p>
			</div>
			
			<div class="CSSTableGenerator" >
			
				<?php
					$match=$_GET['id'];
					include('dbms.php');
					$qry = "SELECT * FROM matches T1,teams T2 WHERE T1.MATCH_ID='".$match."' AND ((T1.TEAM1=T2.TEAM_ID || T1.TEAM2=T2.TEAM_ID))";
					//ECHO $qry;
					$result = mysql_query($qry);
					$row1=mysql_fetch_assoc($result);
					$row2=mysql_fetch_assoc($result);
					$team1=$row1['TEAM_NAME'];
					$team2=$row2['TEAM_NAME'];
					//echo $team1." ".$team2;
					echo "<h1 style='color:#ffffff;background-color:#25257C;height:50px;padding:10px;'>
							<center>
								
									<b style='float:left;color:#ffffff;'>
										<a href='matchinsights.php?id=".$match."'>
												Match Insights
										</a>
									</b>
									<b>".$team1." vs ".$team2."</b>
									<b style='float:right;'>
										<a href='stats.php?id=".$match."'>
											Match Stats
										</a>
									</b>
							</center>
						</h1>";
				?>
				
				<?php
					//echo $match;
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					if($row['RESULT_DESCRIPTION']!="") {
						echo "<h1 style='color:#ffffff; background-color:#0D0D6E;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						echo "<h1 style='background-color:#0D0D6E;color:#ffffff; height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					}
			?>
				
				<h1 style="color:#ffffff;background-color:#25257C;height:50px;padding:10px;"><center><b>INNING-1<b></center></h1>
				<table >
				<?php
					//INNING 1 BATTING
				//	include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row = mysql_fetch_assoc($result);
					$team1 = $row['TEAM1'];
					$team2 = $row['TEAM2'];
					$toss = $row['TOSS'];
					$decision = $row['TOSS_DECISION'];
					if($toss==$team1) {
						if($decision=="BAT") {
							$inning1=$toss;
							$inning2=$team2;
						} else {
							$inning1=$team2;
							$inning2=$toss;
						}
					} else {
						if($decision=="BAT") {
							$inning1=$toss;
							$inning2=$team1;
						} else {
							$inning1=$team1;
							$inning2=$toss;
						}
					}
					
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					
					if($inning1=="" || $inning2=="") {
						$inning1 = 'TBD';
						$inning2 = 'TBD';
					}
					
					$qry = "SELECT * FROM teams WHERE TEAM_ID='".$inning1."'";
					$result = mysql_query($qry);
					$row = mysql_fetch_assoc($result);
					$team1 = $row['TEAM_NAME'];
					$qry = "SELECT * FROM teams WHERE TEAM_ID='".$inning2."'";
					$result = mysql_query($qry);
					$row = mysql_fetch_assoc($result);
					$team2 = $row['TEAM_NAME'];
					
					$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning1."%'";
					//echo $qry." <br>";
					$result = mysql_query($qry);
					echo "<tr><td align='center'><img src='flags/".$inning1.".jpg' height='50px' width='100px'></td><td colspan='7' ><h2><b>".$team1."</b></h2></td></tr>";
					echo "<tr>
							<td style='background-color:#000000;color:#aaaaaa'><h2><b>Batting<b></h2></td>
							<td></td>
							<td><h2>R</h2></td>
							<td><h2>B</h2></td>
							<td><h2>4s</h2></td>
							<td><h2>6s</h2></td>
							<td><h2>S/R</h2></td>
						</tr>";
					while($row=mysql_fetch_assoc($result)) {
						if($row['BALL_PLAYED']!=0) {
							echo "<tr>
									<td><h3>".$row['PLAYER_NAME']."</h3></td>";
									if($row['OUTS']!="")
									echo "<td><h3>".$row['OUTS']."</h3></td>";
									else
									echo "<td><h3>Not Out</h3></td>";
								echo"	<td><h3>".$row['RUN_SCORED']."</h3></td>
									<td><h3>".$row['BALL_PLAYED']."</h3></td>
									<td><h3>".$row['FOURS']."</h3></td>
									<td><h3>".$row['SIXES']."</h3></td>
									<td><h3>";echo number_format((float)($row['RUN_SCORED']*100/$row['BALL_PLAYED']), 2, '.', '');
									echo "</h3></td>
								</tr>";
						} else {
							echo "<tr><td><h3>".$row['PLAYER_NAME']."</h3></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
						}
					}
				?>
                </table>
            </div>
			
			<?php
					//printing score and extra
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						//echo "lkdjffldfjkd";
						$run+=$row['RUN'];
						$extra+=$row['EXTRA'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket+=1;}
					}
					echo "<table >";
					echo "<tr><td colspan='7'></td></tr>";
					echo "<tr>";
							echo "<td colspan=7' style='background-color:#000000;color:#ffffff;width:1454px;'><h3>Extra - ".$extra."&nbsp;&nbsp;&nbsp;&nbsp;Score - ".$run."/".$wicket."</h3></td>";
					echo "</tr>";
					echo "</table>";
			?>
			
			<h3 class="text_line"></h3>
			<div class="CSSTableGenerator">
			
                <table cellspacing="10px">
                   <?php
				   //INNING 1 BOWLING
						$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning2."%'";
						//echo $qry." <br>";
						$result = mysql_query($qry);
						echo "<tr><td align='center'><img src='flags/".$inning2.".jpg' height='50px' width='100px'></td><td colspan='7' ><h2><b>".$team2."</b></h2></td></tr>";
						echo "<tr>
							<td style='background-color:#000000;color:#aaaaaa'><h2><b>Bowling<b></h2></td>
							<td><h2>O</h2></td>
							<td><h2>M</h2></td>
							<td><h2>R</h2></td>
							<td><h2>W</h2></td>
							<td><h2>E/R</h2></td>
						</tr>";
						while($row=mysql_fetch_assoc($result)) {
							if($row['OVER_BOWLED']!=0) {
							$qry1 ="SELECT COUNT(*) AS CNT FROM plays_in,(select BOWLER from balls where MATCH_ID = '".$match."' GROUP BY ((OVER-1)-(OVER-1)%10)/10,BOWLER HAVING SUM(RUN)+SUM(EXTRA)=0 ) M where MATCH_ID='".$match."' AND PLAYER_ID='".$row['PLAYER_ID']."' AND PLAYER_ID=BOWLER  GROUP BY PLAYER_ID";
							//ECHO $qry1;
							$result1=mysql_query($qry1);
							$row1=mysql_fetch_assoc($result1);
							if($row1['CNT']!="")
							$count = $row1['CNT'];
							else $count=0;
							echo "<tr>
								<td><h3>".$row['PLAYER_NAME']."</h3></td>
								<td><h3>".(int)($row['OVER_BOWLED']/6).".".($row['OVER_BOWLED']%6)."</h3></td>
								<td><h3>".$count."</h3></td>
								<td><h3>".$row['RUN_CONCEDED']."</h3></td>
								<td><h3>".$row['WICKET']."</h3></td>
								<td><h3>";
									echo number_format((float)($row['RUN_CONCEDED']*6/$row['OVER_BOWLED']), 2, '.', '');
								echo "</h3></td></tr>";
							}
						}
					?>
				</table>
            </div>
			
			<?php
					//Fall of wicket inning1
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					$string ="";
					$i=1;
					
					echo "<table >";
					echo "<tr><td colspan='7'> </td></tr>";
					echo "<tr>";
					echo "<td colspan='7' style='background-color:#000000;color:#ffffff;width:1560px;'><h3>Fall Of Wickets -&nbsp;&nbsp;&nbsp;";
					while($row = mysql_fetch_assoc($result)) {
						//echo "lkdjffldfjkd";
						$run+=$row['RUN'];
						$extra+=$row['EXTRA'];
						if($row['WICKET']!="") {
							echo $run."-";
							echo $i;$i++;
							echo "(".($row['OVER']/10).") &nbsp;&nbsp;";
						}
					}
					echo "</h3></td>";
					echo "</tr>";
					echo "</table>";
			?>
			
			<h3 class="text_line"></h3>
			<br><br><br><br><br><br>
			<div class="CSSTableGenerator" >
				<h1 style="color:#ffffff;background-color:#25257C;height:50px;padding:10px;"><center><b>INNING-2<b></center></h1>
				<table >
				<?php
				//INNING 2 BATTING
					$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning2."%'";
					//echo $qry." <br>";
					$result = mysql_query($qry);
					echo "<tr><td align='center'><img src='flags/".$inning2.".jpg' height='50px' width='100px'></td><td colspan='7' ><h2><b>".$team2."</b></h2></td></tr>";
					echo "<tr>
							<td style='background-color:#000000;color:#aaaaaa'><h2><b>Batting<b></h2></td>
							<td></td>
							<td><h2>R</h2></td>
							<td><h2>B</h2></td>
							<td><h2>4s</h2></td>
							<td><h2>6s</h2></td>
							<td><h2>S/R</h2></td>
						</tr>";
					while($row=mysql_fetch_assoc($result)) {
						if($row['BALL_PLAYED']!=0) {
							echo "<tr>
									<td><h3>".$row['PLAYER_NAME']."</h3></td>";
									if($row['OUTS']!="")
									echo "<td><h3>".$row['OUTS']."</h3></td>";
									else
									echo "<td><h3>Not Out</h3></td>";
								echo"	<td><h3>".$row['RUN_SCORED']."</h3></td>
									<td><h3>".$row['BALL_PLAYED']."</h3></td>
									<td><h3>".$row['FOURS']."</h3></td>
									<td><h3>".$row['SIXES']."</h3></td>
									<td><h3>";echo number_format((float)($row['RUN_SCORED']*100/$row['BALL_PLAYED']), 2, '.', '');
									echo "</h3></td>
								</tr>";
						} else {
							echo "<tr><td><h3>".$row['PLAYER_NAME']."</h3></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
						}
					}
				?>
                </table>
            </div>
			
			<?php
					//printing score and extra
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run+=$row['RUN'];
						$extra+=$row['EXTRA'];
						if($row['WICKET']!="")
						$wicket+=1;
					}
					echo "<table >";
					echo "<tr><td colspan='7'> </td></tr>";
					echo "<tr>";
							echo "<td colspan='7' style='background-color:#000000;color:#ffffff;width:1454px;'><h3>Extra - ".$extra."&nbsp;&nbsp;&nbsp;&nbsp;Score - ".$run."/".$wicket."</h3></td>";
					echo "</tr>";
					echo "</table>";
			?>
			
			<h3 class="text_line"></h3>
			
			<div class="CSSTableGenerator">
			
                <table cellspacing="10px" cellpadding>
                   <?php
				   //INNING 2 BOWLING
						$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning1."%'";
						//echo $qry." <br>";
						$result = mysql_query($qry);
						echo "<tr><td align='center'><img src='flags/".$inning1.".jpg' height='50px' width='100px'></td><td colspan='7' ><h2><b>".$team1."</b></h2></td></tr>";
						echo "<tr>
							<td style='background-color:#000000;color:#aaaaaa'><h2><b>Bowling<b></h2></td>
							<td><h2>O</h2></td>
							<td><h2>M</h2></td>
							<td><h2>R</h2></td>
							<td><h2>W</h2></td>
							<td><h2>E/R</h2></td>
						</tr>";
						while($row=mysql_fetch_assoc($result)) {
							if($row['OVER_BOWLED']!=0) {
							$qry1 ="SELECT COUNT(*) AS CNT FROM plays_in,(select BOWLER from balls where MATCH_ID = '".$match."' GROUP BY ((OVER-1)-(OVER-1)%10)/10,BOWLER HAVING SUM(RUN)+SUM(EXTRA)=0 ) M where MATCH_ID='".$match."' AND PLAYER_ID='".$row['PLAYER_ID']."' AND PLAYER_ID=BOWLER  GROUP BY PLAYER_ID";
							//ECHO $qry1;
							$result1=mysql_query($qry1);
							$row1=mysql_fetch_assoc($result1);
							if($row1['CNT']!="")
							$count = $row1['CNT'];
							else $count=0;
							echo "<tr>
								<td><h3>".$row['PLAYER_NAME']."</h3></td>
								<td><h3>".(int)($row['OVER_BOWLED']/6).".".($row['OVER_BOWLED']%6)."</h3></td>
								<td><h3>".$count."</h3></td>
								<td><h3>".$row['RUN_CONCEDED']."</h3></td>
								<td><h3>".$row['WICKET']."</h3></td>
								<td><h3>";
								echo number_format((float)($row['RUN_CONCEDED']*6/$row['OVER_BOWLED']), 2, '.', '');
								"</h3></td></tr>";
							}
						}
					?>
				</table>
            </div>
			
			<?php
					//Fall of wicket inning1
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					$string ="";
					$i=1;
					
					echo "<table >";
					echo "<tr><td colspan='7'> </td></tr>";
					echo "<tr>";
					echo "<td colspan='7' style='background-color:#000000;color:#ffffff;width:1454px;'><h3>Fall Of Wickets -&nbsp;&nbsp;&nbsp;";
					while($row = mysql_fetch_assoc($result)) {
						//echo "lkdjffldfjkd";
						$run+=$row['RUN'];
						$extra+=$row['EXTRA'];
						if($row['WICKET']!="") {
							echo $run."-";
							echo $i;$i++;
							echo "(".($row['OVER']/10).") &nbsp;&nbsp;";
						}
					}
					echo "</h3></td>";
					echo "</tr>";
					echo "</table>";
			?>
			
			<h3 class="text_line"></h3>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					
		</div>
		<script src="jq.js" type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
		<script src="slider.js" type="text/javascript"></script>
		<script src="upcom.js" type="text/javascript"></script>
	</body>
</html>