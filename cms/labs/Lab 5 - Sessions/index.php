<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lab 5 - Sessions</title>
		<link rel="icon" type="image/ico" href="../../img/favicon.ico"/>

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
			<li class="list-group-item"><a href="index.php">Lab 5 - Sessions</a></li>
            <li class="list-group-item"><a href="../Lab 6 - Cookies/index.php">Lab 6 - Cookies</a></li>
            <li class="list-group-item"><a href="../Lab 6 - MySQL/index.php">Lab 6 - MySQL</a></li>
            <li class="list-group-item"><a href="../Lab 7 - MySQL Continued/index.php">Lab 7 - More MySQL</a></li>
            <li class="list-group-item"><a href="../Lab 8 - Midterm/index.php">Lab 8 - Midterm</a></li>
            <li class="list-group-item"><a href="../Lab 9 - Javascript/index.html">Lab 9 - Javascript</a></li>
            <li class="list-group-item"><a href="../Lab 9 - More MySQL/index.php">Lab 9 - More MySQL</a></li>
<li class="list-group-item"><a href="../Lab 10 - Elements by ID/index.php">Lab 10 - Elements by ID</a></li>
<li class="list-group-item"><a href="../Lab 11 - XML/index.php">Lab 11 -XML</a></li>
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
                		<h2>Sessions <small>Lab 5</small></h2><br>
                    <a href ="s1.php">Session #1</a>
					<br>
					<a href ="s2.php">Session #2</a>
					<br>
					<a href ="s3.php">Session #3</a>
                
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
