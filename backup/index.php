<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CSCI373 - Cameron Omiccioli</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,400italic|Pacifico|Martel+Sans' rel='stylesheet' type='text/css'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        
            <ul class="sidebar-nav">
            
                <li class="sidebar-brand">
                    <a href="#">
                        caomicc
                    </a>
                </li>
              
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Lab 2 - Name Game</a></li>
            <li class="list-group-item"><a href="#">Lab 2 - Picking Favorites</a></li>
            <li class="list-group-item"><a href="#">Lab 3 - Puppy Bowl</a></li>
            <li class="list-group-item"><a href="#">Lab 4 - Named Strings</a></li>
            <li class="list-group-item"><a href="#">Lab 4 - Sign Changes</a></li>
            <li class="list-group-item"><a href="#">Lab 4 - Tempurature Conversions</a></li>
            <li class="list-group-item"><a href="#">Lab 5 - Including</a></li>
			<li class="list-group-item"><a href="#">Lab 5 - Sessions</a></li>
            <li class="list-group-item"><a href="#">Lab 6 - Cookies</a></li>
            <li class="list-group-item"><a href="#">Lab 6 - MySQL</a></li>
            <li class="list-group-item"><a href="#">Lab 7 - More MySQL</a></li>
            <li class="list-group-item"><a href="#">Lab 8 - Midterm</a></li>
          </ul><br>
        	<li><a href="#">Work History</a></li>
            <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
               <div class="menu-div"><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a></div>
                <div class="row">
                	<div class="col-md-3">
               			<img src="img/selfie.png" class="img-circle" max-width="150px" width="100%"/>
                	</div>
                    <div class="col-md-9" id="infohead">
                        <h1 class="swurlyfont">Cameron Omiccioli</h1>  
                    	<h3>Front-End Web Developer and Designer</h3>
                        <h4>My name is Cam and I love designing and developing websites.</h4>
                    <p>I'm a front-end developer who is determined to synchronize usability and elegance to create responsive websites. I've been using HTML and CSS for six years and have been an Adobe Certified Associate for four. Recently though, I've developed a certain fondness for Squarespace and Twitter Bootstrap.</p>
<p>
Right now I'm still in the process of earning my bachelor's. I'm studying Computer Science with a concentration in Information Systems at Framingham State University. I'll be finishing that up in Spring 2016.</p>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-12"><br><br>
                     </div>
                </div>
                
            </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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
