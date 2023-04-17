
<?php include('dashboard.php')?>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
      Upcoming Events New Addition
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
$event1=$_REQUEST['event1'];
 $event1=preg_replace('/[^A-Za-z0-9\-]/', '', $event1);
$event2=$_REQUEST['event2'];
 $event2=preg_replace('/[^A-Za-z0-9\-]/', '', $event2);
$event3=$_REQUEST['event3'];
 $event3=preg_replace('/[^A-Za-z0-9\-]/', '', $event3);
$event4=$_REQUEST['event4'];
 $event4=preg_replace('/[^A-Za-z0-9\-]/', '', $event4);
$event5=$_REQUEST['event5'];
 $event5=preg_replace('/[^A-Za-z0-9\-]/', '', $event5);
$ins_query="insert into new_events (trn_date,event1,event2,event3,event4,event5) values ('$trn_date','$event1','$event2','$event3','$event4','$event5')";
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

<p>Message 1:&nbsp;&nbsp;<input type="text" name="event1" placeholder="Enter Message1" required /></p>
<p>Message 2:&nbsp;&nbsp;<input type="text" name="event2" placeholder="Enter Message2" required /></p>
<p>Message 3:&nbsp;&nbsp;<input type="text" name="event3" placeholder="Enter Message3" required /></p>
<p>Message 4:&nbsp;&nbsp;<input type="text" name="event4" placeholder="Enter Message4" required /></p>
<p>Message 5:&nbsp;&nbsp;<input type="text" name="event5" placeholder="Enter Message5" required /></p>
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