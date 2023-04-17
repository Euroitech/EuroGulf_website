<?php include('dashboard.php')?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
  Training Calendar Edit Page
    </div>

<?php

$con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$id=$_REQUEST['id'];
$query = "SELECT * from new_calender where id='".$id."'"; 
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
$calender1 =$_REQUEST['calender1'];
$calender1=preg_replace('/[^A-Za-z0-9\-]/', '-', $calender1);
$calender2 =$_REQUEST['calender2'];
$calender2=preg_replace('/[^A-Za-z0-9\-]/', '-', $calender2);
$calender3 =$_REQUEST['calender3'];
$calender3=preg_replace('/[^A-Za-z0-9\-]/', '-', $calender3);
$calender4 =$_REQUEST['calender4'];
$calender4=preg_replace('/[^A-Za-z0-9\-]/', '-', $calender4);
$calender5 =$_REQUEST['calender5'];
$calender5=preg_replace('/[^A-Za-z0-9\-]/', '-', $calender5);
$update="update new_calender set trn_date='".$trn_date."', calender1='".$calender1."',calender2='".$calender2."',calender3='".$calender3."',calender4='".$calender4."',calender5='".$calender5."' where id='".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully.";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 

<p>Message 1:<input type="text" name="calender1" placeholder="Enter Message1" required value="<?php echo $row['calender1'];?>" /></p>
<p>Message 3:<input type="text" name="calender2" placeholder="Enter Message3" required value="<?php echo $row['calender2'];?>" /></p>
<p>Message 4:<input type="text" name="calender3" placeholder="Enter Message4" required value="<?php echo $row['calender3'];?>" /></p>
<p>Message 5:<input type="text" name="calender4" placeholder="Enter Message5" required value="<?php echo $row['calender4'];?>" /></p>
<p>Message 2:<input type="text" name="calender5" placeholder="Enter Message2" required value="<?php echo $row['calender5'];?>" /></p>
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
              Design and Developed by <a href="http://www.creativetc.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
