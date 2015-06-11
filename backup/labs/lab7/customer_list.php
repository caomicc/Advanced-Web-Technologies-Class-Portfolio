<html>
<head>
<title>List Customers</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<h1>List Customers</h1>

  
  
<?php

// this connects To database
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";    

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

// the student file is sorted last name, first name
$query = "select * from cusTab order by cusLast, cusFirst";
$result = mysql_query($query);
$num = mysql_num_rows($result);
// print "There are currently $num students on file<br><br>";
 
print "<table>";
print "<tr><td><b>First Name</b></td>";
print "<td><b>Last Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";

while ($row = mysql_fetch_array($result)) {
	$cusID = $row['cusID'];
	$cusFirst = $row['cusFirst'];
	$cusLast = $row['cusLast'];
	$cusStreet = $row['cusStreet'];
	$cusZip = $row['cusZip'];
	print "<tr>";
	
	print "<td>$cusFirst</td>";
	print "<td>$cusLast</td>";
	print "<td>$cusStreet, $cusZip</td>";
//	print "$cusID $cusFirst $cusLast $cusAddress $cusZip ";
	print "<td><a href=customer_connect.php?action=u&id=";
	print $cusID;
//  remove the <br> from this line	
	print ">Change</a></td>";	
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
	print "<td><a href=customer_action.php?action=d&id=";
	print $cusID;
	print "> Delete </a></td>";	
	print "</tr>";
}
print "</table>";
?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="customer_connect.php?action=a">Add a Customer</a>

<br>
<br>
<a href="../../older/index.php#classworkSeven">Return </a>

</body>
</html>
