<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sql Connect</title>
</head>

<body>


<?php
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";   

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

$query = "SELECT cusID, cusFirst, cusLast FROM cusTab";
$result = mysql_query($query);
$num = mysql_num_rows($result);

echo "<table><tr><th>ID Num.</th><th>Full Name</th></tr>";

while ($row = mysql_fetch_array($result)) {
	$cusID = $row['cusID'];
	$cusFirst = $row['cusFirst'];
	$cusLast = $row['cusLast'];
	
	print "<tr>";
	print "<td>$cusID</td>";
	print "<td>$cusFirst $cusLast</td>";
	print "</tr>";}
echo "</table>";
?> 
<br><br><p>
<a href="../../older/index.php#classworkSix">Let's Go Home.</a>


</body>
</html>