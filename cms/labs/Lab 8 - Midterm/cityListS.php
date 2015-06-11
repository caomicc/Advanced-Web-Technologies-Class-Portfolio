<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title> states list</title>

</head>

<body>

<h2>City List and Search - By Size</h2>

<table width="1000" border="0" >
<?php

// connect
include('dbConnect.php');

// set scroll amount, get form values
$scroll_amt = 15;
$pcode = $_REQUEST["pcode"];
$pstart = $_REQUEST["pstart"];
$pmax = $_REQUEST["pmax"];
$searchName = $_REQUEST["searchName"];

// preset condition for search
// set a condition that selects everything  
$condition = "where ID > -1";
// add additional conditions
$condition .= " and (CityName like '%$searchName%' )";

// first time thru, get count, reset max
if ($pcode == null) {
	$query = "select count(*) from City $condition";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result); 
	$pmax = $row['0'];
	$pstart = 0;
} // end if

// perform search based on limits
$query = "select CityName, CountryName, Continent, City.Population from Country, City $condition and City.CountryCode = Code order by City.Population DESC limit $pstart, $scroll_amt";
$result = mysql_query($query) or die(mysql_error());

// format table and bg color
echo '<tr>
<td><b>City</b></td>
<td><b>Country</b></td>
<td><b>Continent</b></td>
<td><b>Population</b></td>
</tr>';
$bg = '#cccccc';

// loop for print
while ($row = mysql_fetch_array($result)) {

	$bg = ($bg=='#cccccc' ? '#ffffff' : '#cccccc');

	$cityName = $row['CityName'];
	$countryName = $row['CountryName'];
	$continent = $row['Continent'];
	$population = number_format($row['Population']);
	

	
	echo '<tr bgcolor="', $bg, '">';
	echo "<td>$cityName</td>";
	echo "<td>$countryName</td>";
	echo "<td>$continent</td>";
	echo "<td>$population</td>";
	echo '</tr>';	
	
}

// setup for forward/back
echo '</table><table width="1000" border="1" ><tr>';

// set next forward page amt - reset if past max
if (($pstart + $scroll_amt) < $pmax) {
	$forward = $pstart + $scroll_amt;
} else {
	$forward = $pstart;
} // end if

// set next backward page amt - reset if less 0
$back = $pstart - $scroll_amt;
if ($back < 0) {
	$back = 0;
} // end if

// format back button using back amount as start
// only display if there are recs to display
if ($pstart != 0) {
echo '<td align="left" ><a href="cityListS.php?pcode=b&pstart=' . $back . '&pmax=' . $pmax . '&searchName=' . $searchName . '">&nbsp;&nbsp;&laquo;&laquo;Back</a></td>';
} // end it

// format forward button using forward amount as start
// only display if there are recs to display
if (($pstart + $scroll_amt) < $pmax) {
echo '<td align="right" class="scroll"><a href="cityListS.php?pcode=f&pstart=' . $forward . '&pmax=' . $pmax . '&searchName=' . $searchName . '">Next&raquo;&raquo;&nbsp;&nbsp;</a></td>';
} // end it

?>
  
</table>
<br />

<form id="form" name="form" method="get" action="cityListS.php">  
  <input name="searchName" type="text"  id="searchName" value="<?php echo $searchName;?>" size="25" maxlength="25" />
  <input name="button" type="submit"  id="button" value="Search" />
  &nbsp;&nbsp; search for State names
</form> 
<br />

<input type=button onClick="parent.location='cityListS.php'" value='Return All'>

</body>
</html>
