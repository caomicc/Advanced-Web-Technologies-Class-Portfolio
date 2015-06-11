<html>
<head>
<title>Student Update 4</title>
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
$id = $_REQUEST["id"];

// here are all the fields from my form
$cusFirst = $_REQUEST["cusFirst"];
$cusLast = $_REQUEST["cusLast"];
$cusAddress = $_REQUEST["cusStreet"];
$cusZip = $_REQUEST["cusZip"];
$cusStatus = $_REQUEST["cusStatus"];
$cusAge = $_REQUEST["cusAge"];
$cusBirth = $_REQUEST["cusBirth"];
$cusComment = $_REQUEST["cusComment"];
// the date function is used near the end to set the Added Date or changed date
$dt = date('Y-m-d');

// here I test the parm
// the action I take depends on if the parm is a(dd) or u(pdate)
if ($action == 'a') {
	$query = "insert into studentTab values (
		null, 
		'$cusFirst', 
		'$cusLast', 
		'$cusAddress', 
		'$cusZip', 
		'$cusStatus', 
		'$cusAge', 
		'$cusBirth', 
		'$cusComment', 
		'$dt',
		null
	)";
	mysql_query($query) or
		die(mysql_error());
	print "<h3>Thanks $stuFirst for entering your information</h3>";
} 
// now check for an update
// I will use a set query to update the changed fields
// I also update the changed date field 
if ($action == 'u') {
	$query = "update studentTab
		set stuFirst = '$stuFirst',
		stuLast = '$stuLast', 
		stuAddress = '$stuAddress', 
		stuZip = '$stuZip', 
		stuStatus = '$stuStatus', 
		stuEnrollAge = '$stuEnrollAge', 
		stuComment = '$stuComment',
		stuDateChanged = '$dt'		
		where stuID = '$id'";
	mysql_query($query) or
		die(mysql_error());
	print "<h3>Update Successful</h3>";
} // end u

if ($action == 'd') {

// this is a delete
// so perform a delete query
		$query = "delete from studentTab
		where stuID = '$id'";
		$result = mysql_query($query)
			 or die("query failed:" . mysql_error());
	print "<h3>Delete Successful</h3>";
} 

?>

<p><a href="../../../student_list4.php">Return</a></p>
<p>&nbsp; </p>
</body>
</html>
