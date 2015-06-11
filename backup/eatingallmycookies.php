<?php
$cookie_name = "csc401C";
$cookie_value = $_GET['cookiesName'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 90), "/");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cookie Monster</title>
</head>

<body>
<?php
echo "<h3> Wait, wrong type of cookie. Now you have a  <u>" . $_GET['cookiesName'] . "</u> type cookie in your browser cookies... Thats kind of crumby.</h3>";

if($_GET['cookieName'] == 'Chocolate Chip' or 'chocolatechip' or 'chocolate chips'or 'chocolate chip cookies') { 
    echo "Good Pick!";
} else {
    echo "...Chocolate chip cookies will always be #1 though.";
}
?>

Feel the need to destory those cookies?
<a href="destroythosecookies.php">DESTROY THE COOKIES</a>
<hr>
<a href="index.php#classworkSix">Let's Go Home.</a>

</body>
</html>