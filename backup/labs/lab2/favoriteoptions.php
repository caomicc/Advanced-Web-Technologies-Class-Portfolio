<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>What are your favorites?</title>
</head>

<body>


<?php

echo "<h2>Here's what you chose:</h2>";

$planetary = $_GET['planets'];
$constellations = $_GET['select'];

switch ($planetary) {
    case "1":
        echo "You chose Mercury&nbsp";
        break;
    case "2":
        echo "You chose Venus&nbsp";
        break;
    case "3":
        echo "You chose Earth&nbsp";
        break;
    case "4":
        echo "You chose Mars&nbsp";
        break;
    case "5":
        echo "You chose Jupiter&nbsp";
        break;
    case "6":
        echo "You chose Saturn&nbsp";
        break;
	case "6":
        echo "You chose Neptune&nbsp";
        break;
	case "6":
        echo "You chose Uranus&nbsp";
        break;
	case "6":
        echo "You chose Pluto (Good choice!)&nbsp";
        break;
    default:
        echo "You didn't choose a planet...Go back and pick one.&nbsp";
}

switch ($constellations) {
	case "a":
        echo "and Sirius.";
        break;
    case "b":
        echo "and Ursa Major";
        break;
    case "c":
        echo "and Orion.";
        break;
    case "d":
        echo "and Andromeda.";
        break;
    case "e":
        echo "and Taurus.";
        break;
	case "f":
        echo "and Libra.";
        break;
	case "g":
        echo "and Little Dipper.";
        break;
	case "h":
        echo "and Aries.";
        break;
	case "i":
        echo "and another constellation.";
        break;
		}
?>
<hr>
<a href="../../older/index.php#classworkTwo">Let's Go Home.</a>

</body>
</html>