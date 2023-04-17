
<!DOCTYPE html>
<head>
<title>Euro Gulf Safety Admin Page</title>
  <link rel="shortcut icon" href="image/favicon.png" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- calendar -->

<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>

<script src="js/jquery.nicescroll.js"></script>

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="ds.php" class="logo">
        Dashboard
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
       
        <li id="header_notification_bar" class="dropdown">             
                    <p style="font-size: 22px;color:lightyellow;text-align: center; font-weight: 600;">Euro Gulf Safety Admin Page</p>
             </li>
        <!-- notification dropdown end -->
      
    </ul>
    
    
     
    <!--  notification end -->
</div>




</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="ds.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                   <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-tasks"></i>
                        <span>slider</span>
                    </a>
                    <ul class="sub">
                        <li><a href="add-slider.php">Add image</a></li>
                        <li><a href="view-slider.php">Edit image</a></li>
						
                    </ul>
                </li> 
                
                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>What's new</span>
                    </a>
                    <ul class="sub">
						<li><a href="add-wordsnew.php">Add whatsnew</a></li>
						<li><a href="view-whatsnew.php">Edit whatsnew</a> </li>   
                                     
                    </ul>
                </li>
                
                <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-th"></i>
                        <span>Upcoming Events</span>
                    </a>
                    <ul class="sub">
                        <li><a href="add-events.php">Add-upcoming events</a></li>
                        <li><a href="view-events.php">Edit-upcoming events</a></li>
                    </ul>
                </li>
                   <li class="sub-menu">
                    <a href="#">
                        <i class="fa fa-tasks"></i>
                        <span>Training Calendar</span>
                    </a>
                    <ul class="sub">
                        <li><a href="add-calender.php">Add-Training Calendar</a></li>
                        <li><a href="view-calender.php">Edit-Training Calendar</a></li>
						
                    </ul>
                </li> 
                 
             
              
              
                <li>
                    <a href="logout.php">
                        <i class="fa fa-user"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content end-->
<section id="main-content">
	<section class="wrapper">
		<div class="chart_agile">
			
			
			<div class="col-md-12 chart_agile_right">
				<div class="chart_agile_top">
					<div class="chart_agile_bottom">
						<div id="graph4"></div>
				
  <img alt="" src="images/Welcome1.jpg" width="100%" height="450px"/>
					</div>
				</div>
			</div>
						<div class="clearfix"></div>
		</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			    <p style="text-align: right;color:#fff;">
              Design and Developed by <a href="http://www.creativetec.in">Creative Technologies</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
</section>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->

</body>
</html>
