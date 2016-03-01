<!DOCTYPE HTML>
<?php
function over_form($stat,$in){	echo "<form name='overs' action='".$stat."_match.php'' method='get'>
							<tr><td>
								<select name='ing' class='hide'>
								<option value='".$in."'>".$in."</option>
								</select>
								<select name='m_id' class='hide'>
								<option value='M1'>M1</option>
								</select>
								<select name='over_start'>";
								
									for($i=0;$i<=50;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> . <select name='ball_start'>";
									for($i=0;$i<=5;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> &nbsp;&nbsp;to&nbsp;&nbsp; <select name='over_end'> ";
									for($i=50;$i>=0;$i--)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> . <select name='ball_end'>";
									for($i=0;$i<=5;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
							
							echo 	"</select>
							</td></tr>";
}
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
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
				<br>
			<div id='header2'>
			<ul>
			   <li class='static'><span style="color:#fff">Recent Scores</span></li>
			   
			   <?php 
			include('dbms.php');
			$qry='SELECT MATCH_ID,TEAM1,TEAM2 FROM MATCHES WHERE TOSS IS NOT NULL AND WINNER IS NULL';
			$result=mysql_query($qry);
			$row=mysql_fetch_assoc($result);
			$live=intval($row['MATCH_ID'][1]);
			
			if($row['TEAM1'] !=NULL)
				echo "<li><a id='match1' href='#'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
			else
			{
				$qry='SELECT MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE MATCH_ID = (SELECT MAX(MATCH_ID) FROM MATCHES WHERE WINNER IS NOT NULL)';
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				if($row['TEAM1'] !=NULL)
				{
					$live=intval($row['MATCH_ID'][1]);
					echo "<li><a id='match1' href='#'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
				}
				else if($row['TEAM1'] == NULL)
				{
					
				}
					
				
			}
			$l=$live-1;
				$ll=$live-2;
				
			$qry="SELECT MATCH_ID,TEAM1,TEAM2 FROM MATCHES WHERE MATCH_ID IN ('M".$l."','M".$ll."')";
			$result=mysql_query($qry);
			$i=1;
			while($row=mysql_fetch_assoc($result))
			{
			echo "<li><a class='match' href='#'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
			}
			?>
			   
			</ul>
			</div>
			<br>
			<div id='header1'>
			<ul>
			   <li class='fix'><a href='#'><span>ICC Cricket World Cup 2015</span></a></li>
			   <li class='active fix'><a href='layout.php'><span>Home</span></a></li>
			   <li class='has-sub'><a href='#'><span>Teams</span></a>
				  <ul>
					 <li class='fix2'><a href='india.php'><span>India</span></a></li>
					 <li class='fix2'><a href='#'><span>Australia</span></a></li>
					 <li class='fix2'><a href='#'><span>Pakistan</span></a></li>
					 <li class='fix2'><a href='#'><span>New Zealand</span></a></li>
					 <li class='fix2'><a href='#'><span>South Africa</span></a></li>
					 <li class='fix2'><a href='#'><span>Sri Lanka</span></a></li>
				  </ul>
			   </li>
			   <li class='fix'><a href='#'><span>Fixtures</span></a></li>
			   <li class='fix'><a href='#'><span>Stats</span></a></li>
			   <li class='fix'><a href='#'><span>Pics</span></a></li>
			   <li class='fix'><a href='#'><span>Points Table</span></a></li>
			   <li class='fix'><a href='#'><span>Tournament Insights</span></a></li>
			   <li class='fix'><a href='#'><span>Contact</span></a></li>
			</ul>
			</div>
			
				<br>
			
			<div class='mi'>
			<table width=100% height=100% style="padding:30px 30px 30px 30px;">
				<tr>
					<td class='mi1'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Runs Scored<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,`RUN_SCORED`,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND  MATCH_ID='M1' GROUP BY `PLAYER_NAME`
ORDER BY `RUN_SCORED` DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['RUN_SCORED']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					
					<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Fours<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,`FOURS`,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND  MATCH_ID='M1' GROUP BY `PLAYER_NAME`
ORDER BY `FOURS` DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['FOURS']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					
					<td class='mi3'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Sixes<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,`SIXES`,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND  MATCH_ID='M1' GROUP BY `PLAYER_NAME`
ORDER BY `SIXES` DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['SIXES']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
				</tr>
				<tr>
						<td class='mi1'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Strike Rate<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,((RUN_SCORED/BALL_PLAYED)*100) AS SR,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND MATCH_ID='M1' ORDER BY `SR` DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['SR']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
						<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Wickets<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,WICKET,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND MATCH_ID='M1' ORDER BY WICKET DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['WICKET']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td class='mi3'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Economy<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,((RUN_SCORED/OVER_BOWLED)/6) AS EC,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND MATCH_ID='M1' AND OVER_BOWLED>0 ORDER BY EC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['EC']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
				</tr>
				<tr>
					<td class='mi1'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Catches<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT PLAYER_NAME,TEAM_ID,COUNT(*) AS CT FROM plays_in,players WHERE (SUBSTR(OUTS,11,14))=players.PLAYER_ID AND MATCH_ID='M1' AND plays_in.`PLAYER_ID` LIKE 'I%' AND OUTS LIKE '%c %' GROUP BY (SUBSTR(OUTS,11,14))";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['CT']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Maidens<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT PLAYER_NAME,TEAM_ID,COUNT(*) AS MD FROM (SELECT * FROM balls where MATCH_ID='M1' GROUP BY ((OVER-1)-(OVER-1)%10)/10 HAVING (SUM(RUN)+SUM(EXTRA)=0 AND COUNT(OVER)=6)) M,players
							WHERE M.BOWLER=players.PLAYER_ID
							GROUP BY BOWLER";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['MD']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td class='mi3'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;"  colspan=3><strong>Runs Given<strong></td></tr>
							
							<tr style='color:#A79787;'><td>Teams</td><td>FL</td><td>RN</td></tr>
							<?php
							$qry="SELECT `PLAYER_NAME`,`RUN_CONCEDED`,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND  MATCH_ID='M1' GROUP BY `PLAYER_NAME`
ORDER BY `RUN_CONCEDED` DESC";
							$result=mysql_query($qry);
							$i=0;
							while($i<5 && $row=mysql_fetch_assoc($result))
							{
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['RUN_CONCEDED']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
				</tr>
			</table>
			</div>
			<br>
			<div id="gototop">
				<img style="border-radius:10px;float:right;height:40px;"id="top" src="images.png"></img>
			</div>
			<br>
			<div id="footer">
			</div>
		</div>
		<script src="jq.js" type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
		<script src="slider.js" type="text/javascript"></script>
		<script src="upcom.js" type="text/javascript"></script>
	</body>
</html>