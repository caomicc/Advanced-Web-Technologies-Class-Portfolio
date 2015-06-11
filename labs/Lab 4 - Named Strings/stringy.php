<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strings</title>
</head>

<body>


<?php
$name = $_GET["stringName"];
list($lname, $fname) = split(",", $name);
echo "The name you entered into the previous screen is: $fname $lname".".";
?>
<hr>
<a href="../../older/index.php#classworkFour">Let's Go Home.</a>

</body>
</html>