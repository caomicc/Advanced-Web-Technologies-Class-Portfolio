<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sessions #1</title>
</head>

<body>


<?php
			$_SESSION["name"] = "Cameron Omiccioli, Queen of Camelot";
			echo "Now we know who you are! Muahahaha.<br>";
		?>
<hr>
<a href="index.php#classworkFive">Let's Go Home.</a>

</body>
</html>