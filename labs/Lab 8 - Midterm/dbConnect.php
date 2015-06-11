<?php
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";   

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

?>