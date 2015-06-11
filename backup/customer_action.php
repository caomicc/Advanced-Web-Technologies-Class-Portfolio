<html>
<head>
<title>Customer Update Action</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h1>Student Status</h1>
<p>&nbsp;</p>
<?php 

// this connects To database
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";  
mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);
 
// here are the two hiddent fields
// they tell the script is this is an add, update or delete
// and for an update and delete, they pass the id
$action = $_REQUEST["action"];
$id = $_REQUEST["cusID"];

// here are all the fields from my form
$cusFirst = $_REQUEST["cusFirst"];
$cusLast = $_REQUEST["cusLast"];
$cusStreet = $_REQUEST["cusStreet"];
$cusZip = $_REQUEST["cusZip"];
$cusSource = $_REQUEST["cusSource"];
$cusAge = $_REQUEST["cusAge"];
$cusBirth = $_REQUEST["cusBirth"];
$cusComment = $_REQUEST["cusComment"];
$cusEntered = $_REQUEST["cusEntered"];
$cusUpdated = $_REQUEST["cusUpdated"];

// the date function is used near the end to set the Added Date or changed date
$dt = date('Y-m-d');

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
	$query = "insert into cusTab values (
		null, 
		'$cusFirst', 
		'$cusFirst', 
		'$cusZip', 
		'$cusStreet',
		'$cusSex',
		'$cusSource', 
		'$cusAge', 
		'$cusBirth', 
		'$cusComment', 
		'$dt',
		null
	)";
	mysql_query($query) or
		die(mysql_error());
	print "<h3>Thanks $cusFirst for entering your information</h3>";
} 
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update cusTab
		set cusFirst = '$cusFirst',
		cusFirst = '$cusFirst',
		cusLast = '$cusLast', 
		cusZip = '$cusZip', 
		cusStreet = '$cusStreet', 
		cusSource = '$cusSource', 
		cusAge = '$cusAge',
		cusBirth = '$cusBirth', 
		cusComment = '$cusComment',
		where cusID = '$id'";
	mysql_query($query) or
		die(mysql_error());
	print "<h3>Update Successful</h3>";
} // end u

if ($action == 'd') {

// this is a delete
// so perform a delete query
		$query = "DELETE FROM `cusTab` WHERE `cusTab`.`cusID` = `$id` ";
		$result = mysql_query($query)
			 or die("query failed:" . mysql_error());
	print "<h3>Delete Successful</h3>";
} 

?>

<p><a href="customer_list.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
