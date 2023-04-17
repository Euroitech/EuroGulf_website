<?php include('dashboard.php')?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
Upcomming Events Edit Page
    </div>


<?php

$con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_REQUEST['id'];
$query = "SELECT * from new_events where id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">


<?php
$status = "";
if(isset($_POST['submit']))
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$event1 =$_REQUEST['event1'];
$event1=preg_replace('/[^A-Za-z0-9\-]/', ' ', $event1);
$event2 =$_REQUEST['event2'];
$event2=preg_replace('/[^A-Za-z0-9\-]/', ' ', $event2);
$event3 =$_REQUEST['event3'];
$event3=preg_replace('/[^A-Za-z0-9\-]/', ' ', $event3);
$event4 =$_REQUEST['event4'];
$event4=preg_replace('/[^A-Za-z0-9\-]/', ' ', $event4);
$event5 =$_REQUEST['event5'];
$event5=preg_replace('/[^A-Za-z0-9\-]/', ' ', $event5);
$update="update new_events set trn_date='".$trn_date."',event1='".$event1."',event2='".$event2."',event3='".$event3."',event4='".$event4."',event5='".$event5."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully.";
header("Location: view-events.php");
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>



<div>
<form name="form" method="post" action=""> 

<p>Message 1:<input type="text" name="event1" placeholder="Enter Message1" required value="<?php echo $row['event1'];?>" /></p>
<p>Message 2:<input type="text" name="event2" placeholder="Enter Message2" required value="<?php echo $row['event2'];?>" /></p>
<p>Message 3:<input type="text" name="event3" placeholder="Enter Message3" required value="<?php echo $row['event3'];?>" /></p>
<p>Message 4:<input type="text" name="event4" placeholder="Enter Message4" required value="<?php echo $row['event4'];?>" /></p>
<p>Message 5:<input type="text" name="event5" placeholder="Enter Message5" required value="<?php echo $row['event5'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php 


} 
?>



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
              Designed and Developed by <a href="http://www.creativetc.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
