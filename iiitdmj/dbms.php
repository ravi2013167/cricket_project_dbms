 <?php
 $link = mysql_connect('localhost', 'root','');

 //Check link to the mysql server
 if(!$link) {
 die('Failed to connect to server: ' . mysql_error());
 } else {
	// echo "linked sucessfully"."<br>";
 }

 //Select database
 $db = mysql_select_db('dashboard');
 if(!$db) {
 die("Unable to select database");
 } else {
	 //echo "database selected"."<br>";
 }
 ?>