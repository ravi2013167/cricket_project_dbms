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
			   <li class='fix'><a href='stats.php'><span>Stats</span></a></li>
			   <li class='fix'><a href='pics.php'><span>Pics</span></a></li>
			   <li class='active fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			<br><br>
			<table  class="ter" width=100% height=500px; style="text-align:center;">
				<tr>
					<td  style="border-bottom:2pt solid darkblue;"><b>Pool A</b></td>
				</tr>
				
				<tr style="color:#848484;">
					<td>Pos.</td>
					<td>Team</td>
					<td>Matches</td>
					<td>Won</td>
					<td>Lost</td>
					<td>Tied/NR</td>
					<td>Points</td>
					
				</tr>
				
					<?php
							include('dbms.php');
							$qry="SELECT TEAM_ID FROM teams WHERE POOL='A' ORDER BY POINTS DESC";
							$i=1;
							$result=mysql_query($qry);
							while($row=mysql_fetch_assoc($result))
							{	
						
								if($i<=2)
								echo "<tr style='background-color:lightblue'>";
								else
								echo "<tr>";
								//position
								echo '<td>'.$i++.'</td>';
								//team name	
								$qry2="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM_ID']."'";
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);
								$var = $row2['TEAM_ID'].'.jpg';
								echo "<td><table width=100%><tr><td width=40%><img src=$var style='height:40px;width:40px;float:left;margin-left:10px;'></img></td><td><span style='float:left;vertical-align:middle;'>".$row2['TEAM_NAME'].'</span></td></tr></table></td>';
								//query for team1 matches
								$qry2="SELECT COUNT(*) AS PL, TEAM1 FROM MATCHES WHERE WINNER IS NOT NULL GROUP BY TEAM1 HAVING TEAM1='".$row["TEAM_ID"]."'";
								
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);
								if($row2['PL'] == NULL){
									$row2['PL']=0;
								}
								//query for team2 matches
								$qry2="SELECT COUNT(*) AS PL, TEAM2 FROM MATCHES WHERE WINNER IS NOT NULL GROUP BY TEAM2 HAVING TEAM2='".$row["TEAM_ID"]."'";
								$result2=mysql_query($qry2);
								$row3=mysql_fetch_assoc($result2);
								if($row3['PL'] == NULL){
									$row3['PL']=0;
								}
								
								$cnt_matches=$row2['PL']+$row3['PL'];
								echo "<td>".$cnt_matches."</td>";
								
								$qry2="SELECT COUNT(*) AS PL FROM MATCHES WHERE WINNER ='".$row["TEAM_ID"]."'";
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);
								if($row2['PL'] == NULL){
									$row2['PL']=0;
								}
								//matches won
								echo "<td>".$row2['PL']."</td>";
								//query for team1 nr
								$qrynr1="SELECT COUNT(*) AS PL, TEAM2 FROM MATCHES WHERE WINNER = 'TIE' OR WINNER = 'NR' GROUP BY TEAM2 HAVING TEAM2='".$row["TEAM_ID"]."'";
								$resultnr=mysql_query($qrynr1);
								$rownr1=mysql_fetch_assoc($resultnr);
								$tie=0;
								$tie+=$rownr1['PL'];
								//query for team2 nr
								$qry4="SELECT COUNT(*) AS PL, TEAM1 FROM MATCHES WHERE WINNER = 'TIE' OR WINNER = 'NR' GROUP BY TEAM1 HAVING TEAM1='".$row["TEAM_ID"]."'";
								
								$resultnr=mysql_query($qry4);
								$rownr1=mysql_fetch_assoc($resultnr);
								$tie+=$rownr1['PL'];
								
								$cnt=$row2['PL']*2 + $tie;
								$cnt_loss=$cnt_matches-$row2['PL']-$tie;
								echo "<td>".$cnt_loss."</td>";
								echo "<td>".$tie."</td>";
								
								echo "<td>".$cnt."</td></tr>";
								
							}
					?>
				</tr>
			</table>
			<br><br><br><br>
			<table class="ter"  width=100% height=500px; style="text-align:center;">
				<tr>
					<td style="border-bottom:2pt solid darkblue;"><b>Pool B</b></td>
				</tr>
				<tr style="color:#848484">
					<td>Pos.</td>
					<td>Team</td>
					<td>Matches</td>
					<td>Won</td>
					<td>Lost</td>
					<td>Tied/NR</td>
					<td>Points</td>
				</tr>
				
					<?php
							include('dbms.php');
							$qry="SELECT TEAM_ID FROM teams WHERE POOL='B' ORDER BY POINTS DESC";
							$i=1;
							$result=mysql_query($qry);
							while($row=mysql_fetch_assoc($result))
							{	
							
								if($i<=2)
								echo "<tr style='background-color:lightblue'>";
								else
								echo "<tr>";
								//position
								echo '<td>'.$i++.'</td>';
								//team name
								$qry2="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM_ID']."'";
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);		
								$var = $row2['TEAM_ID'].'.jpg';
								echo "<td><table width=100%><tr><td width=40%><img src=$var style='height:40px;width:40px;float:left;margin-left:10px;'></img></td><td><span style='float:left;vertical-align:middle;'>".$row2['TEAM_NAME'].'</span></td></tr></table></td>';
								
								//query for team1 matches
								$qry2="SELECT COUNT(*) AS PL, TEAM1 FROM MATCHES WHERE WINNER IS NOT NULL GROUP BY TEAM1 HAVING TEAM1='".$row["TEAM_ID"]."'";
								
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);
								if($row2['PL'] == NULL){
									$row2['PL']=0;
								}
								//query for team2 matches
								$qry2="SELECT COUNT(*) AS PL, TEAM2 FROM MATCHES WHERE WINNER IS NOT NULL GROUP BY TEAM2 HAVING TEAM2='".$row["TEAM_ID"]."'";
								$result2=mysql_query($qry2);
								$row3=mysql_fetch_assoc($result2);
								if($row3['PL'] == NULL){
									$row3['PL']=0;
								}
								
								$cnt_matches=$row2['PL']+$row3['PL'];
								echo "<td>".$cnt_matches."</td>";
								
								$qry2="SELECT COUNT(*) AS PL FROM MATCHES WHERE WINNER ='".$row["TEAM_ID"]."'";
								$result2=mysql_query($qry2);
								$row2=mysql_fetch_assoc($result2);
								if($row2['PL'] == NULL){
									$row2['PL']=0;
								}
								//matches won
								echo "<td>".$row2['PL']."</td>";
								//query for team1 nr
								$qrynr1="SELECT COUNT(*) AS PL, TEAM2 FROM MATCHES WHERE WINNER = 'TIE' OR WINNER = 'NR' GROUP BY TEAM2 HAVING TEAM2='".$row["TEAM_ID"]."'";
								$resultnr=mysql_query($qrynr1);
								$rownr1=mysql_fetch_assoc($resultnr);
								$tie=0;
								$tie+=$rownr1['PL'];
								//query for team2 nr
								$qry4="SELECT COUNT(*) AS PL, TEAM1 FROM MATCHES WHERE WINNER = 'TIE' OR WINNER = 'NR' GROUP BY TEAM1 HAVING TEAM1='".$row["TEAM_ID"]."'";
								
								$resultnr=mysql_query($qry4);
								$rownr1=mysql_fetch_assoc($resultnr);
								$tie+=$rownr1['PL'];
								
								$cnt=$row2['PL']*2 + $tie;
								$cnt_loss=$cnt_matches-$row2['PL']-$tie;
								echo "<td>".$cnt_loss."</td>";
								echo "<td>".$tie."</td>";
								echo "<td>".$cnt."</td></tr>";
								
							}
					?>
					</tr>
			</table>
			<?php
			include('main_foot.php')?>
										<a  style='text-decoration:none;' href='live.php?ing=".$i1['inning1']."&stat=runs&ing2=".$i1['inning2']."&m_id=".$match."&over_start=0&ball_start=0&over_end=50&ball_end=0'>;