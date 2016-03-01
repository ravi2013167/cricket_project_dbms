<!DOCTYPE HTML>
<?php

$m_id=$_GET['id'];
function over_form($m_id,$stat,$in,$ab,$in2){	echo "<form name='overs' action='query.php'' method='get'>
							<tr class='".$ab."team'><td colspan=2>
								<select name='ing' class='hide'>
								<option value='".$in."'>".$in."</option>
								</select>
								<select name='stat' class='hide'>
								<option value='".$stat."'>".$stat."</option>
								</select>
								<select name='ing2' class='hide'>";
								echo "<option value='".$in2."'>".$in2."</option>
								</select>
								<select name='m_id' class='hide'>
								<option value='".$m_id."'>".$m_id."</option>
								</select>
								<select name='over_start'>";
								
									for($i=0;$i<=50;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
								echo "</select> . <select name='ball_start'>";
									for($i=1;$i<=5;$i++)
									{
										echo "<option value=".$i.">".$i."</option>";
									}
									echo "<option value=0>0</option>";
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
			   <li class='active fix'><a href='fixtures.php'><span>Fixtures</span></a></li>
			   <li class='fix'><a href='stats.php'><span>Stats</span></a></li>
			   <li class='fix'><a href='pics.php'><span>Pics</span></a></li>
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			
				<br>
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
					
				?>
				
				<?php
									echo "<table class='table-filll' height=100% width=100% style='text-align:center;'>";
									$qry="SELECT VENUE, RESULT_DESCRIPTION, TOSS, TOSS_DECISION, MATCH_ID, TEAM1, TEAM2 FROM matches WHERE MATCH_ID='".$match."'";
									$result=mysql_query($qry);
									$row=mysql_fetch_assoc($result);
									$live=intval($row['MATCH_ID'][1]);
									$toss=$row['TOSS'];
									$decision=$row['TOSS_DECISION'];
									if($live>=1 && $live<=6)
										$stage='Pool Stage Match';
									else if($live==7)
										$stage='Semi Final 1';
									else if($live == 8)
										$stage='Semi Final 2';
									$qry2="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM1']."'";
										$result2=mysql_query($qry2);
										$row2=mysql_fetch_assoc($result2);
										$qry3="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM2']."'";
										$result3=mysql_query($qry3);
										$row3=mysql_fetch_assoc($result3);
										
									echo "<br><br><tr ><td style='font-size:40px;background:#2b2937;color:white;' colspan=2><center><span>".$row2['TEAM_NAME']."</span><span > vs ".$row3['TEAM_NAME']."</span></center></td></tr>";
									echo "<tr><td style='font-size:20px;' colspan=2><center>Venue - ".$row['VENUE']."<center></td></tr>";
									if($toss!="") {
										$toss = $row['TOSS'];
										$decision = $row['TOSS_DECISION'];
										if($toss==$row['TEAM1']) {
											if($decision=="BAT") {
												$i1['inning1']=$toss;
												$i1['inning2']=$row['TEAM2'];
											} else {
												$i1['inning1']=$row['TEAM2'];
												$i1['inning2']=$toss;
											}
										} else {
											if($decision=="BAT") {
												$i1['inning1']=$toss;
												$i1['inning2']=$row['TEAM1'];
											} else {
												$i1['inning1']=$team1;
												$i1['inning2']=$row['TEAM1'];
											}
										}
									}
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning1']."'";
										$result3=mysql_query($qry5);
										$row31=mysql_fetch_assoc($result3);
										
										echo "
										<tr><td style='font-size:30px;'><center>".$i1['inning1']. ": ".$row31['SCORE_RUN']."/".$row31['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=1";
										$result3=mysql_query($qry6);
										$row41=mysql_fetch_assoc($result3);
										$f = sprintf ("%.1f", $row41['BALL']);
										echo $f."</center></td>
										
										";
										
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning2']."'";
										$result3=mysql_query($qry5);
										$row32=mysql_fetch_assoc($result3);
										
										echo "
										<td style='font-size:30px;'><center>".$i1['inning2']. ": ".$row32['SCORE_RUN']."/".$row32['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=2";
										$result3=mysql_query($qry6);
										$row42=mysql_fetch_assoc($result3);
										$f2 = sprintf ("%.1f", $row42['BALL']);
										echo $f2."</center></td></tr>";
										echo "<br></table><br><br>";
												if($toss!=''){
											echo "<tr><td colspan=2><b><strong><center>".$row['TOSS']." won the toss and chose to ".$row['TOSS_DECISION']."</center>	</b>	</strong></td></tr><br>";
											
										}
										if($row['RESULT_DESCRIPTION']){
											echo "<tr><td colspan=2><b style='font-size:40px;'><center>Result - ".$row['RESULT_DESCRIPTION']."</center></b></td></tr><br>";
										}
					echo "<table border=1 style='text-align:center;width:100%;border-radius:10px;'><tr style='border-radius:10px;color:#000;height:80px;padding:10px;'>
							
								
									<td class='re' style='font-size:30px;' width=30%>
									<a  style='text-decoration:none;' href='live.php?ing=".$i1['inning1']."&stat=runs&ing2=".$i1['inning2']."&m_id=".$match."&over_start=0&ball_start=0&over_end=50&ball_end=0'>";
									$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
										$result = mysql_query($qry);
										$row=mysql_fetch_assoc($result);
																	
												if($row['TOSS'] && $row['WINNER']){
													echo 'Concluded';
												}
												else if($row['TOSS'] && !$row['WINNER']){
													echo 'LIVE';
												}
												else if(!$row['TOSS'] && !$row['WINNER']){
													echo 'Upcoming';
												}

										echo "
										</a>
									</td>
									<center><td class='re' style='font-size:30px;' width=40%><a  style='text-decoration:none;' href='scorecard.php?id=".$match."'>Scorecard</a></td></center>
									<td class='re' style='font-size:30px;text-decoration:none;' width=30%>

											Match Insights

									</td>
							</tr>
						</table>	
						</h1><br><br>";					
					//echo $match;
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					
			?>
				
				<br><br>
			<div id='sq'>
			<table width=100% height=100% style="text-align:center;padding:30px 30px 30px 30px;">
				<tr>
					<td width=33.33% height=300px>
						<table class='table' width=90%  height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Runs Scored<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`RUN_SCORED`) AS RUN,TEAM_ID FROM plays_in,players WHERE MATCH_ID='".$m_id."' AND  MATCH_ID='".$m_id."' AND plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `RUN` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['RUN'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							$qry="SELECT SCORE_RUN,TEAM_NAME,plays.TEAM_ID FROM plays,teams WHERE teams.TEAM_ID=plays.TEAM_ID AND MATCH_ID='".$m_id."' ";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$in=$row['TEAM_ID'];
							$inname=$row['TEAM_NAME'];
							$row=mysql_fetch_assoc($result);
							$in2=$row['TEAM_ID'];
							$in2name=$row['TEAM_NAME'];
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$in=$row['TEAM_ID'];
							echo "<tr><td class='active2 poolx' width=50%><a>".$inname."</a></td><td width=50% class='pooly
							'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'runs',$in,'a',$in2);
							$ind_score=$row['SCORE_RUN'];
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['SCORE_RUN']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$row=mysql_fetch_assoc($result);
							echo "<tr class='hide'></tr>";
							over_form($m_id,'runs',$in2,'b',$in);
							$pak_score=$row['SCORE_RUN'];
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['SCORE_RUN']."</td></tr>
							<tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
					
					<td width=33.33% height=300px>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Fours<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`FOURS`) AS FOUR,TEAM_ID FROM plays_in,players WHERE MATCH_ID='".$m_id."' AND  plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `FOUR` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['FOUR'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							$qry="SELECT SUM(FOURS) AS FR FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active3 poolc' width=50%><a>".$inname."</a></td><td width=50% class='poold'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'fours',$in,'c',$in2);
							echo "<tr class='cteam'><td class='ans' colspan=2><div class='answer'>".$row['FR']."</div></td></tr><tr class='cteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(FOURS) AS FR FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in2."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr class='hide'></tr>";
							over_form($m_id,'fours',$in2,'d',$in);
							echo "<tr class='dteam'><td class='ans' colspan=2><div class='answer'>".$row['FR']."</div></td></tr><tr class='dteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
					
					<td width=33.33% height=300px>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Sixes<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`SIXES`) AS SIX,TEAM_ID FROM plays_in,players WHERE MATCH_ID='".$m_id."' AND  plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `SIX` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['SIX'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							$qry="SELECT SUM(SIXES) AS SX FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active4 poole' width=50%><a>".$inname."</a></td><td width=50% class='poolf'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'sixes',$in,'e',$in2);
							echo "<tr class='eteam'><td class='ans' colspan=2><div class='answer'>".$row['SX']."</div></td></tr><tr class='eteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(SIXES) AS SX FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in2."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr class='hide'></tr>";
							over_form($m_id,'sixes',$in2,'f',$in);
							echo "<tr class='fteam'><td class='ans' colspan=2><div class='answer'>".$row['SX']."</div></td></tr><tr class='fteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
				</tr>
				<tr>
						<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr class='yellow'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Strike Rate<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(`RUN_SCORED`), SUM(`RUN_SCORED`)/SUM(BALL_PLAYED)*100 AS SR,SUM(BALL_PLAYED),TEAM_ID FROM plays_in,players WHERE BALL_PLAYED>0 AND MATCH_ID='".$m_id."' AND  plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY `SR` DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							$f = sprintf ("%.2f", $row['SR']);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $f;$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							$qry="SELECT SUM(BALL_PLAYED) AS OB FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active5 poolg' width=50%><a>".$inname."</a></td><td width=50% class='poolh'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'strike_rate',$in,'g',$in2);
							$ind_bowl=$row['OB'];
							if($ind_bowl==0)$ind_bowl=1;
							echo "<tr class='gteam'><td class='ans' colspan=2><div class='answer'>".round((($ind_score/$ind_bowl)*100),2)."</div></td></tr><tr class='gteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(BALL_PLAYED) AS OB FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in2."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr class='hide'></tr>";
							over_form($m_id,'strike_rate',$in2,'h',$in);
							$pak_bowl=$row['OB'];
							if($pak_bowl==0)$pak_bowl=1;
							echo "<tr class='hteam'><td class='ans' colspan=2><div class='answer'>".round((($pak_score/$pak_bowl)*100),2)."</div></td></tr><tr class='hteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
						<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr style='background-color: #1abc9c;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Wickets<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,SUM(WICKET) AS W,TEAM_ID FROM plays_in,players WHERE MATCH_ID='".$m_id."' AND  plays_in.PLAYER_ID=players.PLAYER_ID GROUP BY `PLAYER_NAME`
ORDER BY W DESC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo $row['W'];$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							$qry="SELECT SUM(WICKET) AS W FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active6 pooli' width=50%><a>".$inname."</a></td><td width=50% class='poolj'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'wickets',$in,'i',$in2);
							echo "<tr class='iteam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='iteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(WICKET) AS W FROM plays_in WHERE MATCH_ID='".$m_id."'  AND PLAYER_ID LIKE '".$in2."%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr class='hide'></tr>";
							over_form($m_id,'wickets',$in2,'j',$in);
							echo "<tr class='jteam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='jteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
					<td width=33.33%>
						<table class='table' width=90% height=90% style="text-align:center;">
							<tr ><tr style='background-color: #FA5858;'><td style='font-size:30px' colspan=3 height=10%><strong><strong>Economy<strong></td></tr>
							
							
							<?php
							$qry="SELECT `PLAYER_NAME`,players.PLAYER_ID,(SUM(RUN_CONCEDED)*6)/SUM(OVER_BOWLED) AS EC,TEAM_ID FROM plays_in,players WHERE MATCH_ID='".$m_id."' AND  plays_in.PLAYER_ID=players.PLAYER_ID AND OVER_BOWLED>0 GROUP BY PLAYER_NAME ORDER BY EC";
							$result=mysql_query($qry);$row=mysql_fetch_assoc($result);
							echo "<tr  height=15%><td style='background-color: #2b2937;font-size:20px' width=50%>";echo $row['PLAYER_ID'][0].$row['PLAYER_ID'][1].$row['PLAYER_ID'][2].'<br><br>';echo $row['PLAYER_NAME'];echo "<br><br>";echo round($row['EC'],2);$img = 'images/'.$row['PLAYER_ID'].'.jpg';echo "</td><td colspan=2 style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
							echo "<tr><td width=100% colspan=2><table  width=100% height=100%  style='text-align:center;'>";
							echo "<tr><td class='active7 poolk' width=50%><a>".$inname."</a></td><td width=50% class='pooll'><a>".$in2name."</a></td></tr>";
							over_form($m_id,'economy',$in,'k',$in2);
							if($ind_bowl==0)$ind_bowl=1;
							if($pak_bowl==0)$pak_bowl=1;
							$e=round((($pak_score*6)/$pak_bowl),2);
							echo "<tr class='kteam'><td class='ans' colspan=2><div class='answer'>".$e."</div></td></tr><tr class='kteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "<tr class='hide'></tr>";
							over_form($m_id,'economy',$in2,'l',$in);
							$e=round((($ind_score*6)/$ind_bowl),2);
							echo "<tr class='lteam'><td class='ans' colspan=2><div class='answer'>".$e."</div></td></tr><tr class='lteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							echo "</table></td></tr>";
							?>
							
						</table>
					</td>
				</tr>
				
			</table>
			</div>
			
			<?php
			include('main_foot.php')?>