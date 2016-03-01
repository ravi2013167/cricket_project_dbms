<!DOCTYPE HTML>
<?php
function over_form($stat,$in,$ab){	echo "<form name='overs' action='".$stat."_match.php'' method='get'>
							<tr class='".$ab."team'><td colspan=2>
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
			<table width=100% height=100% style="padding:30px 30px 30px 30px;cell-spacing:30px;">
				<tr>
					<td class='mi1'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Runs Scored<strong></td></tr>
						
							<?php
							$qry="SELECT SCORE_RUN,TEAM_NAME FROM plays,teams WHERE teams.TEAM_ID=plays.TEAM_ID AND MATCH_ID='M1'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('runs','IND','a');
							$ind_score=$row['SCORE_RUN'];
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['SCORE_RUN']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('runs','PAK','b');
							$pak_score=$row['SCORE_RUN'];
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['SCORE_RUN']."</td></tr>
							<tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
					</td>
					
					<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Fours<strong></td></tr>
							
							<?php
							$qry="SELECT SUM(FOURS) AS FR FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('fours','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['FR']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(FOURS) AS FR FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('fours','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['FR']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>

					</td>
					
					<td class='mi3'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Sixes<strong></td></tr>
							
							<?php
							$qry="SELECT SUM(SIXES) AS SX FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('sixes','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['SX']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(SIXES) AS SX FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('sixes','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['SX']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>					
						
					</td>
				</tr>
				<tr>
					<td class='mi1'>
					<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Strike rate<strong></td></tr>
						
							<?php
							$qry="SELECT SUM(OVER_BOWLED) AS OB FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('strike_rate','IND','a');
							$ind_bowl=$row['OB'];
							if($ind_bowl==0)$ind_bowl=1;
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".(($ind_score/$ind_bowl)*100)."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(OVER_BOWLED) AS OB FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td >PAKISTAN</td></tr>";
							over_form('strike_rate','PAK','b');
							$pak_bowl=$row['OB'];
							if($pak_bowl==0)$pak_bowl=1;
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".(($pak_score/$pak_bowl)*100)."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
						</td>
						<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Wickets<strong></td></tr>
							
							<?php
							$qry="SELECT SUM(WICKET) AS W FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('wickets','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(WICKET) AS W FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('wickets','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
					</td>
					<td class='mi3'>
					<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Economy<strong></td></tr>
						
							<?php
							$qry="SELECT SUM(OVER_BOWLED) AS OB FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('economy','IND','a');
							$ind_bowl=$row['OB'];
							if($ind_bowl==0)$ind_bowl=1;
							$pak_bowl=$row['OB'];
							if($pak_bowl==0)$pak_bowl=1;
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".(($pak_score/$ind_bowl)/6)."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(OVER_BOWLED) AS OB FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td >PAKISTAN</td></tr>";
							over_form('economy','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".(($ind_score/$pak_bowl)/6)."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
						</td>
				</tr>
				<tr>
					<td class='mi1'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Catches<strong></td></tr>
							
							<?php
							$qry="SELECT COUNT(*) AS W FROM plays_in WHERE MATCH_ID='M1' AND `PLAYER_ID` LIKE 'I%' AND OUTS LIKE '%c %' 
GROUP BY (SUBSTR(OUTS,11,14))";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('catches','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT COUNT(*) AS W FROM plays_in WHERE MATCH_ID='M1' AND PLAYER_ID LIKE 'P%'  AND OUTS LIKE '%c %'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('catches','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
					</td>
					<td class='mi2'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Maiden<strong></td></tr>
							
							<?php
							$qry="SELECT COUNT(*) AS W FROM 
							(SELECT * FROM balls where MATCH_ID='M1' AND BATSMAN LIKE 'P%' 
							GROUP BY ((OVER-1)-(OVER-1)%10)/10 HAVING (SUM(RUN)+SUM(EXTRA))=0 AND COUNT(OVER)=6) MAIDEN";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('maidens','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT COUNT(*) AS W FROM 
							(SELECT * FROM balls where MATCH_ID='M1' AND BATSMAN LIKE 'I%' 
							GROUP BY ((OVER-1)-(OVER-1)%10)/10 HAVING (SUM(RUN)+SUM(EXTRA))=0 AND COUNT(OVER)=6) MAIDEN";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('maidens','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['W']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							?>
						</table>
					<td class='mi3'>
						<table class='tb' width=90% height=90% style="text-align:center;">
							<tr><td style="font-size:20px;'color:#A79787;background-color:blue;" colspan=2><strong>Extras<strong></td></tr>
							
							<?php
							$qry="SELECT SUM(EXTRA) AS EX FROM balls WHERE MATCH_ID='M1' AND BATSMAN LIKE 'I%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							echo "<tr><td class='active2 poola' width=50%><a>INDIA</a></td><td width=50% class='poolb'><a>PAKISTAN</a></td></tr>";
							over_form('extras','IND','a');
							echo "<tr class='ateam'><td class='ans' colspan=2><div class='answer'>".$row['EX']."</div></td></tr><tr class='ateam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
							$qry="SELECT SUM(EXTRA) AS EX FROM balls WHERE MATCH_ID='M1' AND BATSMAN LIKE 'P%'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							//echo "<tr><td>PAKISTAN</td></tr>";
							over_form('extras','PAK','b');
							echo "<tr class='bteam'><td class='ans' colspan=2><div class='answer'>".$row['EX']."</div></td></tr><tr class='bteam'><td colspan=2><input type='submit' value='query'>
							</form></td></tr>";
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