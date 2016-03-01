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
	text-align:center;
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
.CSSTableGenerator tr:hover td{
	background-color:#3399FF;
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
			<br><br><br>
			<?php
				$player=$_GET['id'];
				include('dbms.php');
				$qry = "SELECT * FROM players where PLAYER_ID='".$player."'";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$name=$row['PLAYER_NAME'];
				$qry = "SELECT * FROM teams where TEAM_ID='".substr($player,0,3)."'";
				$result=mysql_query($qry);
				$row=mysql_fetch_assoc($result);
				$team=$row['TEAM_NAME'];
				echo "<table style='background-color:#003366;width:1440px;'><tr><td><h1 style='color:#FF9900;margin:20px;float:left;'><b>".$name." - ".$team."<b></h1></td></tr></table>"
			?>
			<?php
				echo "<br><br>";
				echo "<div class='CSSTableGenerator'>";
						echo "<table>";
							echo "<tr><td colspan='11'><h2>Batting Stats</h2></td></tr>";
						echo "</table>";
					echo "</div>";
				echo "<div class='CSSTableGenerator'>";
						echo "<table>";
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
						echo "<table>";
							echo "<tr><td colspan='11'><h2>Bowling Stats</h2></td></tr>";
						echo "</table>";
					echo "</div>";
				echo "<div class='CSSTableGenerator'>";
						echo "<table>";
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
			<br><br><br>	
		</div>
		<script src="jq.js" type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
		<script src="slider.js" type="text/javascript"></script>
		<script src="upcom.js" type="text/javascript"></script>
	</body>
</html>