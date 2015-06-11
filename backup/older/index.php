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
    <link href="css/bootstrapflatly.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll logo" href="#page-top">caomicc</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About Me</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Portfolio<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
<?php /*?>            				<li><a class="page-scroll" href="#portfolio">What I Can Make</a></li>
<?php */?>            		<li><a class="page-scroll" href="#skills">Skills</a></li>
           					<li><a class="page-scroll" href="#history">Work History</a></li>
           					<li class="divider"></li>
           					<li><a href="../files/resume.pdf">Resume</a></li>
          				</ul>
                    </li>
                    <li class="dropdown">
                    	<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Class Work<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                        <li><a class="page-scroll" href="#classwork">Class One</a></li>
                        <li><a class="page-scroll" href="#classworkTwo">Class Two</a></li>
                        <li><a class="page-scroll" href="#classworkThree">Class Three</a></li>
                        <li><a class="page-scroll" href="#classworkFour">Class Four</a></li>
                        <li><a class="page-scroll" href="#classworkFive">Class Five</a></li>
                        <li><a class="page-scroll" href="#classworkSix">Class Six</a></li>
                        <li><a class="page-scroll" href="#classworkSeven">Class Seven</a></li>

                        </ul>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Let's Chat</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br><br>
                   <img src="../img/selfiez.jpg" class="img-circle" width="300px">
                    <h1 class="swurlyfont">Cameron Omiccioli</h1><hr/>
                    <h4>Front-End Web Developer and Designer</h4>
                    <br><br><br>
                    <!--<p><strong>Usage Instructions:</strong> Make sure to include the <code>scrolling-nav.js</code>, <code>jquery.easing.min.js</code>, and <code>scrolling-nav.css</code> files. To make a link smooth scroll to another section on the page, give the link the <code>.page-scroll</code> class and set the link target to a corresponding ID on the page.</p>-->
                    
                    
                    
                    <a class="btn btn-default page-scroll" href="#about">Click Me to Scroll Down!</a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12"><br><br>
                    <h1>My name is Cam and I love designing and developing websites.</h1>
                    <p>I'm a front-end developer who is determined to synchronize usability and elegance to create responsive websites. I've been using HTML and CSS for six years and have been an Adobe Certified Associate for four. Recently though, I've developed a certain fondness for Squarespace and Twitter Bootstrap.</p>
<p>
Right now I'm still in the process of earning my bachelor's. I'm studying Computer Science with a concentration in Information Systems at Framingham State University. I'll be finishing that up in Spring 2016.</p>
<div class="col-md-6"><h3>Likes:</h3>
<ul class="text-left">
<li>Animals</li>
<li>Medicine</li>
<li>Netflix</li>
</ul></div>
<div class="col-md-6"><h3>Dislikes:</h3>
<ul class="text-left">
<li>Haters</li>
</ul></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <?php /*?><section id="portfolio" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Stuff I have Made</h1>
                 
                </div>
            </div>
           
            
        </div>
    </section><?php */?>
    
     <section id="skills" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Skills</h1>
                    
                    <div class="col-lg-4"><div class="well"><img src="../img/html5css3.png" class="img-thumbnail"><h3>Languages</h3>
          			<ul class="text-left">
         			<li>HTML5</li>
         			<li>CSS3</li>
         			<li>jQuery/jQuery UI</li>
         			<li>some PHP</li>
        			</ul>       
                 </div></div>
                 <div class="col-lg-4"><div class="well"><img src="../img/Logo-Adobe.png" class="img-thumbnail"><h3>Programs</h3>
                 <ul class="text-left">
                 <li>Adobe Photoshop CC</li>
                 <li>Adobe Dreamweaver (ACA)</li>
                 <li>Adobe Muse CC</li>
                 <li>Adobe Illustrator CC</li>
                 </ul>
                 </div></div>
                 <div class="col-lg-4"><div class="well"><img src="../img/booty.png" class="img-thumbnail"><h3>Content Management Systems & BoilerPlates</h3>
                 <ul class="text-left">
                 <li>Concrete5.7.1</li>
                 <li>Squarespace</li>
                 <li>Twitter Bootstrap</li>
                 </ul>
                 </div></div><br><br>
                           <a class="btn btn-default page-scroll" href="#history">Click me to see my Work History</a>

                </div>
            </div>
           
            
        </div>
    </section>
    
     <section id="history" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Where I've Been</h1>
                 <div class="col-lg-4"><div class="well"><img src="../img/wellesley.png" width="300" height="300" longdesc="http://www.wellesley.edu" class="img-thumbnail"><h3>Wellesley College</h3><br><h4>May 2011 - November 2012</h4>
          <ul class="text-left">
          <li>Mantained the human resources website</li>
          <li>Updated links and posted updates in news block</li>
          <li>Created sub-pages for the HealthyYou initiative and other benefits</li>
          <li>Created miscellaneous graphics for the website</li>
          </ul>       
                 
                 
                 </div></div>
                 <div class="col-lg-4"><div class="well"><img src="../img/fdr.png" width="300" height="300" longdesc="http://fdrms.org" class="img-thumbnail"><h3>Framingham Downtown Renaissance</h3>
                 <h4>January 2014 - June 2014</h4>
                 <ul class="text-left">
                 <li>Worked with a small team of three</li>
                 <li>Used the SquareSpace platform for client's ease of use</li>
                 <li>Created graphics and headers, as well as taking pictures for the pages</li>
                 <li>Gathered information about local businesses for website directory</li>
                 </ul>
                 </div></div>
                 <div class="col-lg-4"><div class="well"><img src="../img/mwrta.png" width="300" height="300" longdesc="http://mwrta.com" class="img-thumbnail"><h3>MetroWest Regional Transit Authority</h3><h4>June 2014 - </h4>
                 <ul class="text-left">
                 <li>Creating mobile friendly website</li>
                 <li>Using Concrete5 and Twitter Bootstrap 3</li>
                 <li>Creating databases for route display along with scheduling information</li>
                 <li>Designing images of buses and banners</li>
                 <li>Assisting in customer outreach, travel training, and communications</li>
                 </ul>
                 </div></div>
                </div>
            </div>
           
            
        </div>
    </section>

    <!-- Contact Section -->
    <section id="classwork" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Class One:</h1>
                    
                    <?php
echo "<h2>Hello World!</h2>";
echo "<img src='img/helloworld.png' width='500px'>";
?> 
                    
                </div>
            </div>
        </div>
    </section>
    
    <section id="classworkTwo" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Class Two:</h1>
                    <h2>Lab: Name Game</h2><br>
                   <form name="form1" method="get" action="../labs/lab2/nameGame.php" class="form-horizontal">
  				   <div class="form-group">
                   <label class="col-md-6 control-label" for="firstName">Tell me, what is your first name?</label>
                   <div class="col-md-4">
				   <input name="firstName" type="text" id="firstName" size="40" maxlength="35" class="form-control input-md">
				   </div></div>
				   <p>
				   <input type="submit" name="Tell Me" value="Submit" class="btn btn-success" >
                   </p>
				   </form>
                   <br><hr><br>
                    
                    <h2>Lab: Pick Favorites</h2>
                    <form name="planets" method="get" action="../labs/lab2/favoriteoptions.php" class="form-horizontal">
 	<h3>Planets</h3>
  <div class="form-group">
   
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
  
  <h3>Constellations</h3>
  <div class="form-group"><div class="col-md-4 col-md-offset-4">
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
</form><br><br><br><br>
                </div>
            </div>
        </div>
    </section>
    
        <section id="classworkThree" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Class Three:</h1>
                    <h2>Lab: Puppy Bowl XI Roster</h2><br>
         				<div class="col-lg-4"><?php
        $puppy = array("Miss Martian"=>"Coonhound Mix", "Cara"=>"Shih Tzu", "Keno"=>"Terrier Mix", "Chicklet"=>"Australian Shepherd Mix", "Freckles"=>"Hound Mix", "Bubba"=>"Chihuahua Mix", "Bryan Adams"=>"Labrador Retriever Mix", "Titan"=>"American Bulldog", "Marley"=>"Labrador Retriever Mix", "Falcor"=>"Clumber Spaniel", "Henry"=>"English Springer Spaniel", "Papi"=>"Corgi Mix");
        
        echo "<h4>Roster</h4>";
		echo "<table class='text-left'>";
        foreach ($puppy as $keys => $breed) {
            echo "<tr><td style='padding-right:10px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }
		
        echo "</table></div><div class='col-lg-4'>";
        echo "<h4>Roster in ascending order by name</h4>";
		echo "<table class='text-left'>";
        ksort ($puppy);
        
        foreach ($puppy as $keys => $breed) {
 			echo "<tr><td style='padding-right:10px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }
		
        echo "</table></div><div class='col-lg-4'>";
        echo "<h4>Roster in descending order by name</h4>";
		echo "<table class='text-left'>";
        krsort ($puppy);
        
        foreach ($puppy as $keys => $breed) {
             echo "<tr><td style='padding-right:10px;'>" . $keys . " </td><td> " . $breed . "</td></tr>";
        }      
        echo "</table></div>";        
    ?></br>&nbsp;</br>&nbsp;</br><p class="text-left">Source: <a href="http://www.animalplanet.com">AnimalPlanet</a></p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="classworkFour" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Class Four:</h1>
                    <h2>Lab: Strings</h2><br>
                    
                    <form name="form2" method="get" action="../labs/lab4/stringy.php" class="form-horizontal">      
 					<div class="form-group">
                    <label class="col-md-6 control-label" for="stringName">Tell me, What is your name? Use a Comma!</label>
  					
                    <div class="col-md-4">
                    <input name="stringName" type="text" id="stringName" size="25" aria-describedby="name" class="form-control input-md"><br>Example: Lecter,Hannibal<br></div></div>
  					<input type="submit" name="Submit" value="Submit" class="btn btn-success">
					</form>
                    <hr>
                    <h2>Lab: Functions</h2><br>
         				
					<form class="form-horizontal" name="functionform" method="get" action="../labs/lab4/funky.php">
					<label >Let's change that positivity!</label><br>
  					<div class="form-group">
                    <label class="col-md-6 control-label" for="num"> What number would you like to test?</label>
  					 <div class="col-md-4"><input name="num" type="number" id="num" size="25" class="form-control input-md"></div></div>
  					<input type="submit" name="Submit" value="Submit" class="btn btn-success">
					</form>
                    
					<hr>
                    <h2>Lab: Conversions</h2><br>
                    
                    <form id="tempform" name="tempform" method="get" action="../labs/lab4/temp.php" class="form-horizontal">
                    <div class="form-group">
                    <label class="col-md-6 control-label" for="num">Please enter a tempurature!! </label>
                    <div class="col-md-4"><input name="num" type="number" id="num" size="10" maxlength="8" class="form-control input-md" /></div></div>
                    
                    <div class="form-group">
                    
                    <label>And what are we converting your temp into today, sir?</label>
       
        			<div class="radio"><label><input name="type" type="radio" value="f" checked="checked" />Fahrenheit, please!</label></div>
       			 	<div class="radio"><label><input type="radio" name="type" value="c"/>I'll take some Celsius.</label></div></div>
                    <label><input type="submit" name="Submit" value="Submit" class="btn btn-success" /></label>
					</form>
                </div>
            </div>
        </div>
    </section>
    
    <section id="classworkFive" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Class Five:</h1>
                    <h2>Lab: Include</h2><br>
                    <form name="includeform" method="get" action="../labs/lab5/funkyclass5.php" class="form-horizontal">
					Let's change that positivity, using include!<br>
  					<div class="form-group">
                    <label  class="col-md-6 control-label"for="num"> Won't you please enter a number for me?</label>
                    <div class="col-md-4">
 					<input name="num" type="number" id="num" size="25" class="form-control input-md"></div></div>
                    
 					<input type="submit" name="Submit" value="Submit" class="btn btn-success">
					</form>
                    <hr>
                    <h2>Lab: Sessions</h2><br>
                    <a href ="../labs/lab5/s1.php">Session #1</a>
					<br>
					<a href ="../labs/lab5/s2.php">Session #2</a>
					<br>
					<a href ="../labs/lab5/s3.php">Session #3</a>
                </div>
            </div>
        </div>
    </section>
    
        <section id="classworkSix" class="section-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Class Six:</h1>
                    <h2>Lab: Cookies!</h2><br>
                    <form name="cookiesform" method="get" action="../labs/lab6/eatingallmycookies.php" class="form-horizontal">
  				   <div class="form-group">
                   <label  class="col-md-6 control-label"for="cookiesName">What type of cookie would you like? </label>
				   <div class="col-md-4">
                   <input name="cookiesName" type="text" id="cookiesName" size="40" maxlength="35" class="form-control input-md">
                   </div></div>
				  <p>				 <input type="submit" name="Give Me The Cookie" value="Submit" class="btn btn-success"> 
                 </p>
					</form><hr>
                   <h2>Lab: SQL Sessions & Tables!</h2>
                   
<?php
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";   

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

$query = "SELECT cusID, cusFirst, cusLast FROM cusTab";
$result = mysql_query($query);
$num = mysql_num_rows($result);

echo "<table><tr><th>ID Num.</th><th>Full Name</th></tr>";

while ($row = mysql_fetch_array($result)) {
	$cusID = $row['cusID'];
	$cusFirst = $row['cusFirst'];
	$cusLast = $row['cusLast'];
	
	print "<tr>";
	print "<td>$cusID</td>";
	print "<td>$cusFirst $cusLast</td>";
	print "</tr>";}
echo "</table>";
?> 
<br><br><p>
Incase you want to view this on another page, you can <a href="../labs/lab6/sqlconnect.php">click here!</a></p>
                </div>
            </div>
        </div>
    </section>
    
    
            <section id="classworkSeven" class="section-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<h1>Class Seven:</h1>
                    <h2>Lab: Updating Tables!</h2><br>
                    <br>
					<h1>List Customers</h1>

  
  
<?php

// this connects To database
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";    

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

// the student file is sorted last name, first name
$query = "select * from cusTab order by cusLast, cusFirst";
$result = mysql_query($query);
$num = mysql_num_rows($result);
// print "There are currently $num students on file<br><br>";
 
print "<table>";
print "<tr><td><b>Last Name</b></td>";
print "<td><b>$First Name</b></td>";
print "<td><b>Address</b></td>";
print "<td><b>Change</b></td>";
print "<td><b>Delete</td></b></tr>";

while ($row = mysql_fetch_array($result)) {
	$cusID = $row['cusID'];
	$cusFirst = $row['cusFirst'];
	$cusLast = $row['cusLast'];
	$cusStreet = $row['cusStreet'];
	$cusZip = $row['cusZip'];
	print "<tr>";
	print "<td>$cusLast</td>";
	print "<td>$cusFirst</td>";
	print "<td>$cusStreet</td>";
//	print "$cusID $cusFirst $cusLast $cusAddress $cusZip ";
	print "<td><a href=customer_connect.php?action=u&id=";
	print $cusID;
//  remove the <br> from this line	
	print ">Change</a></td>";	
//  and now add a second link for a delete
//	except I don't need to go to the update form
//  so I am going directly to the update program
	
	print "<td><a href=customer_connect.php?action=d&id=";
	print $cusID;
	print "> Delete </a></td>";	
	print "</tr>";
}
print "</table>";
?>
</p>
<br>

<!-- note that I create a link to the update form for an add here               -->
<!-- it passes an update code of 'a' so that the update form knows it is an add -->
<a href="../labs/lab7/customer_connect.php?action=a">Add a Customer</a>
                    <a href="customer_list.php">Customer List!/a>
                    <hr>
                   
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Let's Chat</h1>
                	
                    <form class="form-horizontal">
					<fieldset>

<!-- Form Name -->
<legend>Get in Contact!</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="Hannibal Lecter" class="form-control input-md" required type="text">
  <span class="help-block">*required</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" placeholder="youremail@email.com" class="form-control input-md" required type="text">
  <span class="help-block">*required</span>  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">Have the lambs stopped screaming?</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Where did you hear about me?</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Friends</option>
      <option value="2">Me</option>
      <option value="3">Google</option>
      <option value="4">Your Mom</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit">Ready?</label>
  <div class="col-md-8">
    <button id="submit" name="submit" class="btn btn-success">Submit!</button>
    <button id="clear" name="clear" class="btn btn-danger">Clear!</button>
  </div>
</div>

</fieldset>
					</form>
                
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted">© 2015 Cameron Omiccioli, Design by <a href="http://caomicc.com">Caomicc</a></p>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>
