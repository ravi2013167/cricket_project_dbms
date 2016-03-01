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
			<br><br>
			<table ><tr><td><center><h1><b>FIXTURES</center><b></h1></td></tr></table>
			<?php
					$match='M1';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M2';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head2">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M3';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head3">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M4';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head" style="background-color:#20B2AA">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M5';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head" style="background-color:#ADFF2F">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M6';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					
					//printing score and extra
					if($toss=="") {
						$inning1 = $team1;
						$inning2 = $team2;
					}
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;' >";
							echo '<tr id="fix_head" style="background-color:#FFD700">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M7';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($inning1==""|| $inning2=="") {	
						$inning1="Semifinal-1 (Pool-1)";
						$inning2="Semifinal-2 (Pool-2)";
					}
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;'>";
							echo '<tr id="fix_head" style="color:white;background-color:#9932CC">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M8';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($inning1=="") $inning1="Semifinal-3 (Pool-1)";
					if($inning2=="") $inning2="Semifinal-4 (Pool-2)";
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;'>";
							echo '<tr id="fix_head" style="color:white;background-color:#8A2BE2">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
			<?php
					$match='M9';
					include('dbms.php');
					$qry = "SELECT * FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$description="";
					if($row['RESULT_DESCRIPTION']!="") {
						$description=$row['RESULT_DESCRIPTION'];//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px'><center><b>".$row['RESULT_DESCRIPTION']."<b></center></h1>";
					} else if($row['TOSS']!=""){
						$description="Live";//echo "<h1 style='background-color:#642EFE;height:50px;padding:10px;'><center><b>Live<b></center></h1>";
					} else {
						$description="Yet To Be Played";
					}
					
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
					//echo $inning1." ".$inning2." ".$toss." ".$decision." <br>";
					if($inning1=="") $inning1="final-1 ";
					if($inning2=="") $inning2="final-2 ";
					//printing score and extra
					$run1=0;$wicket1=0;
					$run2=0;$wicket2=0;
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning1."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run1+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket1+=1;}
					}
					
					$qry = "SELECT * FROM balls WHERE MATCH_ID='".$match."' AND BATSMAN LIKE '".$inning2."%'";
					$result = mysql_query($qry);
					while($row = mysql_fetch_assoc($result)) {
						$run2+=$row['RUN'];
						if($row['WICKET']!="") { //echo $row['WICKET']."<br>";
						$wicket2+=1;}
					}
					
					$qry = "SELECT VENUE,DAYNAME(DATE) AS D,MONTHNAME(DATE) AS M,YEAR(DATE) AS Y FROM matches WHERE MATCH_ID='".$match."'";
					$result = mysql_query($qry);
					$row=mysql_fetch_assoc($result);
					$day = $row['D'];
					$month = $row['M'];
					$year = $row['Y'];
					$shedule = $day." ".$month." ".$year;
					echo "<br><br><br>";
					echo "<div>";
						echo "<table style = 'width:90%;margin:auto;text-align:center;'>";
							echo '<tr id="fix_head" style="color:white;background-color:#000000">';
								echo "<td colspan='4'><h3>".$inning1." vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr style="background-color:#E0FFFF">';
								echo "<td><b><img src='".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr style='background-color:#E0FFFF'>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a class='fixture' href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
					<br><br><br>
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