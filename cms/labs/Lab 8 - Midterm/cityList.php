<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Midterm - Countries</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic|Pacifico|Martel+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span></a>
          </button>-->
          

          
          
          <a class="navbar-brand" href="http://csci373.ricksphp.com/omiccioli/">caomicc</a>
        
        <a href="#menu-toggle" class="btn btn-sunset navbar-btn" id="menu-toggle">Menu</a>
        </div>
        <!--<div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
</nav>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        
            <ul class="sidebar-nav">
            
                 
              
          <ul class="list-group">
            <li class="list-group-item"><a href="../Lab 2 - Name Game/index.php">Lab 2 - Name Game</a></li>
            <li class="list-group-item"><a href="../Lab 2 - Favorite Picker/index.php">Lab 2 - Picking Favorites</a></li>
            <li class="list-group-item"><a href="../Lab 3 - Puppybowl/index.php">Lab 3 - Puppy Bowl</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Named Strings/index.php">Lab 4 - Named Strings</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Sign Changes/index.php">Lab 4 - Sign Changes</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Celcius Conversion/index.php">Lab 4 - Celcius Conversions</a></li>
            <li class="list-group-item"><a href="../Lab 5 - Including/index.php">Lab 5 - Including</a></li>
			<li class="list-group-item"><a href="../Lab 5 - Sessions/index.php">Lab 5 - Sessions</a></li>
            <li class="list-group-item"><a href="../Lab 6 - Cookies/index.php">Lab 6 - Cookies</a></li>
            <li class="list-group-item"><a href="../Lab 6 - MySQL/index.php">Lab 6 - MySQL</a></li>
            <li class="list-group-item"><a href="../Lab 7 - MySQL Continued/index.php">Lab 7 - More MySQL</a></li>
            <li class="list-group-item"><a href="index.php">Lab 8 - Midterm</a></li>
          </ul><br>
        	<li><a href="#">Work History</a></li>
            <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <!--<div class="menu-div"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a></div>-->
                
                <div class="row">
                <div class="col-lg-12">

<h2>Midterm: City List and Search - Alphabetical Order  <small><a href="index.php">City List by Population</a></small></h2><br>

<table class="table table-hover">
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
$condition .= " and (stateName like '%$searchName%' )";

// first time thru, get count, reset max
if ($pcode == null) {
	$query = "select count(*) from stateTab $condition";
	$result = mysql_query($query) or die(mysql_error());
	$row = mysql_fetch_array($result); 
	$pmax = $row['0'];
	$pstart = 0;
} // end if

// perform search based on limits
$query = "select state_name, state_abbr, region from stateTab";
$result = mysql_query($query) or die(mysql_error());
//City.Population from Country, City $condition and City.CountryCode = Code order by CityName limit $pstart, $scroll_amt
// format table and bg color
echo '<tr>
<td><b>City</b></td>
<td><b>Country</b></td>
<td><b>Continent</b></td>
<td><b>Population</b></td>
</tr>';
//$bg = '#cccccc';

// loop for print
while ($row = mysql_fetch_array($result)) {

	//$bg = ($bg=='#cccccc' ? '#ffffff' : '#cccccc');

	$stateName = $row['state_name'];
	$abbrName = $row['state_abbr'];
	$region = $row['region'];
	

	
	echo '<tr bgcolor="', $bg, '">';
	echo "<td>$stateName</td>";
	echo "<td>$abbrName</td>";
	echo "<td>$region</td>";
	echo '</tr>';	
	
}

// setup for forward/back
echo '</table><nav><ul class="pager">';

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
echo '<li class="previous"><a href="cityList.php?pcode=b&pstart=' . $back . '&pmax=' . $pmax . '&searchName=' . $searchName . '">&laquo;Back</a></li>';
} // end it

// format forward button using forward amount as start
// only display if there are recs to display
if (($pstart + $scroll_amt) < $pmax) {
echo '<li class="next"><a href="cityList.php?pcode=f&pstart=' . $forward . '&pmax=' . $pmax . '&searchName=' . $searchName . '">Next&raquo;</a></li>';
} // end it

?>
  
</ul></nav>
<br />
</div></div>
<div class="row"><div class="col-lg-6">
<form id="form" name="form" method="get" action="cityList.php">  
 <div class="input-group">
  <input name="searchName" type="text"  class="form-control" id="searchName" placeholder="Search for State names"  value="<?php echo $searchName;?>" size="25" maxlength="25" />
  <span class="input-group-btn">
        <input name="button" type="submit"  id="button" value="Search" class="btn btn-default">
      </span></div>
<!---    <input name="button" type="submit"  id="button" value="Search" /> -->
</form> 
<br />

<input type=button onClick="parent.location='cityList.php'" class="btn btn-sunset" value='Return All'>
                    <a href="index.php" class="btn btn-sunset" >City List</a>

</div>
                </div>
                
            </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
	
	
	
	
	$("#menu-toggle").click(function() {
    $(window).resize(function() {
        if ($(this).width() <= 690) {
        $("#wrapper").toggleClass("toggled");
        }
       
    });

    // uncomment if needed
    //$(window).resize();
});
    </script>

</body>

</html>

