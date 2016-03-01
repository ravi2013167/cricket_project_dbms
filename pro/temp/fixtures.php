<!DOCTYPE HTML>
<html>
	<head>
		<style>
	.CSSTableGenerator {
	margin:0px;padding:0px;
	width:100%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.CSSTableGenerator table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}.CSSTableGenerator tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.CSSTableGenerator table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.CSSTableGenerator table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.CSSTableGenerator tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}
.CSSTableGenerator td{
	vertical-align:middle;
	
	background-color:#cccccc;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:7px;
	font-size:25px;
	font-family:Arial;
	font-weight:normal;
	height:50px;
	color:#000000;
}.CSSTableGenerator tr:last-child td{
	border-width:0px 1px 0px 0px;
}.CSSTableGenerator tr td:last-child{
	border-width:0px 0px 1px 0px;
}.CSSTableGenerator tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.CSSTableGenerator tr:first-child td{
		background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);

	background-color:#003366;
	border:0px solid #ffffff;
	text-align:left;
	border-width:0px 0px 1px 1px;
	font-size:14px;
	font-family:Arial;
	font-weight:bold; 	
	color:#ffffff;
}
.CSSTableGenerator tr:first-child:hover td{
	background:-o-linear-gradient(bottom, #003366 5%, #003f7f 100%);	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #003366), color-stop(1, #003f7f) );
	background:-moz-linear-gradient( center top, #003366 5%, #003f7f 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr="#003366", endColorstr="#003f7f");	background: -o-linear-gradient(top,#003366,003f7f);

	background-color:#003366;
}
.CSSTableGenerator tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
	
}
.CSSTableGenerator tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.text_line {
    clear: both;
    margin-bottom: 2px;
}
		</style>
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
			<br><br><br><br>
			<table style="background-color:#003366;width:1425px;"><tr><td><h1 style="color:#FF9900;margin:20px;float:left;"><b>FIXTURES<b></h1></td></tr></table>
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
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
					echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo '<tr>';
								echo "<td colspan='4'><h3>".$inning1." Vs ".$inning2." (".$row['VENUE'].") - ".$shedule."</h3></td>";
							echo '</tr>';
							if(strlen($inning1)>3) {
								$inning1="TBD";
								$inning2="TBD";
							}
							echo '<tr>';
								echo "<td><b><img src='flags/".$inning1.".jpg' height='60px' width='70px'>";
								echo "<td>vs</td>";
								echo "<td><b><img src='flags/".$inning2.".jpg' height='60px' width='70px'>";
								echo "<td rowspan='2' style='width:700px;'><b>".$description." <b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td><b>".$run1."/".$wicket1."</b></td>";
								echo "<td style='width:200px;'><b><a href='scorecard.php?id=".$match."'>DETAILS</a></b></td>";
								echo "<td><b>".$run2."/".$wicket2."</b></td>";
							echo '</tr>';
						echo "</table>";
					echo "</div>";
			?>
					<br><br><br>
				
		</div>
		<script src="jq.js" type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
		<script src="slider.js" type="text/javascript"></script>
		<script src="upcom.js" type="text/javascript"></script>
	</body>
</html>