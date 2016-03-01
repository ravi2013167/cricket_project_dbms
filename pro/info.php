<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
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
			   <li class='active fix'><a href='info.php'><span>ICC Cricket World Cup 2015</span></a></li>
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
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			<br><br>
			<table   height=1000px width=100% id='info'>
			<tr><td colspan=3 width=40% style='text-align:center;'><img width=70% style='border-radius:15px;' height=70% src='images/2015_Cricket_World_Cup_Logo.svg.png'></img></td>
			<td colspan=3 style='font-size:24px;font-family:tahoma;'><center><strong>ICC Cricket World Cup 2015</strong></center><ul><li>A World Cup hosted By India, played between 6 teams, India, Australia, Pakistan, Sri Lanka, New Zealand and South Africa.<br><br></li><li>
			Teams are divided into two pools A and B each consisting of three teams India, Australia, Pakistan are in Pool A while Sri Lanka, New Zealand and South Africa are in Pool B.<br><br></li><li> Total of 9 matches would be played in the tournament 3 in each pool, 2 semi finals and a final.<br><br></li><li>The matches would be 50 overs long.<br><br></li><li>The top two teams of pool stages  after playing against each other team of their respective pool would qualify to the semis.<br><br></li></ul>
			</td></tr>
			<tr height=10%><td colspan=6  style='font-size:24px;font-family:tahoma;'><strong>Participating teams - </strong></td></tr>
			<tr height=30% id='teaam'><td width=10%><img src='images/AUS.jpg'><br>Australia</td><td width=20%><img src='images/IND.jpg'><br>India</td><td width=20%><img src='images/NWZ.jpg'><br>New Zealand</td><td><img src='images/SRI.jpg'><br>Sri Lanka</td><td><img src='images/RSA.jpg'><br>South Africa</td><td style='width:20%;'><img src='images/PAK.jpg'><br>Pakistan</td></tr>
			
			</table>
			
<?php
include('main_foot.php');
?>