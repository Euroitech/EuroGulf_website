
<?php include('dashboard.php')?>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Training Calendar New Addition
    </div>
    <?php

$con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$status = "";
if(isset($_POST['submit']))
{
$trn_date = date("Y-m-d H:i:s");
$calender1=$_REQUEST['calender1'];
$calender1=preg_replace('/[^A-Za-z0-9\-]/', '', $calender1);
$calender2=$_REQUEST['calender2'];
$calender2=preg_replace('/[^A-Za-z0-9\-]/', '', $calender2);
$calender3=$_REQUEST['calender3'];
$calender3=preg_replace('/[^A-Za-z0-9\-]/', '', $calender3);
$calender4=$_REQUEST['calender4'];
$calender4=preg_replace('/[^A-Za-z0-9\-]/', '', $calender4);
$calender5=$_REQUEST['calender5'];
$calender5=preg_replace('/[^A-Za-z0-9\-]/', '', $calender5);
$ins_query="insert into new_calender (trn_date,calender1,calender2,calender3,calender4,calender5) values ('$trn_date','$calender1','$calender2','$calender3','$calender4','$calender5')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">


<div>

<form name="form" method="post" action=""> 

<p>Message 1:&nbsp;&nbsp;<input type="text" name="calender1" placeholder="Enter Message1" required /></p>
<p>Message 2:&nbsp;&nbsp;<input type="text" name="calender2" placeholder="Enter Message2" required /></p>
<p>Message 3:&nbsp;&nbsp;<input type="text" name="calender3" placeholder="Enter Message3" required /></p>
<p>Message 4:&nbsp;&nbsp;<input type="text" name="calender4" placeholder="Enter Message4" required /></p>
<p>Message 5:&nbsp;&nbsp;<input type="text" name="calender5" placeholder="Enter Message5" required /></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</body>
</html>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p style="text-align: right;color:#fff;">
              Design and Developed by <a href="http://www.creativetc.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>