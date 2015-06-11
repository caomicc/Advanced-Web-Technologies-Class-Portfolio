<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lab 2 - Favorite Picker</title>
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
            <li class="list-group-item"><a href="index.php">Lab 2 - Picking Favorites</a></li>
            <li class="list-group-item"><a href="../Lab 3 - Puppybowl/index.php">Lab 3 - Puppy Bowl</a></li>
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
                		<h2>Favorite Picker <small>Lab 2</small></h2>
                    <form name="planets" method="get" action="favoriteoptions.php" class="form-horizontal">
 	<h2>Planets</h2>
  <div class="form-group col-md-4" id="constellations">
   
    <input type="radio" name="planets" value="1">Mercury
    <br>
    <input type="radio" name="planets" value="2">Venus
    <br>
    <input type="radio" name="planets" value="3">Earth
    <br>
	<input type="radio" name="planets" value="4">Mars
    <br>
	<input type="radio" name="planets" value="5">Jupiter
    <br>
	<input type="radio" name="planets" value="6">Saturn
	<br>
    <input type="radio" name="planets" value="7">Neptune
	<br>
    <input type="radio" name="planets" value="8">Uranus
	<br>
    <input type="radio" name="planets" value="9">Pluto (forever in our hearts)
</div>
  <div class="row">
                <div class="col-lg-12">
  <h2>Constellations</h2>
  <div class="form-group"><div class="col-md-4">
    <select name="select" class="form-control input-md" max-width="40" >
	  <option value="a">Sirius</option>
      <option value="b">Ursa Major</option>
      <option value="c">Orion</option>
      <option value="d">Andromeda</option>
	  <option value="e">Taurus</option> 
      <option value="f">Libra</option> 
	  <option value="g">Little Dipper</option> 
	  <option value="h">Aries</option> 
	  <option value="i">Other</option> 
    </select><br></div>
</div><div class="col-md-12">
 <p>
    <input type="submit" name="Tell Me" value="Submit" class="btn btn-success" >
  </p></div>
</form>
                <div class="row">
                <div class="col-lg-12">
                <h3>Form</h3>

                <pre><code> 
&lt;form name=&quot;planets&quot; method=&quot;get&quot; action=&quot;favoriteoptions.php&quot; class=&quot;form-horizontal&quot;&gt;
 	&lt;h2&gt;Planets&lt;/h2&gt;
  &lt;div class=&quot;form-group col-md-4&quot; id=&quot;constellations&quot;&gt;
   
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;1&quot;&gt;Mercury
    &lt;br&gt;
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;2&quot;&gt;Venus
    &lt;br&gt;
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;3&quot;&gt;Earth
    &lt;br&gt;
 &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;4&quot;&gt;Mars
    &lt;br&gt;
 &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;5&quot;&gt;Jupiter
    &lt;br&gt;
	&lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;6&quot;&gt;Saturn
	&lt;br&gt;
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;7&quot;&gt;Neptune
	&lt;br&gt;
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;8&quot;&gt;Uranus
	&lt;br&gt;
    &lt;input type=&quot;radio&quot; name=&quot;planets&quot; value=&quot;9&quot;&gt;Pluto (forever in our hearts)
	&lt;/div&gt;
  	&lt;/div&gt;&lt;/div&gt;&lt;div class=&quot;row&quot;&gt;
                &lt;div class=&quot;col-lg-12&quot;&gt;
  &lt;h2&gt;Constellations&lt;/h2&gt;
  &lt;div class=&quot;form-group&quot;&gt;&lt;div class=&quot;col-md-4&quot;&gt;
    &lt;select name=&quot;select&quot; class=&quot;form-control input-md&quot; max-width=&quot;40&quot; &gt;
	  &lt;option value=&quot;a&quot;&gt;Sirius&lt;/option&gt;
      &lt;option value=&quot;b&quot;&gt;Ursa Major&lt;/option&gt;
      &lt;option value=&quot;c&quot;&gt;Orion&lt;/option&gt;
      &lt;option value=&quot;d&quot;&gt;Andromeda&lt;/option&gt;
	  &lt;option value=&quot;e&quot;&gt;Taurus&lt;/option&gt; 
      &lt;option value=&quot;f&quot;&gt;Libra&lt;/option&gt; 
	  &lt;option value=&quot;g&quot;&gt;Little Dipper&lt;/option&gt; 
	  &lt;option value=&quot;h&quot;&gt;Aries&lt;/option&gt; 
	  &lt;option value=&quot;i&quot;&gt;Other&lt;/option&gt; 
    &lt;/select&gt;&lt;br&gt;&lt;/div&gt;
&lt;/div&gt;&lt;div class=&quot;col-md-12&quot;&gt;
 &lt;p&gt;
    &lt;input type=&quot;submit&quot; name=&quot;Tell Me&quot; value=&quot;Submit&quot; class=&quot;btn btn-success&quot; &gt;
  &lt;/p&gt;&lt;/div&gt;
&lt;/form&gt;Code Here */      
                </code></pre>
            
            </div></div><div class="row">
              <div class="col-lg-12">
                <h3>File Location</h3>
                <pre><code>
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt; 
&lt;meta charset=&quot;utf-8&quot;&gt; 
&lt;title&gt;What are your favorites?&lt;/title&gt; 
&lt;/head&gt; &lt;body&gt;
&lt;?php echo &quot;&lt;h2&gt;Here's what you chose:&lt;/h2&gt;&quot;; 
$planetary = $_GET['planets']; 
$constellations = $_GET['select'];
switch ($planetary) {     
	case &quot;1&quot;:
		echo &quot;You chose Mercury&amp;nbsp&quot;;        
		break;     
	case &quot;2&quot;:         
		echo &quot;You chose Venus&amp;nbsp&quot;;         
		break;     
	case &quot;3&quot;:         
		echo &quot;You chose Earth&amp;nbsp&quot;;         
		break;     
	case &quot;4&quot;:         
		echo &quot;You chose Mars&amp;nbsp&quot;;         
		break;     
	case &quot;5&quot;:         
		echo &quot;You chose Jupiter&amp;nbsp&quot;;         
		break;     
	case &quot;6&quot;:         
		echo &quot;You chose Saturn&amp;nbsp&quot;;         
		break; 	
	case &quot;7&quot;:         
		echo &quot;You chose Neptune&amp;nbsp&quot;;         
		break; 	
	case &quot;8&quot;:        
 		echo &quot;You chose Uranus&amp;nbsp&quot;;         
		break; 	
	case &quot;9&quot;:         
		echo &quot;You chose Pluto (Good choice!)&amp;nbsp&quot;;
	    break;     
	default:         
		echo &quot;You didn't choose a planet...Go back and pick one.&amp;nbsp&quot;; } 
	
switch ($constellations) { 	
	case &quot;a&quot;:         
		echo &quot;and Sirius.&quot;;         
		break;     
	case &quot;b&quot;:         
		echo &quot;and Ursa Major&quot;;         
		break;     
	case &quot;c&quot;:         
		echo &quot;and Orion.&quot;;         
		break;     
	case &quot;d&quot;:         
		echo &quot;and Andromeda.&quot;;         
		break;     
	case &quot;e&quot;:         
		echo &quot;and Taurus.&quot;;         
		break; 	
	case &quot;f&quot;:         
		echo &quot;and Libra.&quot;;         
		break; 	
	case &quot;g&quot;:         
		echo &quot;and Little Dipper.&quot;;         
		break; 	
	case &quot;h&quot;:         
		echo &quot;and Aries.&quot;;         
		break; 	
	case &quot;i&quot;:         
		echo &quot;and another constellation.&quot;;         
		break;
	default:         
		echo &quot;You didn't choose a constellation...Go back and pick one.&amp;nbsp&quot;; } 
	 		} 
?&gt; 
&lt;hr&gt; 
&lt;a href=&quot;index.php&gt;Let's Go Home.&lt;/a&gt; 
&lt;/body&gt;
&lt;/html&gt;      
                </code></pre>
              </div></div>
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
