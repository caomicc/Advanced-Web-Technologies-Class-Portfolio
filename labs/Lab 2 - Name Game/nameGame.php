<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Clarice's Name Game</title>
</head>

<body>

 <?php
echo "<h3> You entered " . $_GET['firstName'] . " </h3>";

$fname = "Clarice";


 if($_GET['firstName'] == $fname) { 
    echo "Good Evening, "  . $_GET['firstName'] . ". Have the lambs stopped screaming?";
} else {
    echo "You are not Clarice.";
}
?><br><br>

<a href="../../older/index.php#classworkTwo">Let's Go Home.</a>

</body>
</html>