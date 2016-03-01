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
			<br>
			<div id='sq'>
				<table  width=100% height=100% >
				<?php
				$team = $_GET['id'];
				$qry="SELECT PLAYER_ID,PLAYER_NAME,SKILLS,AGE FROM players WHERE TEAM_ID='".$team."'";
				$qry2="SELECT CAPTAIN, WICKET_KEEPER FROM teams WHERE TEAM_ID='".$team."'";
				$result=mysql_query($qry);
				$resultt=mysql_query($qry2);
				$row2=mysql_fetch_assoc($resultt);
				$cap=$row2['CAPTAIN'];
				$wkt=$row2['WICKET_KEEPER'];
				$i=0;
				while($row=mysql_fetch_assoc($result))
				{	if($i%3==0)
					{
						echo "</tr>
						<td><div class='sq1'><table class='ind'><tr><td class='ind'rowspan='8'><a href='playerdetails.php?id=".$row['PLAYER_ID']."'><img id='translucent' src='images/".$row['PLAYER_ID'].".jpg' class='imsq'></a></td><td style='font-size:20px'><b>".$row['PLAYER_NAME']."</b></td></tr><tr>";
						if($cap==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Captain </td></tr>";
						}
						if($wkt==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Wicket Keeper</td></tr>";
						}
						echo "<tr><td><b>Skills</b>: ".$row['SKILLS']."</td></tr><tr></tr>
						<tr><td><b>Age: </b>".$row['AGE']."</td></tr><tr></tr></table></div></td>";
					}
					else if($i%3==1)
					{
						echo "<td><div class='sq2'><table class='ind'><tr><td  class='ind' rowspan='8'><a href='playerdetails.php?id=".$row['PLAYER_ID']."'><img src='images/".$row['PLAYER_ID'].".jpg' class='imsq'></a></td><td style='font-size:20px'><b>".$row['PLAYER_NAME']."</b></td></tr>";
						if($cap==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Captain </td></tr>";
						}
						
						if($wkt==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Wicket Keeper</td></tr>";
						}
						echo "<tr><td><b>Skills</b>: ".$row['SKILLS']."</td></tr><tr></tr>
						<tr><td><b>Age: </b>".$row['AGE']."</td></tr><tr></tr></table></div></td>";
					}
					else
					{
						echo "	<td><div class='sq3'><table class='ind'><tr><td  class='ind' rowspan='8'><a href='playerdetails.php?id=".$row['PLAYER_ID']."'><img src='images/".$row['PLAYER_ID'].".jpg' class='imsq'></a></td><td style='font-size:20px'><b>".$row['PLAYER_NAME']."</b></td></tr><tr>";
						if($cap==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Captain </td></tr>";
						}
						
						if($wkt==$row['PLAYER_ID']){
						echo "<tr><td style='font-size:20px'>Wicket Keeper</td></tr>";
						}
						echo "<tr><td><b>Skills</b>: ".$row['SKILLS']."</td></tr><tr></tr>
						<tr><td><b>Age: </b>".$row['AGE']."</td></tr></table><tr></tr></div></td>";
					}
					$i++;
				}
				?>
				</tr>
					
				</table>
			</div>	
			
			<br><br><br>

			<div id="gototop">
				<img style="border-radius:10px;float:right;height:40px;"id="top" src="images/images.png"></img>
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