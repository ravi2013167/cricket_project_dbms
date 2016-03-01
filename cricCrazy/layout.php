<!DOCTYPE HTML>
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
			   <li class='active fix'><a href='#'><span>Home</span></a></li>
			   <li class='has-sub'><a href='#'><span>Teams</span></a>
				  <ul>
					 <li class='fix2'><a href='#'><span>India</span></a></li>
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
			<div id='img'>
				<div id='imgshow'></div>
				<div id='points'>
				<table class='table' style='height:400px;width:100%;'>
				<tr><td class='poola' colspan=1><a>Pool A</a></td><td colspan=50% class='poolb'><a>Pool B</a></td></tr>
				<tr style='color:#A79787;'><td>Teams</td><td>PL</td><td>PTS</td></tr>
				
			<?php
			//include('dbms.php');
			$qry="SELECT * FROM teams WHERE POOL='A'";
			
			$result=mysql_query($qry);
			
			echo "";
			while($row=mysql_fetch_assoc($result))
			{	
				$qry2="SELECT COUNT(*) AS PL, TEAM1, TEAM2 FROM MATCHES WHERE RESULT_DESCRIPTION IS NOT NULL GROUP BY TEAM1, TEAM2 HAVING TEAM1='".$row["TEAM_ID"]."' OR TEAM2='".$row["TEAM_ID"]."'";
				$result2=mysql_query($qry2);
				$row2=mysql_fetch_assoc($result2);
				if($row2['PL'] == NULL){
					$row2['PL']=0;
				}
				echo "<tr class='ateam'><td>".$row['TEAM_ID']."</td><td>".$row2['PL']."</td><td>".$row['POINTS']."</td></tr>";
			}
			?>
			<tr class="cteam"><td></td><td></td><td></td></tr>
			<?php
			//include('dbms.php');
			$qryy="SELECT * FROM teams WHERE POOL='B'";
			$resultt=mysql_query($qryy);
			while($row=mysql_fetch_assoc($resultt))
			{	
				$qry2="SELECT COUNT(*) AS PL, TEAM1, TEAM2 FROM MATCHES WHERE RESULT_DESCRIPTION IS NOT NULL GROUP BY TEAM1, TEAM2 HAVING TEAM1='".$row["TEAM_ID"]."' OR TEAM2='".$row["TEAM_ID"]."'";
				$result2=mysql_query($qry2);
				$row2=mysql_fetch_assoc($result2);
				if($row2['PL'] == NULL){
					$row2['PL']=0;
				}
				echo "<tr class='bteam'><td>".$row['TEAM_ID']."</td><td>".$row2['PL']."</td><td>".$row['POINTS']."</td></tr>";
			}
			?>
			</table>
				</div>
			</div>
			<br>
			<div id="play">
				<div id="match"></div>
				<div id="score"></div>
			</div>
			<br>
			<div id="highs">
				<div id="high1"></div>
				<div id="high2"></div>
				<div id="high3"></div>
				<div id="high4"></div>
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
	</body>
</html>