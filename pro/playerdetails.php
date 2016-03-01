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
			   <li class='active has-sub'><a href='#'><span>Teams</span></a>
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
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			<br><br><br>
			<?php
				$player=$_GET['id'];
				include('dbms.php');
				$qry = "SELECT * FROM players where PLAYER_ID='".$player."'";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$name=$row['PLAYER_NAME'];
				$name2=$row['PLAYER_ID'];
				$qry = "SELECT * FROM teams where TEAM_ID='".substr($player,0,3)."'";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$team=$row['TEAM_NAME'];
				echo "<table width=400 style='margin:auto'><tr><td style='text-align:center'><img style='height:140px;width:140px;border-radius:10px'src='images/".$name2.".jpg'></td></tr><tr><td style='text-align:center'><h1>".$name."</h1></td></tr><tr style='text-align:center'><td colspan = 2><h1 >".$team."<b></h1></td></tr></table>";
			?>
			<?php
				echo "<br><br>";
				echo "<div>";
						echo "<table id ='ajeeb' style='background-color:#2b2937;color:white;	margin:auto;width:80%'>";
							echo "<tr><td colspan='11'><h2>Batting Stats</h2></td></tr>";
						echo "</table>";
					echo "</div>";
				echo "<div>";
						echo "<table style='margin:auto;width:80%;text-align:center;background-color:#FFFFE0'>";
				//			echo "<tr><td colspan='11'><h2>Batting Stats</h2></td></tr>";
							echo '<tr>';
								echo "<td><h3><b>M</b></h3></td>";
								echo "<td><h3><b>Inn</b></h3></td>";
								echo "<td><h3><b>Runs</b></h3></td>";
								echo "<td><h3><b>HS</b></h3></td>";
								echo "<td><h3><b>Avg</b></h3></td>";
								echo "<td><h3><b>SR</b></h3></td>";
								echo "<td><h3><b>NO</b></h3></td>";
								echo "<td><h3><b>100</b></h3></td>";
								echo "<td><h3><b>50</b></h3></td>";
								echo "<td><h3><b>4s</b></h3></td>";
								echo "<td><h3><b>6s</b></h3></td>";
							echo '</tr>';
							
							$qry = "SELECT COUNT(*) AS M,SUM(RUN_SCORED) AS RUN,MAX(RUN_SCORED) AS HS,SUM(BALL_PLAYED) AS BALL,SUM(FOURS) AS FOUR,SUM(SIXES) AS SIX
							FROM plays_in 
							WHERE PLAYER_ID='".$player."'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$M = $row['M'];
							$RUNS = $row['RUN'];
							$HS = $row['HS'];
							$BALLS = $row['BALL'];
							$FOURS = $row['FOUR'];
							$SIXES = $row['SIX'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND BALL_PLAYED>0";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$INN = $row['CNT'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND OUTS <> ''";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$OUTS = $row['CNT'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND RUN_SCORED>=100";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$HUN = $row['CNT'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND RUN_SCORED<100 AND RUN_SCORED>=50";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$FIF = $row['CNT'];
							//echo $BALLS;
							echo "<tr>
									<td><h3><b>".$M."</b></h3></td>
									<td><h3><b>".$INN."</b></h3></td>
									<td><h3><b>".$RUNS."</b></h3></td>
									<td><h3><b>".$HS."</b></h3></td>";
									if($OUTS!=0)
									echo "<td><h3><b>".number_format((float)($RUNS/$OUTS), 2, '.', '')."</b></h3></td>";
									else 
									echo"<td><h3><b>".($RUNS)."</b></h3></td>";
									if($BALLS!=0)
									echo "<td><h3><b>".number_format((float)($RUNS*100/$BALLS), 2, '.', '')."</b></h3></td>";
									else 
									echo"<td><h3><b>".($RUNS*100)."</b></h3></td>";
									echo "<td><h3><b>".($INN-$OUTS)."</b></h3></td>
									<td><h3><b>".$HUN."</b></h3></td>
									<td><h3><b>".$FIF."</b></h3></td>
									<td><h3><b>".$FOURS."</b></h3></td>
									<td><h3><b>".$SIXES."</b></h3></td>
								</tr>";
						echo "</table>";
					echo "</div>";
			?>
			
			<?php
				echo "<br><br>";
				echo "<div class='CSSTableGenerator'>";
						echo "<table id='ajeeb' style='margin:auto;width:80%;color:white;background-color:#2b2937' 	>";
							echo "<tr><td colspan='11'><h2>Bowling Stats</h2></td></tr>";
						echo "</table>";
					echo "</div>";
				echo "<div class='CSSTableGenerator'>";
						echo "<table style='margin:auto;width:80%;text-align:center;background-color:#FFFFE0'>";
				//			echo "<tr><td colspan='11'><h2>Batting Stats</h2></td></tr>";
							echo '<tr>';
								echo "<td><h3><b>M</b></h3></td>";
								echo "<td><h3><b>Inn</b></h3></td>";
								echo "<td><h3><b>Balls</b></h3></td>";
								echo "<td><h3><b>Runs</b></h3></td>";
								echo "<td><h3><b>Wkts</b></h3></td>";
								echo "<td><h3><b>Econ</b></h3></td>";
								echo "<td><h3><b>Avg</b></h3></td>";
								echo "<td><h3><b>SR</b></h3></td>";
								echo "<td><h3><b>5W</b></h3></td>";
								echo "<td><h3><b>10W</b></h3></td>";
							echo '</tr>';
							
							$qry = "SELECT COUNT(*) AS M,SUM(OVER_BOWLED) AS BALL ,SUM(RUN_CONCEDED) AS RUN,
							SUM(WICKET) AS WKTS ,AVG(RUN_CONCEDED) AS AVG
							FROM plays_in 
							WHERE PLAYER_ID='".$player."'";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$M = $row['M'];
							$RUNS = $row['RUN'];
							$WKTS = $row['WKTS'];
							$BALLS = $row['BALL'];
							$AVG = $row['AVG'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND OVER_BOWLED>0";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$INN = $row['CNT'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND WICKET>=5 AND WICKET<10";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$W1 = $row['CNT'];
							
							$qry = "SELECT COUNT(*) AS CNT
							FROM plays_in 
							WHERE PLAYER_ID='".$player."' AND WICKET>=10";
							$result=mysql_query($qry);
							$row=mysql_fetch_assoc($result);
							$W2 = $row['CNT'];
							
							//echo $BALLS;
							echo "<tr>
									<td><h3><b>".$M."</b></h3></td>
									<td><h3><b>".$INN."</b></h3></td>
									<td><h3><b>".(int)($BALLS)."</b></h3></td>
									<td><h3><b>".$RUNS."</b></h3></td>
									<td><h3><b>".$WKTS."</b></h3></td>";
									if($BALLS!=0)
									echo "<td><h3><b>".number_format((float)($RUNS*6/$BALLS), 2, '.', '')."</b></h3></td>";
									else 
									echo"<td><h3><b>".($RUNS*6)."</b></h3></td>";
									echo "<td><h3><b>".number_format((float)($AVG))."</b></h3></td>";
									
									if($WKTS!=0)
									echo "<td><h3><b>".number_format((float)($BALLS/$WKTS), 2, '.', '')."</b></h3></td>";
									else 
									echo "<td><h3><b>".($BALLS)."</b></h3></td>";
									echo "<td><h3><b>".$W1."</b></h3></td>
									<td><h3><b>".$W2."</b></h3></td>
								</tr>";
						echo "</table>";
					echo "</div>";
			?>
			
			<?php
			include('main_foot.php')?>