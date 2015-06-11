<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings</title>
</head>

<body>


<?php
	function C2F($num) {
    $converted = ($num*1.8+32);
    return $converted;
	}

	function F2C($num) {
    $converted = (($num-32)*0.555);
    return $converted;
	}


	$num = $_GET["num"];
	$temp = $_GET["type"];
	echo ("Ah, yes your temp is " + $temp=="c" ? F2C($num) : C2F($num) + "degrees");
	
?>
<hr>
<a href="../../older/index.php#classworkFour">Let's Go Home.</a>

</body>
</html>