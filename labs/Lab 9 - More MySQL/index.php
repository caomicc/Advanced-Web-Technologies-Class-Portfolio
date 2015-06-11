<?php

include ("dbConnect.php");
$action = $_REQUEST['action'];
$record_id = $_REQUEST['record_id'];
$sort = $_REQUEST['sort'];

switch ($action)
{
	case 'edit':
		$cusID = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : 0;

		$sql = "SELECT c.*
				FROM cusTab c
				WHERE cusID = {$cusID}";
		$result = $db->query($sql);

		if ($row = $result->fetch_assoc())
		{
			$cusID = $row['cusID'];
			$cusFirst = stripslashes($row['cusFirst']);
			$cusLast = stripslashes($row['cusLast']);
			$cusStreet = stripslashes($row['cusStreet']);
			$cusZip = $row['cusZip'];
			$cusSex = $row['cusSex'];
			$cusSource = $row['cusSource'];
			$cusAge = $row['cusAge'];
			$cusBirth = $row['cusBirth'];
			$cusComment = stripslashes($row['cusComment']);
			$cusEntered = $row['cusEntered'];
			$cusUpdated = $row['cusUpdated'];
		}
		else
		{
			$action = "";
		}
	case 'add':
		$source_ary = array();

		$sql = 'SELECT s.*
				FROM srcTab s';
		$result = $db->query($sql);

		while ($row = $result->fetch_assoc())
		{
			$source_ary[] = $row;
		}

		if (isset($_REQUEST['submit']))
		{
			$error = array();

			$field_ary = array(
				'cusFirst'	=> array(
					'var'	=> 'cusFirst',
					'req'	=> true,
				),

				'cusLast'	=> array(
					'var'	=> 'cusLast',
					'req'	=> true,
				),

				'cusStreet'	=> array(
					'var'	=> 'cusStreet',
					'req'	=> true,
				),

				'cusZip'	=> array(
					'var'	=> 'cusZip',
					'req'	=> true,
				),

				'cusSex'	=> array(
					'var'	=> 'cusSex',
					'req'	=> true,
				),

				'cusSource'	=> array(
					'var'	=> 'cusSource',
					'req'	=> false,
				),

				'cusAge'	=> array(
					'var'	=> 'cusAge',
					'req'	=> true,
				),

				'cusBirth'	=> array(
					'var'	=> 'cusBirth',
					'req'	=> false,
				),

				'cusComment'	=> array(
					'var'	=> 'cusComment',
					'req'	=> false,
				),
			);

			foreach ($field_ary as $var => $option)
			{
				if ($option['req'] && !$_REQUEST[$option['var']])
				{
					$_var = str_replace("_", " ", ucwords($var));
					$error[] = "Please enter a value for '{$_var}'";
				}

				${$var} = (is_string($_REQUEST[$option['var']])) ? addslashes($_REQUEST[$option['var']]) : $_REQUEST[$option['var']];
			}

			if (empty($error))
			{
				$cusUpdated = date("Y-m-d H:i:s");

				if ($action === "add")
				{
					$sql = "INSERT INTO cusTab (cusFirst, cusLast, cusStreet, cusZip, cusSex, cusSource, cusAge, cusBirth, cusComment, cusUpdated)
							VALUES ('{$cusFirst}', '{$cusLast}', '{$cusStreet}', '{$cusZip}', '{$cusSex}', '{$cusSource}', '{$cusAge}', '{$cusBirth}', '{$cusComment}', '{$cusUpdated}')";
				}
				else if ($action === "edit")
				{
					$sql = "UPDATE cusTab
							SET cusFirst = '{$cusFirst}', cusLast = '{$cusLast}', cusStreet = '{$cusStreet}', cusZip = '{$cusZip}', cusSex = '{$cusSex}', cusSource = {$cusSource}, cusAge = {$cusAge}, cusBirth = '{$cusBirth}', cusComment = '{$cusComment}', cusUpdated = '{$cusUpdated}'
							WHERE cusID = {$cusID}";
				}

				if (!$db->query($sql))
				{
					trigger_error("MySQL Error: " + $db->error, E_USER_ERROR);
				}

				$success = ($action === "add") ? "added" : "updated";
				$action = "edit";
				$cusID = $db->insert_id;

				$cusFirst = stripslashes($cusFirst);
				$cusLast = stripslashes($cusLast);
				$cusStreet = stripslashes($cusStreet);
				$cusComment = stripslashes($cusComment);
			}
		}
	break;

	case 'delete':
		$cusID = (isset($_REQUEST['id'])) ? $_REQUEST['id'] : 0;

		$sql = "SELECT c.*
				FROM cusTab c
				WHERE cusID = {$cusID}";
		$result = $db->query($sql);

		if ($row = $result->fetch_assoc())
		{
			$sql = "DELETE FROM cusTab where cusID = {$row['cusID']}";
			$db->query($sql);

			$success = sprintf("%s %s", $row['cusFirst'], $row['cusLast']);
		}
		else
		{
			$success = false;
		}
	default:
		$customer_ary = array();

		$sql = 'SELECT c.*
				FROM cusTab c';
		$result = $db->query($sql);

		while ($row = $result->fetch_assoc())
		{
			$customer_ary[] = $row;
		}
		$result->free();
	break;
}

$db->close();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Even More MySQL</title>

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
<h2>More MySQL <small>Lab 9</small></h2><br>
                        <table class="table table-hover table-bordered table-striped" >
<?php if ($action === "add" || $action === "edit"): ?>
	<?php if (!empty($error)): ?>
	<h3>Error:</h3>
	<ul class="error">
		<?php foreach ($error as $e): ?>
		<li><?php echo $e; ?></li>
		<?php endforeach; ?>
	</ul>
	<?php else: ?>
		<?php if ($success): ?>
		<p style="font-weight: bold;">
			Your record has been <?php echo $success . "!" . (($success === "added") ? " Customer ID: " . $cusID : ""); ?>
		</p>
		<?php endif; ?>
	<?php endif; ?>

	<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<input type="hidden" class="form-control" name="action" id="action" value="<?php echo $action; ?>" />
	<input type="hidden" name="id" class="form-control" id="id" value="<?php echo $cusID; ?>" />
    
    <div class="row">
	<div class="form-group">
    <label class="col-sm-2 control-label">First Name</label>
    	<div class="col-sm-4">
        	<input name="cusFirst" class="form-control" type="text" id="cusFirst" value="<?php echo $cusFirst;?>" size="27" maxlength="27">
        </div>
        </div></div>
        <br>
    <div class="row">
	<div class="form-group">
    
        <label class="col-sm-2 control-label">Last Name</label>
    	<div class="col-sm-4">
    		<input name="cusLast" class="form-control" type="text" id="cusLast" value="<?php echo $cusLast;?>" size="25" maxlength="25">
  		</div>
    </div>
    </div>
	<!--<div class="form-group">
  	<label class="col-sm-2 control-label">Last Name</label>
    	<div class="col-sm-4">
    		<input name="cusLast" class="form-control" type="text" id="cusLast" value=">" size="25" maxlength="25">
  		</div>
    </div>-->
    <br>
    <div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Street</label>
        <div class="col-sm-10">
			<input type="text" class="form-control" name="cusStreet" id="cusStreet" value="<?php echo $cusStreet; ?>" style="width: 300px;" />
		</div>
     </div>
     </div>
     <br>
     
     <div class="row">
	<div class="form-group">
	<label class="col-sm-2 control-label">Zip</label>
        <div class="col-sm-3">
			<input type="text" class="form-control" name="cusZip" id="cusZip" value="<?php echo $cusZip; ?>" style="width: 100px;" />
		</div>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Sex</label>
		<div class="col-sm-10">	
			<input type="radio"  name="cusSex" id="cusSex" value="m" <?php echo ($cusSex === "m") ? 'checked="checked"': ''; ?> /> Male<br />
			<input type="radio"  name="cusSex" id="cusSex" value="f" <?php echo ($cusSex === "f") ? 'checked="checked"': ''; ?> /> Female<br />
			<input type="radio" name="cusSex" id="cusSex" value="u" <?php echo ($cusSex === "u") ? 'checked="checked"': ''; ?> /> Not Given<br />
        </div>
    </div>
	</div>
    <br>
    <div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Source</label>
		<div class="col-sm-2">
			<select class="form-control" name="source" id="source">
			<?php foreach ($source_ary as $s): ?>
			<option value="<?php echo $s['srcID']; ?>" <?php echo ($cusSource === $s['srcID']) ? 'selected="selected"': ''; ?>><?php echo $s['srcName']; ?></option>
			<?php endforeach; ?>
			</select>
        </div></div></div>
        <br>
	<div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Age</label>
    	<div class="col-sm-2">
			<input type="text" class="form-control" name="cusAge" id="cusAge" value="<?php echo $cusAge; ?>" />
		</div>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Birthday</label>
    	<div class="col-sm-3">
			<input type="date" class="form-control" name="cusBirth" id="cusBirth" value="<?php echo $cusBirth; ?>" />
		</div>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="form-group">
	<label class="col-sm-2 control-label">Comment</label>
    	<div class="col-sm-3">
			<textarea name="comment" class="form-control" name="cusComment" id="cusComment"><?php echo $cusComment; ?></textarea>
		</div>
    </div>
	</div>
    <br>
    <div class="row">
    <div class="form-group">
<br>
<input type="submit" name="submit" id="submit" value="Submit" />
	</div>
		</div>
	</form>

	<p><br><a href="<?php echo $_SERVER['PHP_SELF']; ?>"><button class="btn btn-primary">Back to index</button></a></p>
	<?php else: ?>
	<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=add"><button class="btn btn-primary">Add new record</button></a></p>
	<?php if ($action === "delete" && $success): ?>
		<p style="font-weight: bold;"><?php echo $success; ?> has been deleted from the Customer Table</p>
	<?php endif; ?>
	<p>There are currently <?php echo count($customer_ary); ?> customers on file.</p>
	<table class="table table-hover table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>Address</th>
				<th>cusZip</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($customer_ary as $customer): ?>
			<tr>
				<td><?php echo $customer['cusID']; ?></td>
				<td><?php echo $customer['cusFirst']; ?></td>
				<td><?php echo $customer['cusLast']; ?></td>
				<td><?php echo $customer['cusAge']; ?></td>
				<td><?php echo ($customer['cusStreet']) ? $customer['cusStreet'] : 'N/A'; ?></td>
				<td><?php echo $customer['cusZip']; ?></td>
				<td>
					<a href="<?php echo $_SERVER['PHP_SELF'] . '?action=edit&amp;id=' . $customer['cusID']; ?>">Edit</a> &dash;
					<a href="<?php echo $_SERVER['PHP_SELF'] . '?action=delete&amp;id=' . $customer['cusID']; ?>" onclick="return confirmDelete('<?php echo sprintf("%s %s", $customer['cusFirst'], $customer['cusLast']); ?>');">Delete</a>
				</td>
			</tr >
		<?php endforeach; ?>
		</tbody>
	</table>
	<?php endif; ?>
  
</ul>
</nav>
<br />
</div></div>
<div class="row"><div class="col-lg-6">

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
