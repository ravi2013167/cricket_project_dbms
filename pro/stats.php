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
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
		<body id="body">
		<div id="container1">
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
			   session_start();
			include('dbms.php');
			$qry='SELECT MATCH_ID,TEAM1,TEAM2 FROM MATCHES WHERE TOSS IS NOT NULL AND WINNER IS NULL';
			$result=mysql_query($qry);
			$row=mysql_fetch_assoc($result);
			$live=intval($row['MATCH_ID'][1]);
			
			if($row['TEAM1'] !=NULL)
				echo "<li><a id='match1' href='scorecard.php?id=".$row['MATCH_ID']."'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
			else
			{
				$qry='SELECT MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE MATCH_ID = (SELECT MAX(MATCH_ID) FROM MATCHES WHERE WINNER IS NOT NULL)';
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				if($row['TEAM1'] !=NULL)
				{
					$live=intval($row['MATCH_ID'][1]);
					echo "<li><a id='match1' href='scorecard.php?id=".$row['MATCH_ID']."'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
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
			echo "<li><a class='match' href='scorecard.php?id=".$row['MATCH_ID']."'><span>".$row['TEAM1']." vs ".$row['TEAM2']."</span></a></li>";
			}
			
			?>
			 
			</ul>
			</div>
			<br>
			<div id='header1'>
			<ul>
			   <li class='fix'><a href='info.php'><span>ICC Cricket World Cup 2015</span></a></li>
			   <li class='fix'><a href='layout.php'><span>Home</span></a></li>
			   <li class='has-sub'><a href='#'><span>Teams</span></a>
				  <ul>
					 <li class='fix2'><a href='squads.php?id=IND'><span>India</span></a></li>
					<li class='fix2'><a href='squads.php?id=AUS'><span>Australia</span></a></li>
					<li class='fix2'><a href='squads.php?id=PAK'><span>Pakistan</span></a></li>
					<li class='fix2'><a href='squads.php?id=NWZ'><span>New Zealand</span></a></li>
					<li class='fix2'><a href='squads.php?id=RSA'><span>South Africa</span></a></li>
					<li class='fix2'><a href='squads.php?id=SRI'><span>Sri Lanka</span></a></li>
				  </ul>
			   </li>
			   <li class='fix'><a href='fixtures.php'><span>Fixtures</span></a></li>
			   <li class='active fix'><a href='stats.php'><span>Stats</span></a></li>
			   <li class='fix'><a href='pics.php'><span>Pics</span></a></li>
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			
				<br>

			<table width=100% height=100% style="padding:30px 30px 30px 30px;">
				<tr>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Runs Scored<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`RUN_SCORED`) AS RUN,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `RUN` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['RUN'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;$i=0;while($i<5 )
							{	
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['RUN']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Fours<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`FOURS`) AS FOUR,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `FOUR` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['FOUR'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['FOUR']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Sixes<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`SIXES`) AS SIX,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `SIX` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['SIX'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['SIX']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
				</tr>
				<tr>
						<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Strike Rate<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`RUN_SCORED`), SUM(`RUN_SCORED`)/SUM(BALL_PLAYED)*100 AS SR,SUM(BALL_PLAYED),TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `SR` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							$f = sprintf ("%.2f", $row['SR']);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $f;$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								$f = sprintf ("%.2f", $row['SR']);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$f."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
						<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Wickets<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(WICKET) AS W,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY W DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['W'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['W']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Economy<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,(SUM(RUN_CONCEDED)*6)/SUM(OVER_BOWLED) AS EC,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID AND OVER_BOWLED>0 GROUP BY PLAYER_NAME ORDER BY EC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo round($row['EC'],2);$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								$f=sprintf ("%.1f", $row['EC']);
								
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>";
								if($row['EC'])
									echo $f;
								echo "</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
				</tr>
				<tr>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Catches<strong></td></tr>
							
							
							<?php
							$qry="SELECT PLAYER_NAME,players.PLAYER_ID,TEAM_ID,COUNT(*) AS CT FROM plays_in,players WHERE SUBSTRING_INDEX(OUTS,'c ',-1)=players.PLAYER_NAME AND  OUTS LIKE '%c %' GROUP BY SUBSTRING_INDEX(OUTS,'c ',-1)";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['CT'];echo $row['PLAYER_NAME'];echo "<br><br>";$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['CT']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Maidens<strong></td></tr>
							
							
							<?php
							$qry="SELECT PLAYER_NAME,players.PLAYER_ID,TEAM_ID,COUNT(*) AS MD FROM (SELECT * FROM balls GROUP BY ((OVER-1)-(OVER-1)%10)/10,BOWLER,MATCH_ID HAVING (SUM(RUN)+SUM(EXTRA)=0 AND COUNT(OVER)=6)) M,players
							WHERE M.BOWLER=players.PLAYER_ID
							GROUP BY BOWLER";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['MD'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['MD']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Bowling Figure<strong></td></tr>
							
							
							<?php
							$qry="SELECT WICKET, RUN_CONCEDED AS RUNS, players.PLAYER_ID, PLAYER_NAME, TEAM_ID FROM plays_in, players WHERE players.PLAYER_ID=plays_in.PLAYER_ID ORDER BY WICKET DESC, RUNS";
					
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';
							echo $row['PLAYER_NAME'];
							echo "<br><br>";
							echo $row['WICKET'].'/'.$row['RUNS'].'<br><br>';
							
							$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;
							while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".$row['WICKET'].'/'.$row['RUNS']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					
				</tr>
				<tr>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Batting Average<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID, SUM(`RUN_SCORED`)/COUNT(OUTS) AS AVE,TEAM_ID FROM plays_in,players WHERE plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
							ORDER BY `AVE` DESC";
					
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';
							echo $row['PLAYER_NAME'];
							echo "<br><br>";
							echo round($row['AVE'],2).'<br><br>';
							
							$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>".round($row['AVE'],2)."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>100's<strong></td></tr>
							
							
							<?php
							
							$qry="SELECT PLAYER_ID, COUNT(*)
									FROM 
								(SELECT PLAYER_ID FROM plays_in WHERE RUN_SCORED>=100 ORDER BY RUN_SCORED) AS T
								GROUP BY PLAYER_ID
								ORDER BY COUNT(*) DESC";
					
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$qry2="SELECT PLAYER_ID, TEAM_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row['PLAYER_ID']."'
									";
								$result1=mysql_query($qry2);
								$row1=mysql_fetch_assoc($result1);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row1['TEAM_ID'].'<br><br>';
							echo $row1['PLAYER_NAME'];
							echo "<br><br>";
							echo $row['COUNT(*)'].'<br><br>';
							
							$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								$qry2="SELECT PLAYER_ID, TEAM_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row['PLAYER_ID']."'
									";
								$result1=mysql_query($qry2);
								$row1=mysql_fetch_assoc($result1);
							
								echo "<tr><td>".$row1['PLAYER_NAME']."</td><td>".$row1['TEAM_ID']."</td><td>".$row['COUNT(*)']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>50's<strong></td></tr>
							
							
							<?php
							
							$qry="SELECT PLAYER_ID, COUNT(*)
									FROM 
								(SELECT PLAYER_ID FROM plays_in WHERE RUN_SCORED>=50 AND RUN_SCORED<100 ORDER BY RUN_SCORED) AS T
								GROUP BY PLAYER_ID
								ORDER BY COUNT(*) DESC";
					
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$qry2="SELECT PLAYER_ID, TEAM_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row['PLAYER_ID']."'
									";
								$result1=mysql_query($qry2);
								$row1=mysql_fetch_assoc($result1);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row1['TEAM_ID'].'<br><br>';
							echo $row1['PLAYER_NAME'];
							echo "<br><br>";
							echo $row['COUNT(*)'].'<br><br>';
							
							$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								$qry2="SELECT PLAYER_ID, TEAM_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row['PLAYER_ID']."'
									";
								$result1=mysql_query($qry2);
								$row1=mysql_fetch_assoc($result1);
							
								echo "<tr><td>".$row1['PLAYER_NAME']."</td><td>".$row1['TEAM_ID']."</td><td>".$row['COUNT(*)']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					</tr>
					<tr>
					
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Highest Total<strong></td></tr>
							
							
							<?php
							$qry="SELECT TEAM_ID, SCORE_RUN, SCORE_WICKET 
								FROM plays
								WHERE SCORE_RUN > 0
								ORDER BY SCORE_RUN DESC
								";
					
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row['TEAM_ID'].'<br><br>';
							echo $row['SCORE_RUN'];
							if($row['SCORE_RUN']){
								echo '/';
							}
							echo $row['SCORE_WICKET'].'<br><br>';
							
							$img = 'images/'.$row['TEAM_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img height=120px width=120px/></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['TEAM_ID']."</td><td>".$row['SCORE_RUN'];
								if($row['SCORE_RUN']){
								echo '/';
								}
								echo $row['SCORE_WICKET']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Lowest Total<strong></td></tr>
							
							<?php
							$qry="SELECT TEAM_ID, SCORE_RUN, SCORE_WICKET 
								FROM plays
								WHERe SCORE_RUN>0
								ORDER BY SCORE_RUN ASC
								";
					
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row['TEAM_ID'].'<br><br>';
							echo $row['SCORE_RUN'];
							if($row['SCORE_RUN']){
								echo '/';
							}
							
							echo $row['SCORE_WICKET'].'<br><br>';
							
							$img = 'images/'.$row['TEAM_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img height=120px width=120px src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['TEAM_ID']."</td><td>".$row['SCORE_RUN'];
								
								if($row['SCORE_RUN']){
								echo '/';
								}
								echo $row['SCORE_WICKET']."</td></tr>";
								$i++;
							}
							
							?>
							
							
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Most Five Wickets<strong></td></tr>
							
							
							<?php
							
							$qry="SELECT COUNT(players.PLAYER_ID), WICKET, players.TEAM_ID AS TEAM_ID, RUN_CONCEDED, players.PLAYER_ID, PLAYER_NAME FROM plays_in, players WHERE WICKET>=5 AND plays_in.PLAYER_ID=players.PLAYER_ID 
							GROUP BY players.PLAYER_ID
							ORDER BY WICKET DESC, RUN_CONCEDED";
					
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>".$row1['TEAM_ID'].'<br><br>';
							echo $row['PLAYER_NAME'];
							echo "<br><br>".$row['TEAM_ID'];
							echo '<br><br>'.$row['COUNT(players.PLAYER_ID)'];
							
							$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							$i=0;while($i<5)
							{
								$row=mysql_fetch_assoc($result);
								echo "<tr><td>".$row['PLAYER_NAME']."</td><td>".$row['TEAM_ID']."</td><td>";
			
								echo $row['COUNT(players.PLAYER_ID)']."</td></tr>";
								$i++;
							}
							
							?>
							
						</table>
					</td>
					</tr>
					
			</table>
					<br>
			<div id="gototop">
				<img style="border-radius:10px;float:right;height:40px;"id="top" src="images/images.png"></img>
			</div>
		</div>
		<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Cric<span>Crazy</span></h3>

				<p class="footer-links">
					<a href="#">Home</a>
					
					<a href="#">Contact</a>
				</p>

				<p class="footer-company-name">Cric Crazy &copy; 2015</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>PDPM IIITDM  Jabalpur</span> MP, INDIA</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>9876543210</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">2013094@iiitdmj.ac.in</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About Us</span>
					Jus Learnin..
				</p>

<!--				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>
-->
			</div>

		</footer>
		<script src="js/jq.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<script src="js/slider.js" type="text/javascript"></script>
		<script src="js/upcom.js" type="text/javascript"></script>
	</body>
</html>