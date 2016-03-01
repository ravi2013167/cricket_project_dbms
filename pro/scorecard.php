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
										echo "</a>
									</td>
									<center><td style='font-size:30px;' width=40%>Scorecard</td></center>
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
				<!--outermost table-->
				<table width=100% >
				<tr>
				<td style='width:65%'>
				<!--inning 1 bat-->
				<table class="in1" style='border-collapse:seperate;width:100%;'>
				

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
					echo "<tr style='width:100%;'><td style='width:30%;background-color:#5d6a9a;'align='center'><img src='".$inning1.".jpg' height='50px' width='100px'></td><td colspan='7' style='width:70%;background-color:#5d6a9a;'><h2><b>".$team1."</b></h2></td></tr>";
					echo "<tr>
							<td style='background-color:#2b2937;color:#ffffff'><h2><b>Batting<b></h2></td>
							<td style='background-color:#2b2937;color:#ffffff'></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>R</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>B</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>4s</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>6s</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>S/R</h2></td>
						</tr>";
					while($row=mysql_fetch_assoc($result)) {
						if($row['BALL_PLAYED']!=0) {
							echo "<tr id='batsmen' >
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td>";
									if($row['OUTS']!="")
									echo "<td style='background-color:#585858;color:#ffffff;'><h3>".$row['OUTS']."</h3></td>";
									else
									echo "<td style='background-color:#585858;color:#ffffff;'><h3>Not Out</h3></td>";
								echo"	<td style='background-color:#585858;color:#ffffff;'><h3>".$row['RUN_SCORED']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['BALL_PLAYED']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['FOURS']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['SIXES']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>";echo number_format((float)($row['RUN_SCORED']*100/$row['BALL_PLAYED']), 2, '.', '');
									echo "</h3></td>
								</tr>";
						} else {
							echo "<tr><td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td></tr>";
						}
					}
				?>
                </table>
            
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
					echo "<table class='in1'>";
					echo "<tr><td colspan='7'></td></tr>";
					echo "<tr>";
							echo "<td colspan=7' style='background-color:#000000;color:#ffffff;width:1454px;'><h3>Extra - ".$extra."&nbsp;&nbsp;&nbsp;&nbsp;Score - ".$run."/".$wicket."</h3></td>";
					echo "</tr>";
					
			?>
			<tr style='width:100%;'>
				<td colspan=100>
				<br><br>
				<div id="vertgraph">
					
					<table border=1 style='background-color:black' width=910px>
					<tr style='height:auto;'>
					<td>
					<ul style='list-style-type: none;'>
					<br><br><?php
								$f=0;
								$l=500;
							//	$qry="SELECT (SUM(RUN)+SUM(EXTRA)) AS RUNS,(((OVER-1)-(OVER-1)%10)/10) AS OVER FROM `balls` WHERE OVER BETWEEN 0 AND 30 AND MATCH_ID='M1' GROUP BY (((OVER-1)-(OVER-1)%10)/10)";
								$qry="SELECT * FROM balls WHERE BATSMAN LIKE '".$i1['inning1']."%' AND MATCH_ID='".$match."' AND OVER BETWEEN ".$f." AND ".$l."";
								$result = mysql_query($qry);	
								$row = mysql_fetch_assoc($result);
								$r=0;
								$e=0;
								$r+=$row['RUN'];
								$e+=$row['EXTRA'];
								$b=$row['BOWLER'];
								$i=1;
								while($row = mysql_fetch_assoc($result)){
									
									if($b!=$row['BOWLER']){
										$x=5*($r+$e);
										
										
										$x=$x.'px';
										
										
										echo '<li class="critical'.$i.'" style="height:'.$x.'"></li>';
										$i++;
										$r=$row['RUN'];
										$e=$row['EXTRA'];
										$b=$row['BOWLER'];
									}
									else
										$r+=$row['RUN']+$row['EXTRA'];
									
								}
								?>	<!--
								<li class="critical" style="height: 150px;">22</li>
								<li class="critical1" style="height: 80px;">7</li>
								<li class="critical2" style="height: 50px;">3</li>
								<li class="critical3" style="height: 90px;">8</li>
								<li class="critical4" style="height: 40px;">2</li>
									-->
					</ul>
					<span style='color:white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Runs / Overs</span>
					</td>
					</tr>
					</table>
				</div></td>
				</tr>
			</table>
			</td>
			
			<!--in1 bat ends-->
			<!--in1 bowl starts-->
			<td style='vertical-align:top;'>
                <table class="in1" cellspacing="10px">
                   <?php
				   //INNING 1 BOWLING
						$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning2."%'";
						//echo $qry." <br>";
						$result = mysql_query($qry);
						echo "<tr><td style='width:30%;background-color:#5d6a9a;' align='center'><img src='".$inning2.".jpg' height='50px' width='100px'></td><td colspan='7' style=';background-color:#5d6a9a;'><h2><b>".$team2."</b></h2></td></tr>";
						echo "<tr>
							<td style='background-color:#2b2937;color:#ffffff'><h2><b>Bowling<b></h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>O</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>M</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>R</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>W</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>E/R</h2></td>
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
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".(int)($row['OVER_BOWLED']/6).".".($row['OVER_BOWLED']%6)."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$count."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['RUN_CONCEDED']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['WICKET']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>";
									echo number_format((float)($row['RUN_CONCEDED']*6/$row['OVER_BOWLED']), 2, '.', '');
								echo "</h3></td></tr>";
							}
						}
					?>
				</table>
            
			
			<?php
					//Fall of wicket inning1
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					$string ="";
					$i=1;
					
					echo "<table class='in1'>";
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
					echo "</td>";
					echo "</tr></h3>";
					echo "</table>";
			?>
			</td>
			</tr>
			<tr>
				<td style='width:65%'>
				<!--inning 2 bat-->
				<table class="in2" style='border-collapse:seperate;width:100%;'>
				
				<?php
					//INNING 2 BATTING
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
					
					$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning2."%'";
					//echo $qry." <br>";
					$result = mysql_query($qry);
					echo "<tr style='width:100%;'><td style='width:30%;background-color:#5d6a9a;'align='center'><img src='".$inning2.".jpg' height='50px' width='100px'></td><td colspan='7' style='width:70%;background-color:#5d6a9a;'><h2><b>".$team2."</b></h2></td></tr>";
					echo "<tr>
							<td style='background-color:#2b2937;color:#ffffff'><h2><b>Batting<b></h2></td>
							<td style='background-color:#2b2937;color:#ffffff'></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>R</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>B</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>4s</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>6s</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>S/R</h2></td>
						</tr>";
					while($row=mysql_fetch_assoc($result)) {
						if($row['BALL_PLAYED']!=0) {
							echo "<tr id='batsmen' >
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td>";
									if($row['OUTS']!="")
									echo "<td style='background-color:#585858;color:#ffffff;'><h3>".$row['OUTS']."</h3></td>";
									else
									echo "<td style='background-color:#585858;color:#ffffff;'><h3>Not Out</h3></td>";
								echo"	<td style='background-color:#585858;color:#ffffff;'><h3>".$row['RUN_SCORED']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['BALL_PLAYED']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['FOURS']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>".$row['SIXES']."</h3></td>
									<td style='background-color:#585858;color:#ffffff;'><h3>";echo number_format((float)($row['RUN_SCORED']*100/$row['BALL_PLAYED']), 2, '.', '');
									echo "</h3></td>
								</tr>";
						} else {
							echo "<tr><td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td><td style='background-color:#585858;color:#ffffff;'></td></tr>";
						}
					}
				?>
                </table>
            
			<?php
					//printing score and extra
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						//echo "lkdjffldfjkd";
						$run+=$row['RUN'];
						$extra+=$row['EXTRA'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket+=1;}
					}
					echo "<table class='in2'>";
					echo "<tr><td colspan='7'></td></tr>";
					echo "<tr>";
							echo "<td colspan=7' style='background-color:#000000;color:#ffffff;width:1454px;'><h3>Extra - ".$extra."&nbsp;&nbsp;&nbsp;&nbsp;Score - ".$run."/".$wicket."</h3></td>";
					echo "</tr>";
					
			?>
			
			<tr style='width:100%;'>
				<td colspan=100>
				<br><br>
				<div id="vertgraph">
					
					<table border=1 style='background-color:black' width=910px>
					<tr>
					<td>
					<ul style='list-style-type: none;'>
					<br><br><?php
								$f=0;
								$l=500;
							//	$qry="SELECT (SUM(RUN)+SUM(EXTRA)) AS RUNS,(((OVER-1)-(OVER-1)%10)/10) AS OVER FROM `balls` WHERE OVER BETWEEN 0 AND 30 AND MATCH_ID='M1' GROUP BY (((OVER-1)-(OVER-1)%10)/10)";
								$qry="SELECT * FROM balls WHERE BATSMAN LIKE '".$i1['inning2']."%' AND MATCH_ID='".$match."' AND OVER BETWEEN ".$f." AND ".$l."";
								$result = mysql_query($qry);	
								$row = mysql_fetch_assoc($result);
								$r=0;
								$e=0;
								$r+=$row['RUN'];
								$e+=$row['EXTRA'];
								$b=$row['BOWLER'];
								$i=1;
								while($row = mysql_fetch_assoc($result)){
									
									if($b!=$row['BOWLER']){
										$x=5*($r+$e);
										
										
										$x=$x.'px';
										
										
										echo '<li class="critical'.$i.'" style="height:'.$x.'"></li>';
										$i++;
										$r=$row['RUN'];
										$e=$row['EXTRA'];
										$b=$row['BOWLER'];
									}
									else
										$r+=$row['RUN']+$row['EXTRA'];
									
								}
								?>	<!--
								<li class="critical" style="height: 150px;">22</li>
								<li class="critical1" style="height: 80px;">7</li>
								<li class="critical2" style="height: 50px;">3</li>
								<li class="critical3" style="height: 90px;">8</li>
								<li class="critical4" style="height: 40px;">2</li>
									-->
					</ul>
					<span style='color:white'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Runs / Overs</span>
					</td>
					</tr>
					</table>
				</div></td>
				</tr>
			
			</table>
			
			</td>
			<!--in2 bat ends-->
			<!--in2 bowl starts-->
			<td style='vertical-align:top;width:1560px;'>
                <table class="in2">
                   <?php
				   //INNING 1 BOWLING
						$qry = "SELECT * FROM plays_in P1,players P2 WHERE P1.PLAYER_ID=P2.PLAYER_ID AND P1.MATCH_ID='".$match."' AND P2.PLAYER_ID LIKE '".$inning1."%'";
						//echo $qry." <br>";
						$result = mysql_query($qry);
						echo "<tr ><td style='width:30%;background-color:#5d6a9a;' align='center'><img src='".$inning1.".jpg' height='50px'></td><td colspan='7' style='background-color:#5d6a9a;'><h2><b>".$team1."</b></h2></td></tr>";
						echo "<tr>
							<td style='background-color:#2b2937;color:#ffffff'><h2><b>Bowling<b></h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>O</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>M</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>R</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>W</h2></td>
							<td style='background-color:#2b2937;color:#ffffff'><h2>E/R</h2></td>
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
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['PLAYER_NAME']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".(int)($row['OVER_BOWLED']/6).".".($row['OVER_BOWLED']%6)."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$count."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['RUN_CONCEDED']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>".$row['WICKET']."</h3></td>
								<td style='background-color:#585858;color:#ffffff;'><h3>";
									echo number_format((float)($row['RUN_CONCEDED']*6/$row['OVER_BOWLED']), 2, '.', '');
								echo "</h3></td></tr>";
							}
						}
					?>
				</table>
            
			
			<?php
					//Fall of wicket inning1
					$run=0;$extra=0;$wicket=0;
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					//echo $qry."  jugal<br>";
					
					$result = mysql_query($qry);
					$string ="";
					$i=1;
					
					echo "<table class='in2'>";
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
					echo "</td>";
					echo "</tr></h3>";
					echo "</table>";
			?>
			</td>
			</tr>
			
			</table>
            
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