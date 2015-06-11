<?php
/*$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";   

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($db); */



$db = new MySQLi(
	'omiccioli373.db.4076890.hostedresource.com', // host
	'omiccioli373', //user
	'Csci373pw!', //password
	'omiccioli373' //db
);

if ($db->connect_error)
{
	trigger_error('Connect Error (' . $db->connect_errno . ') ' . $db->connect_error, E_USER_ERROR);
}
?>