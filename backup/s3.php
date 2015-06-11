<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sessions #2</title>
</head>

<body>
		<?php
		session_unset();
		session_destroy();
		echo "ALERT: Your session has been terminated! Yay!<br>";
	?>
<hr>
<a href="index.php#classworkFive">Let's Go Home.</a>

</body>
</html>