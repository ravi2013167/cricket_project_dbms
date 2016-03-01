<!DOCTYPE HTML>
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
			   <li class='active fix'><a href='fixtures.php'><span>Fixtures</span></a></li>
			   <li class='fix'><a href='stats.php'><span>Stats</span></a></li>
			   <li class='fix'><a href='pics.php'><span>Pics</span></a></li>
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			<!--scorecard begins-->
				<?php
					//$match=$_GET['id'];
					$match=$_GET['m_id'];
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
									$qry="SELECT VENUE, WINNER, TOSS, RESULT_DESCRIPTION, TOSS_DECISION, MATCH_ID, TEAM1, TEAM2 FROM matches WHERE MATCH_ID='".$match."'";
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
									echo "<tr><td style='font-size:20px;' colspan=2><center>".$stage."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Venue - ".$row['VENUE']."<center></td></tr>";
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
										
									if(!$row['TOSS'] && !$row['WINNER']){
										exit();
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
							
								
									<td class='re' style='font-size:30px;text-decoration:none;' width=30%>
										";
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
									</td>
									<center><td class='re' style='font-size:30px;' width=40%><a  style='text-decoration:none;' href='scorecard.php?id=".$match."'>Scorecard</a></td></center>
									<td class='re' width=30%>
										<a style='font-size:30px;text-decoration:none;' href='m_insight1.php?id=".$match."'>
											Match Insights
										</a>
									</td>
							</tr>
						</table>	
						</h1><br><br>";					
					//echo $match;
					echo "<table style='width:50%;'><tr width=50% border=1><td class='re1'><center><a style='font-size:30px;text-decoration:none;'>".$i1['inning1']."</a></center></td><td class='re2'><center><a style='font-size:30px;text-decoration:none;'>".$i1['inning2']."</a></center></td></tr></table>";
			?>
		<br><br>
			<div id='sqf'>
				<table class='in1' width=100% height=90% style="text-align:center;vertical-align:top;">
				<?php
				$runs=0;$extra=0;$r=0;$e=0;
				$four=0;$six=0;$fr=0;$sx=0;
				$wk=0;$w=0;$bl=0;$ball=0;
				$qry="SELECT PLAYER_ID,PLAYER_NAME FROM players WHERE TEAM_ID='".$_GET['ing']."' OR TEAM_ID='".$_GET['ing2']."'";
				$result=mysql_query($qry);
				while($row=mysql_fetch_assoc($result))
				{
					$id=$row['PLAYER_ID'];
					$PL[$row['PLAYER_ID']]=$row['PLAYER_NAME'];
				}
				$f=($_GET['over_start']*10)+$_GET['ball_start'];
				$l=($_GET['over_end']*10)+$_GET['ball_end'];
				$s=$_GET['stat'];
			//	$qry="SELECT (SUM(RUN)+SUM(EXTRA)) AS RUNS,(((OVER-1)-(OVER-1)%10)/10) AS OVER FROM `balls` WHERE OVER BETWEEN 0 AND 30 AND MATCH_ID='M1' GROUP BY (((OVER-1)-(OVER-1)%10)/10)";
				$qry="SELECT *,(((OVER-1)-(OVER-1)%10)/10) AS O FROM balls WHERE BATSMAN LIKE '".$_GET['ing']."%' AND MATCH_ID='".$_GET['m_id']."' AND OVER BETWEEN ".$f." AND ".$l." ORDER BY ((OVER-1)-(OVER-1)%10)/10 DESC,OVER ASC";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$r+=$row['RUN'];
				$e+=$row['EXTRA'];
				if($row['RUN']==4)
				{
					$fr++;
				}
				else if($row['RUN']==6)
				{
					$sx++;
				}
				$bl++;
				$i=1;
				echo "<tr><td style='height:100%;text-align:center;vertical-align:top;width:33.33%;'><table class='table' width=100% height=50px>
					<tr >
					<td style='background-color: #eac80d;font-size:30px;text-align:center;vertical-align:top;' colspan=2 height=10% ><strong>Over ".((int)$row['O']+1)."</strong>
					</td>
					</tr>";
				echo "<tr  height=30%>
					<td style='background-color: #2b2937;font-size:20px' width=50%>";
					echo $row['BOWLER'][0].$row['BOWLER'][1].$row['BOWLER'][2].'<br><br>';
					$b=$row['BOWLER'];
					if($row['BOWLER'])
					{echo $PL[$b];}
					$img = 'images/'.$row['BOWLER'].'.jpg';
					echo "</td><td style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
					echo "<tr><td colspan=2><table width=100% height=100%>";
					$bt=$row['BATSMAN'];
					if($row['WICKET'])
					{
						$w++;
						echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>W</td></tr>";
					}
					else if($row['BATSMAN']){
							echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>".$row['RUN']."</td></tr>";
					}
					
				while($row=mysql_fetch_assoc($result))
				{
					
					if($b!=$row['BOWLER'])
					{
						echo "</table></td></tr>
						<tr><td><b>Extras</b></td><td>".$e."</td></tr>";
						$runs+=$r;
					$extra+=$e;
					$wk+=$w;
					$four+=$fr;
					$six+=$sx;
					$ball+=$bl;
						
					echo "</table></td>";
					$w=0;$fr=0;$bl=0;
					$r=0;$e=0;$sx=0;
					if($i%3==0)
					{
						echo "</tr><tr>";
					}
					
					echo "<td style='height:100%;text-align:center;vertical-align:top;width:33.33%;'><table class='table' width=100% height=100px style='text-align:center;vertical-align:top;'>
					<tr class='trs'>
					<td style='background-color: #eac80d;font-size:30px;text-align:center;vertical-align:top;' colspan=2 height=10%><strong>Over ".(((int)$row['O'])+1)."</strong>
					</td>
					</tr>";
					echo "<tr  height=15%>
					<td style='background-color: #2b2937;font-size:20px' width=50%>";
					echo $row['BOWLER'][0].$row['BOWLER'][1].$row['BOWLER'][2].'<br><br>';
					$b=$row['BOWLER'];
					echo $PL[$b];
					$img = 'images/'.$row['BOWLER'].'.jpg';
					echo "</td><td style='background-color: #2b2937;font-size:20px'><img src=$img /></td>";
					echo "</tr><tr><td colspan=2><table width=100% height=100%>";
					$i++;
					}
					$r+=$row['RUN'];
					$e+=$row['EXTRA'];
					if($row['RUN']==4)
				{
					$fr++;
				}
				else if($row['RUN']==6)
				{
					$sx++;
				}
				$bl++;
					$bt=$row['BATSMAN'];
					if($row['WICKET'])
					{
						$w++;
						echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>W</td></tr>";
					}
					else{
							echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>".$row['RUN']."</td></tr>";
					}
					
				}	
				echo "</table></td></tr>";
				echo "<tr><td><b>Extras</b></td><td>".$e."</td></tr>";
				//echo "<tr><td colspan=2 height=10% style='background-color: #2b2948;font-size:25px'><strong>";
				$runs+=$r;
					$extra+=$e;
					$wk+=$w;
					$four+=$fr;
					$six+=$sx;
					$ball+=$bl;
				?>
				</table></td></tr></table>
			
				<table class='in2' width=100% height=90% style="text-align:center;vertical-align:top;">
				<?php
				$swap_temp=$_GET['ing'];
				$_GET['ing']=$_GET['ing2'];
				$_GET['ing2']=$swap_temp;
				$runs=0;$extra=0;$r=0;$e=0;
				$four=0;$six=0;$fr=0;$sx=0;
				$wk=0;$w=0;$bl=0;$ball=0;
				$qry="SELECT PLAYER_ID,PLAYER_NAME FROM players WHERE TEAM_ID='".$_GET['ing']."' OR TEAM_ID='".$_GET['ing2']."'";
				$result=mysql_query($qry);
				while($row=mysql_fetch_assoc($result))
				{
					$id=$row['PLAYER_ID'];
					$PL[$row['PLAYER_ID']]=$row['PLAYER_NAME'];
				}
				$f=($_GET['over_start']*10)+$_GET['ball_start'];
				$l=($_GET['over_end']*10)+$_GET['ball_end'];
				$s=$_GET['stat'];
			//	$qry="SELECT (SUM(RUN)+SUM(EXTRA)) AS RUNS,(((OVER-1)-(OVER-1)%10)/10) AS OVER FROM `balls` WHERE OVER BETWEEN 0 AND 30 AND MATCH_ID='M1' GROUP BY (((OVER-1)-(OVER-1)%10)/10)";
				$qry="SELECT *,(((OVER-1)-(OVER-1)%10)/10) AS O FROM balls WHERE BATSMAN LIKE '".$_GET['ing']."%' AND MATCH_ID='".$_GET['m_id']."' AND OVER BETWEEN ".$f." AND ".$l." ORDER BY ((OVER-1)-(OVER-1)%10)/10 DESC,OVER ASC";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$r+=$row['RUN'];
				$e+=$row['EXTRA'];
				if($row['RUN']==4)
				{
					$fr++;
				}
				else if($row['RUN']==6)
				{
					$sx++;
				}
				$bl++;
				$i=1;
				echo "<tr><td style='text-align:center;vertical-align:top;width:33.33%;'><table class='table' width=100% height=50px>
					<tr class='trs'>
					<td style='background-color: #eac80d;font-size:30px;text-align:center;vertical-align:top;' colspan=2 height=10% ><strong>Over ".((int)$row['O']+1)."</strong>
					</td>
					</tr>";
				echo "<tr  height=30%>
					<td style='background-color: #2b2937;font-size:20px' width=50%>";
					echo $row['BOWLER'][0].$row['BOWLER'][1].$row['BOWLER'][2].'<br><br>';
					$b=$row['BOWLER'];
					if($row['BOWLER'])
					{echo $PL[$b];}
					$img = 'images/'.$row['BOWLER'].'.jpg';
					echo "</td><td style='background-color: #2b2937;font-size:20px'><img src=$img /></td></tr>";
					echo "<tr><td colspan=2><table width=100% height=100%>";
					$bt=$row['BATSMAN'];
					if($row['WICKET'])
					{
						$w++;
						echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>W</td></tr>";
					}
					else if($row['BATSMAN']){
							echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>".$row['RUN']."</td></tr>";
					}
					
				while($row=mysql_fetch_assoc($result))
				{
					
					if($b!=$row['BOWLER'])
					{
						echo "</table></td></tr>
						<tr><td><b>Extras</b></td><td>".$e."</td></tr>";
						$runs+=$r;
					$extra+=$e;
					$wk+=$w;
					$four+=$fr;
					$six+=$sx;
					$ball+=$bl;
						
					echo "</table></td>";
					$w=0;$fr=0;$bl=0;
					$r=0;$e=0;$sx=0;
					if($i%3==0)
					{
						echo "</tr><tr>";
					}
					
					echo "<td style='text-align:center;vertical-align:top;width:33.33%;'><table class='table' width=100% height=100px style='text-align:center;vertical-align:top;'>
					<tr class='trs'>
					<td style='background-color: #eac80d;font-size:30px;text-align:center;vertical-align:top;' colspan=2 height=10%><strong>Over ".((int)$row['O']+1)."</strong>
					</td>
					</tr>";
					echo "<tr  height=15%>
					<td style='background-color: #2b2937;font-size:20px' width=50%>";
					echo $row['BOWLER'][0].$row['BOWLER'][1].$row['BOWLER'][2].'<br><br>';
					$b=$row['BOWLER'];
					echo $PL[$b];
					$img = 'images/'.$row['BOWLER'].'.jpg';
					echo "</td><td style='background-color: #2b2937;font-size:20px'><img src=$img /></td>";
					echo "</tr><tr><td colspan=2><table width=100% height=100%>";
					$i++;
					}
					$r+=$row['RUN'];
					$e+=$row['EXTRA'];
					if($row['RUN']==4)
				{
					$fr++;
				}
				else if($row['RUN']==6)
				{
					$sx++;
				}
				$bl++;
					$bt=$row['BATSMAN'];
					if($row['WICKET'])
					{
						$w++;
						echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>W</td></tr>";
					}
					else{
							echo "<tr><td>".(($row['OVER']/10))."</td><td>".$PL[$bt]."</td><td>".$row['RUN']."</td></tr>";
					}
					
				}	
				echo "</table></td></tr>";
				echo "<tr><td><b>Extras</b></td><td>".$e."</td></tr>";
				//echo "<tr><td colspan=2 height=10% style='background-color: #2b2948;font-size:25px'><strong>";
				$runs+=$r;
					$extra+=$e;
					$wk+=$w;
					$four+=$fr;
					$six+=$sx;
					$ball+=$bl;
				?>
				</table></td></tr></table>
				
			
			</div>	





<br><br><br>
			
			<?php
			include('main_foot.php')?>