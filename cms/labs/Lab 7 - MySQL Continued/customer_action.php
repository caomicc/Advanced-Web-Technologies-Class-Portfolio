<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lab 7 - More MySQL</title>

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
            <li class="list-group-item"><a href="index.php">Lab 7 - More MySQL</a></li>
            <li class="list-group-item"><a href="../Lab 8 - Midterm/index.php">Lab 8 - Midterm</a></li>
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
                <h2>Lab 7 - More MySQL</h2>
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
$cusFirst = addslashes($_REQUEST["cusFirst"]);
$cusLast = addslashes($_REQUEST["cusLast"]);
$cusStreet = $_REQUEST["cusStreet"];
$cusZip = $_REQUEST["cusZip"];
$cusSex = $_REQUEST["cusSex"];
$cusSource = $_REQUEST["cusSource"];
$cusAge = $_REQUEST["cusAge"];
$cusBirth = $_REQUEST["cusBirth"];
$cusComment = addslashes($_REQUEST["cusComment"]);
$cusEntered = $_REQUEST["cusEntered"];
$cusUpdated = $_REQUEST["cusUpdated"];

if ((!$cusFirst || !$cusLast || !$cusStreet || !$cusZip || !$cusSex || !$cusAge || !$cusBirth) && $action != "d")
{
    echo "<h3>Please fill in all the required fields</h3>";
    $error = true;
}
else
{
    // the date function is used near the end to set the Added Date or changed date
    $currentTime = date('Y-m-d');

    // here I test the parm
    // the action I take depends on if the parm is a(dd) or u(pdate)
    if ($action == 'a') {
	   $query = "INSERT INTO cusTab (cusFirst, cusLast, cusStreet, cusZip, cusSex, cusSource, cusAge, cusBirth, cusComment, cusEntered)
                 VALUES ('$cusFirst', '$cusLast', '$cusStreet', '$cusZip', '$cusSex', '$cusSource', '$cusAge', '$cusBirth', '$cusComment', '$cusEntered')";
	   mysql_query($query) or die(mysql_error());
	   print "<h3>Thanks $cusFirst for entering your information</h3>";
    } 
    else if ($action == 'u') {
	   $query = "update cusTab
			  set cusFirst = '$cusFirst',
			  cusLast = '$cusLast', 
			  cusStreet = '$cusStreet', 
		  	  cusZip = '$cusZip', 
		  	  cusSex = '$cusSex',
              cusSource = '$cusSource', 
		  	  cusAge = '$cusAge',
		  	  cusBirth = '$cusBirth', 
		  	  cusComment = '$cusComment',
			  cusUpdated = '$currentTime'
		  	  where cusID = '$id'";
	   mysql_query($query) or die(mysql_error());
	   print "<h3>Update Successful</h3>";
    } // end u
    else if ($action == 'd') {
        // this is a delete
        // so perform a delete query
	    $query = "delete from cusTab where cusID = '$id'";
		$result = mysql_query($query) or die("query failed:" . mysql_error());
        print "<h3>Delete Successful</h3>";
    }
}

?>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a class="btn btn-sunset" role="button" href="<?php echo ($error) ? "javascript:window.history.back()" : "index.php"; ?>">Return</a>&nbsp;&nbsp;
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
