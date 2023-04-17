
<?php include('dashboard.php')?>

<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
      What's New New Addition 
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
$name=$_REQUEST['name'];
 $name=preg_replace('/[^A-Za-z0-9\-]/', '', $name);
$name1=$_REQUEST['name1'];
 $name1=preg_replace('/[^A-Za-z0-9\-]/', '', $name1);
$name2=$_REQUEST['name2'];
 $name2=preg_replace('/[^A-Za-z0-9\-]/', '', $name2);
$name3=$_REQUEST['name3'];
 $name3=preg_replace('/[^A-Za-z0-9\-]/', '', $name3);
$name4=$_REQUEST['name4'];
 $name4=preg_replace('/[^A-Za-z0-9\-]/', '', $name4);
$ins_query="insert into new_words (trn_date,name,name1,name2,name3,name4) values ('$trn_date','$name','$name1','$name2','$name3','$name4')";
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

<p>Message 1:&nbsp;&nbsp;<input type="text" name="name" placeholder="Enter Message1" required /></p>
<p>Message 2:&nbsp;&nbsp;<input type="text" name="name1" placeholder="Enter Message2" required /></p>
<p>Message 3:&nbsp;&nbsp;<input type="text" name="name2" placeholder="Enter Message3" required /></p>
<p>Message 4:&nbsp;&nbsp;<input type="text" name="name3" placeholder="Enter Message4" required /></p>
<p>Message 5:&nbsp;&nbsp;<input type="text" name="name4" placeholder="Enter Message5" required /></p>
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