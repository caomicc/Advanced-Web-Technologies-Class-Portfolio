<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings</title>
</head>

<body>


<?php
	function changePos($num) {
    $inverse = $num*-1;
    return $inverse;
	}


	$num = $_GET["num"];
	if (is_numeric($num)) {
		echo ("Your new number is:" + changePos($num));
	}
	else {
		echo "Dude, that isn't even a number. What are you doing, man?";
	}
?>
<hr>
<a href="index.php#classworkFour">Let's Go Home.</a>

</body>
</html>