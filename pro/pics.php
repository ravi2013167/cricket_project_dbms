<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
		<script type="text/javascript" src="js/fotorama.js"></script>
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
			   <li class='fix'><a href='fixtures.php'><span>Fixtures</span></a></li>
			   <li class='fix'><a href='stats.php'><span>Stats</span></a></li>
			   <li class='active fix'><a href='pics.php'><span>Pics</span></a></li>
			   <li class='fix'><a href='points_table.php'><span>Points Table</span></a></li>
			   <li class='fix'><a href='contactus.php'><span>Contact</span></a></li>
			</ul>
			</div>
			
				<br>

		<br>	
			<center>
			<table id='gall' width=95%>		
			  <tr><td ><img class='yo' src="images/11.jpg"></td><td>
			    <img class='yo' src="images/1.jpg"></td><td>
			    <img class='yo' src="images/2.jpg"></td></tr>
			  <tr><td>
			    <img class='yo' src="images/3.jpg"></td><td>
			    <img class='yo' src="images/4.jpg"></td><td>
			    <img class='yo' src="images/5.jpg"></td></tr>
			  <tr><td>
			    <img class='yo' src="images/6.jpg"></td><td>
			    <img class='yo' src="images/7.jpg"></td><td>
			    <img class='yo' src="images/8.jpg"></td></tr>
			  <tr><td>
			    <img class='yo' src="images/12.jpg"></td><td>
			    <img class='yo' src="images/9.jpg"></td><td>
			    <img class='yo' src="images/10.jpg"></td></tr>
			  </table>
			  </center>
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