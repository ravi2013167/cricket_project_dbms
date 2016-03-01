<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Fluid CSS3 Slideshow with Parallax Effect" />
        <meta name="keywords" content="fluid, css3, css-only, slideshow, responsive, parallax, sibling, pseudo-class, transitions" />
        <meta name="author" content="Codrops" />
        
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css'>
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
			   session_start();
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
					 <li class='fix2'><a href='squads.php?id=IND'><span>India</span></a></li>
					<li class='fix2'><a href='squads.php?id=AUS'><span>Australia</span></a></li>
					<li class='fix2'><a href='squads.php?id=PAK'><span>Pakistan</span></a></li>
					<li class='fix2'><a href='squads.php?id=NWZ'><span>New Zealand</span></a></li>
					<li class='fix2'><a href='squads.php?id=RSA'><span>South Africa</span></a></li>
					<li class='fix2'><a href='squads.php?id=SRI'><span>Sri Lanka</span></a></li>
				  </ul>
			   </li>
			   <li class='fix'><a href='fixtures.php'><span>Fixtures</span></a></li>
			   <li class='fix'><a href='#'><span>Stats</span></a></li>
			   <li class='fix'><a href='#'><span>Pics</span></a></li>
			   <li class='fix'><a href='#'><span>Points Table</span></a></li>
			   <li class='fix'><a href='#'><span>Tournament Insights</span></a></li>
			   <li class='fix'><a href='#'><span>Contact</span></a></li>
			</ul>
			</div>
			
				<br>
				<table id='imge'>
					<tr id='imgshow'>
						<td id="imagg" width=74.5%>
								
							<div align="middle" class="container">
							
								
								<div class="sp-slideshow">
								
									<input id="button-1" type="radio" name="radio-set" class="sp-selector-1" checked="checked" />
									<label for="button-1" class="button-label-1"></label>
									
									<input id="button-2" type="radio" name="radio-set" class="sp-selector-2" />
									<label for="button-2" class="button-label-2"></label>
									
									<input id="button-3" type="radio" name="radio-set" class="sp-selector-3" />
									<label for="button-3" class="button-label-3"></label>
									
									<input id="button-4" type="radio" name="radio-set" class="sp-selector-4" />
									<label for="button-4" class="button-label-4"></label>
									
									<input id="button-5" type="radio" name="radio-set" class="sp-selector-5" />
									<label for="button-5" class="button-label-5"></label>
									
									<label for="button-1" class="sp-arrow sp-a1"></label>
									<label for="button-2" class="sp-arrow sp-a2"></label>
									<label for="button-3" class="sp-arrow sp-a3"></label>
									<label for="button-4" class="sp-arrow sp-a4"></label>
									<label for="button-5" class="sp-arrow sp-a5"></label>
									
									<div class="sp-content" >
										<div class="sp-parallax-bg"></div>
										<ul class="sp-slider clearfix" >
											<li><img style="height:300;width:100%;"src="images/image1.png" alt="image01" /></li>
											<li><img src="images/10669189_700971173330533_8645528372851834788_o.jpg" alt="image02" /></li>
											<li><img src="images/image3.png" alt="image03" /></li>
											<li><img src="sachin_tendulkar_god_of_cricket-2880x1800.jpg" alt="image04" /></li>
											<li><img src="sachin_tendulkar_god_of_cricket-2880x1800.jpg" alt="image05" /></li>
										</ul>
									</div><!-- sp-content -->
									
								</div><!-- sp-slideshow -->
								
							</div>
								<!--<img id="1" src="" ></img>
								<img id="2" src="AUS2.jpg"></img>
								<img id="3" src="funny-quotes-wallpaper-hd-wallpaper-508650241.jpg"></img>
								</div>-->
						</td>
						<td id="points" colspan=2>
								<table class='table' style='height:460px;width:100%;'>
									<tr>
										<td class='active2 poola' colspan=1><a>Pool A</a></td>
										<td colspan=50% class='poolb'><a>Pool B</a></td>
									</tr>
									<tr style='color:#A79787;'>
										<td>Teams</td>
										<td>PL</td>
										<td>PTS</td>
									</tr>
							
									<?php
									//include('dbms.php');
									$qry="SELECT TEAM_ID, POINTS FROM teams WHERE POOL='A' ORDER BY POINTS DESC";
									$i=1;
							
									$result=mysql_query($qry);
									
									echo "";
									while($row=mysql_fetch_assoc($result))
									{	
										
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
										
										echo "<tr class='ateam'><td>".$row['TEAM_ID']."</td><td>".$cnt_matches."</td><td>".$row['POINTS']."</td></tr>";
									}
									?>
									<tr class="cteam">
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<?php
									//include('dbms.php');
									$qry="SELECT TEAM_ID, POINTS FROM teams WHERE POOL='B' ORDER BY POINTS DESC";
									$i=1;
							
									$result=mysql_query($qry);
									
									echo "";
									while($row=mysql_fetch_assoc($result))
									{	
										
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
										
										echo "<tr class='bteam'><td>".$row['TEAM_ID']."</td><td>".$cnt_matches."</td><td>".$row['POINTS']."</td></tr>";
									}
									?>
								</table>
						</td>
					</tr>
					<!--<tr id="button">
						<td width=74.5% style="float:left;">
								<a href="#" class="imgl" onclick="prev(); return false;"><img style="height:20px;" src="left222 (1).png"></img></a>
								<a href="#" class="imgr" onclick="next(); return false;"><img style="height:20px;" src="right11 (2).png"></img></a>
						</td>
						<td width=20% style="float:right;">
						</td>
					</tr>
					-->
				</table>
			<br>
			
			<div id="play">
				<div id="match">
					<table width=100% height=100%>
						<tr>
							<td class="overflow" style="padding-left:0;">
								<center>
								<?php
									//include('dbms.php');
									$score=0;
									$qry='SELECT VENUE, MATCH_ID,TEAM1,TEAM2 FROM MATCHES WHERE TOSS IS NOT NULL AND WINNER IS NULL';
									$result=mysql_query($qry);
									$row=mysql_fetch_assoc($result);
									$live=intval($row['MATCH_ID'][1]);
									if($live>=1 && $live<=6)
										$stage='Pool Stage Match';
									else if($live==7)
										$stage='Semi Final 1';
									else if($live == 8)
										$stage='Semi Final 2';
									$_SESSION['varname']=$row['MATCH_ID'];
									
									$varr=$_SESSION['varname'];
									if($row['TEAM1'] !=NULL)
									{
										$qry2="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$row['TEAM1']."'";
										$result2=mysql_query($qry2);
										$row2=mysql_fetch_assoc($result2);
										$qry3="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$row['TEAM2']."'";
										$result3=mysql_query($qry3);
										$row3=mysql_fetch_assoc($result3);
										$var = $row['TEAM1'].'.jpg';
										$var2 = $row['TEAM2'].'.jpg';
										$score=1;
										
										echo "<span class='span1' style='background-color:green;'>&nbsp;Live&nbsp;</span><br>".$stage."<br><br>";
										echo "<a class='match2' href='mat_ch.php?varname=<?php echo $varr; ?>'>Page2	<span> ".$row2['TEAM_NAME']." vs ".$row3['TEAM_NAME']."</span></a><br>";
										echo "<br><img src=$var style='height:200px;width:200px;'></img>
											<img src=$var2 style='height:200px;width:200px;'></img>
											<br><br>";
										
										echo $row['VENUE'];
									}
									else
									{
										$qry='SELECT DATE, VENUE, MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE MATCH_ID = (SELECT MIN(MATCH_ID) FROM MATCHES WHERE WINNER IS NULL AND TOSS IS NULL)';
										$result=mysql_query($qry);
										$row=mysql_fetch_assoc($result);
										$live=intval($row['MATCH_ID'][1]);
										if($live>=1 && $live<=6)
											$stage='Pool Stage Match';
										else if($live==7)
											$stage='Semi Final 1';
										else if($live == 8)
											$stage='Semi Final 2';
										if($row['TEAM1'] !=NULL)
										{
											$qry2="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$row['TEAM1']."'";
											$result2=mysql_query($qry2);
											$row2=mysql_fetch_assoc($result2);
											$qry3="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$row['TEAM2']."'";
											$result3=mysql_query($qry3);
											$row3=mysql_fetch_assoc($result3);
											$var = $row['TEAM1'].'.jpg';
											$var2 = $row['TEAM2'].'.jpg';
											
											echo "<span class='span1' style='background-color:red;'>&nbsp;Upcoming&nbsp;</span><br>".$stage."<br><br>";
											echo "<a class='match2' href='#'><span>".$row2['TEAM_NAME']." vs ".$row3['TEAM_NAME']."</span></a><br>";
											echo "<br><img src=$var style='height:200px;width:200px;'></img>
												<img src=$var2 style='height:200px;width:200px;'></img>
												<br><br>Venue - ";
											
											echo $row['VENUE'].'<p id="upcom"></p>';
											$xe=$row['DATE'];
											$datetime1 = date_create($row['DATE']);
											$datetime2 = date_create(date("Y-m-d"));
											$interval = date_diff($datetime2, $datetime1);
											echo $interval->format('%a days remaining');
								}
											
										
									}
									?>
								<!--<p>Live/Upcoming</p>
								<img src="3840x2400.jpg" style="height:200px;width:200px;"></img>
								vs
								<img src="3840x2400.jpg" style="height:200px;width:200px;"></img>
								<p>team1 vs team2<br>
								venue<br>
								</p>-->
							</td>
							<td class="overflow2" style="padding-right:0;">
								<center>
								<?php
									//include('dbms.php');
									$qry='SELECT WINNER, RESULT_DESCRIPTION, MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE MATCH_ID = (SELECT MAX(MATCH_ID) FROM MATCHES WHERE WINNER IS NOT NULL AND TOSS IS NOT NULL)';
									$result=mysql_query($qry);
									$row=mysql_fetch_assoc($result);
									$live=intval($row['MATCH_ID'][1]);
									
									if($live>=1 && $live<=6)
										$stage='Pool Stage Match';
									else if($live==7)
										$stage='Semi Final 1';
									else if($live == 8)
										$stage='Semi Final 2';
									
									if($row['TEAM1'] !=NULL)
									{
										$qry2="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM1']."'";
										$result2=mysql_query($qry2);
										$row2=mysql_fetch_assoc($result2);
										$qry3="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM2']."'";
										$result3=mysql_query($qry3);
										$row3=mysql_fetch_assoc($result3);
										$var3 = $row['WINNER'];
										if($var3 !='NR' && $var3 !='TIE' )
										{$qry4="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$var3."'";
										$result4=mysql_query($qry4);
										$row4=mysql_fetch_assoc($result4);
										if($row4['TEAM_NAME']==$row3['TEAM_NAME']){
											$row3['TEAM_NAME']=$row2['TEAM_NAME'];
											$row3['TEAM_ID']=$row2['TEAM_ID'];
										}
										
										$var = $var3.'.jpg';
										$var2 = $row3['TEAM_ID'].'.jpg';
										
										echo "<span class='span1' style='background-color:#DF7401;'>&nbsp;Concluded&nbsp;</span><br>".$stage."<br><br>";
										echo "<a class='match1' href='#'><span style='color:#ffffff'>".$row4['TEAM_NAME']."</span><span> vs ".$row3['TEAM_NAME']."</span></a><br>";
										echo "<br><img src=$var style='height:200px;width:200px;'></img>
											<img src=$var2 style='height:200px;width:200px;'></img>
											<br><br>Result - ";
										
										echo $row['RESULT_DESCRIPTION'];
										}
										else{
										echo "<span class='span1' style='background-color:#DF7401;'>&nbsp;Concluded&nbsp;</span><br>".$stage."<br><br>";
										echo "<a class='match2' href='#'><span>".$row2['TEAM_NAME']."</span><span> vs ".$row3['TEAM_NAME']."</span></a><br>";
										$var=$row2['TEAM_ID'].'.jpg';
										$var2 = $row3['TEAM_ID'].'.jpg';
										echo "<br><img src=$var style='height:200px;width:200px;'></img>
											<img src=$var2 style='height:200px;width:200px;'></img>
											<br><br>Result - ";
										
										echo $row['RESULT_DESCRIPTION'];
											
											
										}
									}
									?>
									<!--<p>Concluded/Concluded</p>
								<img src="3840x2400.jpg" style="height:200px;width:200px;"></img>
								vs
								<img src="3840x2400.jpg" style="height:200px;width:200px;"></img>
								<p>team1 vs team2<br>
								venue<br>
								Result</p>-->
							</td>
						</tr>
					</table>
				
				
				</center>
				</div>
					
				<div id="score">
				<?php
					if($score){
						echo "
							<table class='table-fill' height=100% border=1 width=100% style='text-align:center;'>";
									$qry='SELECT VENUE, TOSS, TOSS_DECISION, MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE WINNER IS NULL AND TOSS IS NOT NULL';
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
										
									echo "<tr ><td style='background:#4E5066;' colspan=2><a class='match2' href='#'><span>".$row2['TEAM_NAME']."</span><span > vs ".$row3['TEAM_NAME']."</span></a></td></tr>";
									echo "<tr><td colspan=2>".$row['TOSS']." won the toss and chose to ".$row['TOSS_DECISION']."</td></tr>";
									echo "<tr><td colspan=2>Venue - ".$row['VENUE']."</td></tr>";
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
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning1']."'";
										$result3=mysql_query($qry5);
										$row31=mysql_fetch_assoc($result3);
										
										echo "
										<tr><td>".$i1['inning1']. ": ".$row31['SCORE_RUN']."/".$row31['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=1";
										$result3=mysql_query($qry6);
										$row41=mysql_fetch_assoc($result3);
										$f = sprintf ("%.1f", $row41['BALL']);
										echo $f."</td>
										
										";
										
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning2']."'";
										$result3=mysql_query($qry5);
										$row32=mysql_fetch_assoc($result3);
										
										echo "
										<td>".$i1['inning2']. ": ".$row32['SCORE_RUN']."/".$row32['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=2";
										$result3=mysql_query($qry6);
										$row42=mysql_fetch_assoc($result3);
										$f2 = sprintf ("%.1f", $row42['BALL']);
										echo $f2."</td></tr>";
										if($f=='50.0' || $row31['SCORE_WICKET']==10)
										{$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning1']."%' ORDER BY RUN_SCORED DESC";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr id='x'><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										}
										else{
										$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning1']."%' AND OUTS IS NULL ORDER BY PLAYER_ID ASC; ";	
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr id='x'><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										
										}
										$qry5="SELECT PLAYER_ID, WICKET, RUN_CONCEDED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning2']."%' ORDER BY WICKET DESC, RUN_CONCEDED";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<td width=70%>".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."</td></tr>";
										
										
										
										if($f2=='50.0' || $row32['SCORE_WICKET']==10)
										{$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning2']."%' ORDER BY RUN_SCORED DESC";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr id='x'><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										}
										else{
										$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning2']."%' AND OUTS IS NULL ORDER BY PLAYER_ID ASC; ";	
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr id='x'><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										
										}
										
										$qry5="SELECT PLAYER_ID, WICKET, RUN_CONCEDED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning1']."%' ORDER BY WICKET DESC, RUN_CONCEDED";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<td>".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."</td></tr></table>";
								echo "
							</table>
						";
						
					}
					else{
						echo "
							<table class='table-fill' height=400px border=1 width=100% style='overflow:hidden;text-align:center;'>";
									$qry='SELECT TOSS, TOSS_DECISION, WINNER, RESULT_DESCRIPTION, MATCH_ID, TEAM1, TEAM2 FROM MATCHES WHERE MATCH_ID = (SELECT MAX(MATCH_ID) FROM MATCHES WHERE WINNER IS NOT NULL AND TOSS IS NOT NULL)';
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
									
									if($row['TEAM1'] !=NULL)
									{
										$qry2="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM1']."'";
										$result2=mysql_query($qry2);
										$row2=mysql_fetch_assoc($result2);
										$qry3="SELECT TEAM_NAME, TEAM_ID FROM teams WHERE TEAM_ID='".$row['TEAM2']."'";
										$result3=mysql_query($qry3);
										$row3=mysql_fetch_assoc($result3);
										$var3 = $row['WINNER'];
										$qry4="SELECT TEAM_NAME FROM teams WHERE TEAM_ID='".$var3."'";
										$result4=mysql_query($qry4);
										$row4=mysql_fetch_assoc($result4);
										if($row4['TEAM_NAME']==$row3['TEAM_NAME']){
											$row3['TEAM_NAME']=$row2['TEAM_NAME'];
											$row3['TEAM_ID']=$row2['TEAM_ID'];
										}
										echo "<tr ><td style='background:#4E5066;' colspan=2><a class='match1' href='#'><span style='color:#ffffff'>".$row4['TEAM_NAME']."</span><span style='color:#29088A'> vs ".$row3['TEAM_NAME']."</span></a></td></tr>";
										echo "<tr><td colspan=2>".$row['TOSS']." won the toss and chose to ".$row['TOSS_DECISION']."</td></tr>";
										echo "<tr><td colspan=2>Result - ".$row['RESULT_DESCRIPTION']."</td></tr>";
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
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning1']."'";
										$result3=mysql_query($qry5);
										$row3=mysql_fetch_assoc($result3);
										
										echo "
										<tr><td>".$i1['inning1']. ": ".$row3['SCORE_RUN']."/".$row3['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=1";
										$result3=mysql_query($qry6);
										$row4=mysql_fetch_assoc($result3);
										$f = sprintf ("%.1f", $row4['BALL']);
										echo $f."</td>
										
										";
										
										$qry5="SELECT SCORE_RUN, SCORE_WICKET FROM plays WHERE MATCH_ID ='".$row['MATCH_ID']."' AND TEAM_ID='".$i1['inning2']."'";
										$result3=mysql_query($qry5);
										$row3=mysql_fetch_assoc($result3);
										
										echo "
										<td>".$i1['inning2']. ": ".$row3['SCORE_RUN']."/".$row3['SCORE_WICKET']."<br>OVERS: ";
										
										$qry6="SELECT MAX(OVER)/10 AS BALL FROM balls WHERE MATCH_ID ='".$row['MATCH_ID']."' AND INNING=2";
										$result3=mysql_query($qry6);
										$row4=mysql_fetch_assoc($result3);
										$f = sprintf ("%.1f", $row4['BALL']);
										echo $f."</td></tr>";
										
										$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning1']."%' ORDER BY RUN_SCORED DESC";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr id='x'><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										
										$qry5="SELECT PLAYER_ID, WICKET, RUN_CONCEDED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning2']."%' ORDER BY WICKET DESC, RUN_CONCEDED";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<td width=70%>".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."</td></tr>";
										
										
										
										$qry5="SELECT PLAYER_ID, RUN_SCORED, BALL_PLAYED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning2']."%' ORDER BY RUN_SCORED DESC";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<tr><td width=50%>".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_SCORED']."(".$row4['BALL_PLAYED'].")<br></td>";
										
										$qry5="SELECT PLAYER_ID, WICKET, RUN_CONCEDED FROM plays_in WHERE MATCH_ID ='".$row['MATCH_ID']."' AND PLAYER_ID LIKE '".$i1['inning1']."%' ORDER BY WICKET DESC, RUN_CONCEDED";
										$result3=mysql_query($qry5);
										$row4=mysql_fetch_assoc($result3);
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "<td>".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."<br>";
										$row4=mysql_fetch_assoc($result3);
										
										$qry6="SELECT PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row4['PLAYER_ID']."'";
										$result4=mysql_query($qry6);
										$row5=mysql_fetch_assoc($result4);
										
										echo "".$row5['PLAYER_NAME']." ".$row4['RUN_CONCEDED']."/".$row4['WICKET']."</td></tr></table>";
										
									}
									
									}
					}
				?>

				</div>
			</div>
			<br><br><br><br><br><br><br>
			<br>
			<table id="highs" style="color:white;text-align:center;">
				<tr width=100%>
					<td id="high1">
					<table width=100% height=100%>
					<tr>
					<td style='background-color: #eac80d;font-size:30px' colspan=2 height=30%><strong>Top Run Scorer</strong>
					</td>
					</tr>
					<tr  height=50%>
					<td style='background-color: #2b2937;font-size:20px' width=50%>
					<?php
					$qry1 = "SELECT SUM(RUN_SCORED), PLAYER_ID FROM plays_in GROUP BY PLAYER_ID ORDER BY SUM(RUN_SCORED) DESC";
					$result1=mysql_query($qry1);
					$row1=mysql_fetch_assoc($result1);
					
					echo $row1['PLAYER_ID'][0].$row1['PLAYER_ID'][1].$row1['PLAYER_ID'][2].'<br><br>';
					$qry2="SELECT PLAYER_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row1['PLAYER_ID']."'";
					$result2=mysql_query($qry2);
					$row2=mysql_fetch_assoc($result2);
					echo $row2['PLAYER_NAME'];
					$img = 'images/'.$row1['PLAYER_ID'].'.jpg';
					echo "</td><td style='background-color: #2b2937;font-size:20px'><img src=$img /></td>";
					echo "</tr>
					<tr>
					<td colspan=2 style='background-color: #2b2948;font-size:25px'><strong>";
					echo $row1['SUM(RUN_SCORED)'];
					echo "</strong></td>
					</tr></table>
					</td>
					";
					
					
					?>
					
					
					
					<td id="high2">
					<table width=100% height=100%>
					<tr>
					<td  style='background-color: #1abc9c;font-size:30px' height=30% colspan=2><strong>Highest Individual Score
					</strong></td>
					</tr>
					<tr height=50%>
					
					<td style='background-color: #2b2937;font-size:20px' width=50%>
					<?php
					$qry1 = "SELECT MAX(RUN_SCORED), PLAYER_ID FROM plays_in GROUP BY PLAYER_ID ORDER BY SUM(RUN_SCORED) DESC";
					$result1=mysql_query($qry1);
					$row1=mysql_fetch_assoc($result1);
					
					echo $row1['PLAYER_ID'][0].$row1['PLAYER_ID'][1].$row1['PLAYER_ID'][2].'<br><br>';
					$qry2="SELECT PLAYER_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row1['PLAYER_ID']."'";
					$result2=mysql_query($qry2);
					$row2=mysql_fetch_assoc($result2);
					echo $row2['PLAYER_NAME'];
					$img = 'images/'.$row1['PLAYER_ID'].'.jpg';
					echo "</td><td style='background-color: #2b2937;'><img src=$img /></td>";
					echo "</tr>
					<tr>
					<td colspan=2 style='background-color: #2b2948;font-size:30px'><strong>";
					echo $row1['MAX(RUN_SCORED)'];
					echo "</td></strong>
					</tr></table>
					</td>
					";
					?>
					
					</td>
					<td id="high3">
					<table width=100% height=100%>
					<tr>
					<td  style='background-color: #5d6a9a;font-size:30px;' colspan=2 height=30%><strong>Best Bowling Figures
					</strong></td>
					</tr>
					<tr  height=50%>
					<td width=50% style='background-color: #2b2937;font-size:20px;'>
					<?php
					$qry1 = "SELECT WICKET, RUN_CONCEDED, PLAYER_ID FROM plays_in ORDER BY WICKET DESC, RUN_CONCEDED";
					$result1=mysql_query($qry1);
					$row1=mysql_fetch_assoc($result1);
					
					echo $row1['PLAYER_ID'][0].$row1['PLAYER_ID'][1].$row1['PLAYER_ID'][2].'<br><br>';
					$qry2="SELECT PLAYER_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row1['PLAYER_ID']."'";
					$result2=mysql_query($qry2);
					$row2=mysql_fetch_assoc($result2);
					echo $row2['PLAYER_NAME'];
					$img = 'images/'.$row1['PLAYER_ID'].'.jpg';
					echo "</td><td style='background-color: #2b2937;'><img src=$img /></td>";
					echo "</tr>
					<tr>
					<td colspan=2 style='background-color: #2b2948;font-size:30px;'><strong>";
					echo $row1['RUN_CONCEDED'].'/'.$row1['WICKET'];
					echo "</td></strong>
					</tr></table>
					";
					?>
					</td>
					<td id="high4">
					<table width=100% height=100%>
					<tr>
					<td  colspan=2 height=30% style='background-color: #FA5858;font-size:30px'><strong>Highest Wicket Taker
					</td></strong>
					</tr>
					<tr  height=50%>
					<td width=50% style='background-color: #2b2937;font-size:20px'>
					<?php
					$qry1 = "SELECT SUM(WICKET), PLAYER_ID FROM plays_in GROUP BY PLAYER_ID ORDER BY SUM(WICKET) DESC";
					$result1=mysql_query($qry1);
					$row1=mysql_fetch_assoc($result1);
					
					echo $row1['PLAYER_ID'][0].$row1['PLAYER_ID'][1].$row1['PLAYER_ID'][2].'<br><br>';
					$qry2="SELECT PLAYER_ID, PLAYER_NAME FROM players WHERE PLAYER_ID = '".$row1['PLAYER_ID']."'";
					$result2=mysql_query($qry2);
					$row2=mysql_fetch_assoc($result2);
					echo $row2['PLAYER_NAME'];
					$img = 'images/'.$row1['PLAYER_ID'].'.jpg';
					echo "</td><td style='background-color: #2b2937;'><img src=$img /></td>";
					echo "</tr>
					<tr>
					<td colspan=2 style='background-color: #2b2948;font-size:30px'><strong>";
					echo $row1['SUM(WICKET)'];
					echo "</td></strong>	
					</tr></table>
					</td>
					";
					?>
					</td>
				</tr>
			</table>
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