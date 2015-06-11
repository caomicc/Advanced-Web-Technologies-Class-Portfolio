<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings</title>
</head>

<body>

<?php 
	include('changedsign.php');

	$num = $_GET["num"];
	if (is_numeric($num)) {
		echo ("Your new number is:" + changePos($num));
	}
	else {
		echo "Dude, that isn't even a number. What are you doing, man?";
	}
?>
<hr>
<a href="../../older/index.php#classworkFive">Let's Go Home.</a>

</body>
</html>