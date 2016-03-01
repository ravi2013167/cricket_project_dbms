<!DOCTYPE HTML>
<html>
	<head>
		<style>
				.CSSTableGenerator {
	margin:0px;padding:0px;
	width:30%;
	box-shadow: 10px 10px 5px #888888;
	border:1px solid #ffffff;
	float:left;
	margin:20px;
	
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
}.CSSTableGenerator tr:hover td{
	background-color:#aaaaff;
}
.CSSTableGenerator td{
	vertical-align:middle;
	
	background-color:#cccccc;

	border:1px solid #ffffff;
	border-width:0px 1px 1px 0px;
	text-align:center;
	padding:7px;
	font-size:14px;
	font-family:Arial;
	font-weight:normal;
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
.mi{
	clear:both;
	height:200px;
	width:100%;
	margin:auto;
	background-color:#003366;
	color:#ffffff;
	
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
			<h1 style="color:#ffffff;background-color:#25257C;height:50px;padding:10px;"><center><b>Web Team<b></center></h1>
				
				<?php
					echo "<div class='CSSTableGenerator'>";
						echo "<table style='width:435px;'>";
							echo "<tr>";
								echo "<td style='height:25px;'><h3><b>Ravi Jain</b></h3></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:35px;'><b>Web Developer</b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:300px;'><img src='flags/sachin.jpg' height='250px' width='250px'></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Email - 2013167@iiitdmj.ac.in</td>";
							echo "</tr>";echo "<tr>";
								echo "<td>Phone - 09407490863</td>";
							echo "</tr>";
						echo "</table>";
					echo "</div>";
				?>
				<?php
					echo "<div class='CSSTableGenerator'>";
						echo "<table style='width:435px;'>";
							echo "<tr>";
								echo "<td style='height:25px;'><h3><b>Jugal Kishor Sahu</b></h3></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:35px;'><b>Web Developer</b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:300px;'><img src='flags/jugal1.jpg' height='250px' width='250px'></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Email - 2013094@iiitdmj.ac.in</td>";
							echo "</tr>";echo "<tr>";
								echo "<td>Phone - 09407490863</td>";
							echo "</tr>";
						echo "</table>";
					echo "</div>";
				?>
				<?php
					echo "<div class='CSSTableGenerator'>";
						echo "<table style='width:435px;'>";
							echo "<tr>";
								echo "<td style='height:25px;'><h3><b>Prashant Kumar</b></h3></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:35px;'><b>Web Developer</b></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td style='height:300px;'><img src='flags/sachin.jpg' height='250px' width='250px'></td>";
							echo "</tr>";
							echo "<tr>";
								echo "<td>Email - 2013152@iiitdmj.ac.in</td>";
							echo "</tr>";echo "<tr>";
								echo "<td>Phone - 09407490863</td>";
							echo "</tr>";
						echo "</table>";
					echo "</div>";
				?>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<?php
					echo "<div class='mi'>";
						echo "<table cellpadding='20px' style='width:1375px;'>";
							echo "<tr><td><h3>Get In Touch With Us<br><br>Hall of Residence-3<br></h3>";
							echo "Indian Institute of Information Technology,<br> 
									Design and Manufacturing,<br>
										Jabalpur - 482005<br>
									</td></tr>";							
						echo "</table>";
					echo "</div>";
				?>
				<h3 class="text_line"></h3>
            <br><br><br><br>
					
		</div>
		<script src="jq.js" type="text/javascript"></script>
		<script src="script.js" type="text/javascript"></script>
		<script src="slider.js" type="text/javascript"></script>
		<script src="upcom.js" type="text/javascript"></script>
	</body>
</html>