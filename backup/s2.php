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
			echo "Oh, hey! It's " . $_SESSION["name"] . ", nice to see you again!";
		?>
<hr>
<a href="index.php#classworkFive">Let's Go Home.</a>

</body>
</html>