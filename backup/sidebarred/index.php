<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cameron Omiccioli CSCI373</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

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
                        cameron omiccioli
                    </a>
                </li>
                <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Labs <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Lab 2 - Name Game</a></li>
            <li><a href="#">Lab 2 - Picking Favorites</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 3 - Puppy Bowl</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 4 - Named Strings</a></li>
            <li><a href="#">Lab 4 - Sign Changes</a></li>
            <li><a href="#">Lab 4 - Tempurature Conversions</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 5 - Including</a></li>
			<li><a href="#">Lab 5 - Sessions</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 6 - Cookies</a></li>
            <li><a href="#">Lab 6 - MySQL</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 7 - More MySQL</a></li>
            <li class="divider"></li>
            <li><a href="#">Lab 8 - Midterm</a></li>
          </ul>
        </li>
              
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Cameron Omiccioli</h1>
                        <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens, the page content will be pushed off canvas.</p>
                        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
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
    </script>

</body>

</html>
