<?php include('dashboard.php')?>
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     View Training Calendar
    </div>
<?php
$con = mysqli_connect("localhost","Creativetec","Ctech@123","eurogulfsafety");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Records</title>
<link rel="stylesheet" href="css/style2.css" />
</head>
<body>
<div class="form">


<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>message1</strong></th><th><strong>message2</strong></th><th><strong>message3</strong></th><th><strong>message4</strong></th><th><strong>message5</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>


<?php
$count=1;
$sel_query="Select * from new_calender ORDER BY id desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

<td align="center"><?php echo $row["calender1"]; ?></td>
<td align="center"><?php echo $row["calender2"]; ?></td>
<td align="center"><?php echo $row["calender3"]; ?></td>
<td align="center"><?php echo $row["calender4"]; ?></td>
<td align="center"><?php echo $row["calender5"]; ?></td>
<td align="center"><a href="edit-calender.php?id=<?php echo $row["id"]; ?>" title="click for edit" onclick="return confirm('Are you sure you want to Edit this Message?')"><span class='glyphicon glyphicon-pencil'></span> Edit </a></td>
<td align="center"><a href="delete-calender.php?id=<?php echo $row["id"]; ?>" title="click for edit" onclick="return confirm('Are you sure you want to Delete this Message?')"><span class='glyphicon glyphicon-pencil'></span>Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>

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
