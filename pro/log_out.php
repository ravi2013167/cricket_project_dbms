<html>
<body>

<?php
	session_start();
	session_reset();
	session_destroy();
	header('location:login_form.php');
?>

</body>
</html>