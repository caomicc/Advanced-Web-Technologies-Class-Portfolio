<?php 

// this connects To database
$hostname = "omiccioli373.db.4076890.hostedresource.com";
$username = "omiccioli373";
$password = "Csci373pw!";
$dbname="omiccioli373";    

mysql_connect($hostname,$username, $password) OR DIE ("Connection Failed");
mysql_select_db($dbname);

$action = $_REQUEST["action"];
if ($action == 'a') {
		$cusFirst = null;
		$cusLast = null;
		$cusStreet = null;
		$cusZip = null;
		$cusSource = null;
		$cusAge = null;
		$cusBirth = null;
		$cusComment = null;
		$cusEntered = null;
	
 } else {
	$id = $_REQUEST["id"];
	 	$query = "select * from cusTab where cusID = $id";
		$result = mysql_query($query) 
			or die(mysql_error());
		$row = mysql_fetch_array($result);
		$cusFirst = $row["cusFirst"];
		$cusLast = $row["cusLast"];
		$cusStreet = $row["cusStreet"];
		$cusZip = $row["cusZip"];
		$cusSource = $row["cusSource"];
		$cusAge = $row["cusAge"];
		$cusBirth = $row["cusBirth"];
		$cusComment = $row["cusComment"];
		$cusEntered = $row["cusEntered"];
		$cusUpdated = $row["cusUpdated"];

} // end if

?>




<html>
<head>
<title>Customer Entry Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head>

<body>
<h1>Please Enter customer Information</h1>
<form action="customer_action.php" method="get" name="form1" onSubmit="MM_validateForm('fname','','R','lname','','R','address','','R','city','','R','state','','R','zip','','RisNum','email','','RisEmail','phone','','RisNum');return document.MM_returnValue">
  <table width="59%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="28%"><font size="4">First Name</font></td>
      <td width="72%"><input name="cusFirst" type="text" id="cusFirst" value="<?php echo $cusFirst;?>" size="27" maxlength="27"></td>
    </tr>
    <tr> 
      <td><font size="4">Last Name</font></td>
      <td><input name="cusLast" type="text" id="cusLast" value="<?php echo $cusLast;?>" size="25" maxlength="25"></td>
    </tr>
    <tr> 
      <td><font size="4">Address</font></td>
      <td><input name="cusStreet" type="text" id="cusStreet" value="<?php echo $cusStreet;?>" size="35" maxlength="35"></td>
    </tr>
    <tr> 
      <td><font size="4">Zip</font></td>
      <td><input name="cusZip" type="text" id="cusZip" value="<?php echo $cusZip;?>" size="8" maxlength="5"></td>
    </tr>
    <tr>
      <td><font size="4">Sex</font></td>
      <td><p>
        <label>
          <input name="cusSex" type="radio" <?php if ($cusSex == "m") {echo ' checked=checked ';} ?> value="m" >
          Male</label>
        <br>
        <label>
          <input type="radio" name="cusSex" <?php if ($cusSex != "m") {echo ' checked=checked ';} ?> value="f" >
          Female</label>
        <br>
		<label>
          <input name="cusSex" type="radio" <?php if ($cusSex !== "m") {echo ' checked=checked ';} ?> value="o" >
          Other</label>
        <br>
      </p></td>
    </tr>
    <tr> 
      <td><font size="4">Age</font></td>
      <td><input name="cusAge" type="text" id="cusAge" value="<?php echo $cusAge;?>" size="5" maxlength="2"></td>
    </tr>
    <tr>
      <td><font size="4">Birthday</font></td>
      <td><label>
      <input name="cusBirth" type="text" id="cusBirth" value="" size="10" maxlength="8">
      
      mmddyyyy</label></td>
    </tr>
    <tr> 
      <td><font size="4">Comment</font></td>
      <td><textarea name="cusComment" id="cusComment" cols="45" rows="3"><?php echo $cusComment;?></textarea></td>
    </tr>
    <tr> 
	<tr>
		<td><font size="4"> Date</td>
		<td><label><input name="date" type="text" id="date" value="" size="10"> (YYYY-MM-DD)</label></td>
	</tr>
	<tr>
		<td><font size="4"> Updated</td>
		<td><label><input name="cusUpdated" type="text" id="cusUpdated" value="" size="10"> (YYYY-MM-DD)</label></td>
	</tr>
      <td>
      <!-- this bit of code passes the action and the id to the update program -->
      <!-- I use php to assign the proper values to each parm -->
     
      &nbsp;<input name="action" type="hidden" id="action" value="<?php echo $action;?>" />
      <input name="id" type="hidden" id="id" value="<?php echo $id;?>" /></td>
      <td><input type="submit" name="Submit" value="Submit">        </td>
    </tr>
  </table>
</form>
<p><a href="customer_list.php">Return</a></p>
</body>
</html>
