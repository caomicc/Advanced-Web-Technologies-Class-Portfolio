<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lab 3 - Puppybowl</title>
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
            <li class="list-group-item"><a href="index.php">Lab 3 - Puppy Bowl</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Named Strings/index.php">Lab 4 - Named Strings</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Sign Changes/index.php">Lab 4 - Sign Changes</a></li>
            <li class="list-group-item"><a href="../Lab 4 - Celcius Conversion/index.php">Lab 4 - Celcius Conversions</a></li>
            <li class="list-group-item"><a href="../Lab 5 - Including/index.php">Lab 5 - Including</a></li>
			<li class="list-group-item"><a href="../Lab 5 - Sessions/index.php">Lab 5 - Sessions</a></li>
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
                    <h2>Puppybowl <small>Lab 3</small></h2><br>
         				<div class="col-lg-4"><?php
        $puppy = array("Miss Martian"=>"Coonhound Mix", "Cara"=>"Shih Tzu", "Keno"=>"Terrier Mix", "Chicklet"=>"Australian Shepherd Mix", "Freckles"=>"Hound Mix", "Bubba"=>"Chihuahua Mix", "Bryan Adams"=>"Labrador Retriever Mix", "Titan"=>"American Bulldog", "Marley"=>"Labrador Retriever Mix", "Falcor"=>"Clumber Spaniel", "Henry"=>"English Springer Spaniel", "Papi"=>"Corgi Mix");
        
        echo "<h3>Roster</h3>";
		echo "<table class='text-left'>";
        foreach ($puppy as $keys => $breed) {
            echo "<tr><td style='padding-right:20px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }
		
        echo "</table></div><div class='col-lg-4'>";
        echo "<h3>Roster in ascending order by name</h3>";
		echo "<table class='text-left'>";
        ksort ($puppy);
        
        foreach ($puppy as $keys => $breed) {
 			echo "<tr><td style='padding-right:20px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }
		
        echo "</table></div><div class='col-lg-4'>";
        echo "<h3>Roster in descending order by name</h3>";
		echo "<table class='text-left'>";
        krsort ($puppy);
        
        foreach ($puppy as $keys => $breed) {
             echo "<tr><td style='padding-right:20px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }      
        echo "</table></div>";        
    ?></br>&nbsp;</br>&nbsp;</br><p class="text-left">Source: <a href="http://www.animalplanet.com">AnimalPlanet</a></p>
                </div>
                
                     </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                <h3>Code</h3>

                <pre><code>&lt;?php
       $puppy = array( &quot;Miss Martian&quot;=&gt;&quot;Coonhound Mix&quot;, <br>		&quot;Cara&quot;=&gt;&quot;Shih Tzu&quot;, 
		&quot;Keno&quot;=&gt;&quot;Terrier Mix&quot;, 
		&quot;Chicklet&quot;=&gt;&quot;Australian Shepherd Mix&quot;, 
		&quot;Freckles&quot;=&gt;&quot;Hound Mix&quot;, 
		&quot;Bubba&quot;=&gt;&quot;Chihuahua Mix&quot;,
		&quot;Bryan Adams&quot;=&gt;&quot;Labrador Retriever Mix&quot;,
		&quot;Titan&quot;=&gt;&quot;American Bulldog&quot;,
		&quot;Marley&quot;=&gt;&quot;Labrador Retriever Mix&quot;, 
		&quot;Falcor&quot;=&gt;&quot;Clumber Spaniel&quot;, 
		&quot;Henry&quot;=&gt;&quot;English Springer Spaniel&quot;, 
		&quot;Papi&quot;=&gt;&quot;Corgi Mix&quot;
	echo &quot;&lt;h3&gt;Roster&lt;/h3&gt;&quot;;
    	echo &quot;&lt;table class='text-left'&gt;&quot;;
        foreach ($puppy as $keys =&gt; $breed) {
        	echo &quot;&lt;tr&gt;&lt;td style='padding-right:20px;'&gt;&quot; . $keys . &quot; &lt;/td&gt;&lt;td&gt; &quot; . $breed . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
            	}
        echo &quot;&lt;/table&gt;&lt;/div&gt;&lt;div class='col-lg-4'&gt;&quot;;
	echo &quot;&lt;h3&gt;Roster in ascending order by name&lt;/h3&gt;&quot;;
	echo &quot;&lt;table class='text-left'&gt;&quot;;
	ksort ($puppy);
        foreach ($puppy as $keys =&gt; $breed) {
 		echo &quot;&lt;tr&gt;&lt;td style='padding-right:20px;'&gt;&quot; . $keys . &quot; &lt;/td&gt;&lt;td&gt; &quot; . $breed . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
            	}
		echo &quot;&lt;/table&gt;&lt;/div&gt;&lt;div class='col-lg-4'&gt;&quot;;
        echo &quot;&lt;h3&gt;Roster in descending order by name&lt;/h3&gt;&quot;;
       	echo &quot;&lt;table class='text-left'&gt;&quot;;
        krsort ($puppy);
        foreach ($puppy as $keys =&gt; $breed) {
            	echo &quot;&lt;tr&gt;&lt;td style='padding-right:20px;'&gt;&quot; . $keys . &quot; &lt;/td&gt;&lt;td&gt; &quot; . $breed . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
        	} 
        echo &quot;&lt;/table&gt;&lt;/div&gt;&quot;;  
?&gt;</code></pre>
            
            </div></div>
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
