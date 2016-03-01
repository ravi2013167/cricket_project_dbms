<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	
	<body id="body">
		<div id="container">
			<div id="logo" style="padding-right:10px padding-top:10px">
				<font id="head">CricCrazy</font>	
			</div>
			
		</div>
		
	</body>

</html>
<?php
session_start();
session_unset();
session_destroy();
?>
<html>
<head>
<title>Admin Login</title>
</head>
<body bgcolor="#aabbcc">
<?php
?>
 <br><br>
 <h3 align="center"> - Enter your Administrator login Details - </h3>
 <form name="myloginForm" method="post" action="login_check.php">
 <table width="300" border="1" align="center" cellpadding="5"
cellspacing="0">
 <tr>
 <td style="color:rgb(6,59,118)"><b>Login</b></td>
 <td><input name="login" type="text" id="login" /></td>
 </tr>
 <tr>
 <td style="color:rgb(6,59,118)"><b>Password</b></td>
 <td><input name="password" type="password" s/></td>
 </tr>
 <tr>
 <td colspan="2" align="center">
 <input type="submit" name="submit" value="Login" /></td>
 </tr>
 </table>
</body>
</html>