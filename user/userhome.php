<?php
session_start();
$username=$_SESSION['username'];
error_reporting("NOTICE");
include_once("../connect/conn.php");
if($_GET['log']=="out")
{
session_destroy();
echo"<script>window.location='../index.php'</script>";
}
if($username<>"")
{
	?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Complaint Management System ::: User</title>
<meta name="keywords" content="" />
<meta name="Cool Black" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span>Complaint</span> Management</a></h1>
		<p>&nbsp;</p>
		<p>System</p>
        <div align="center"><strong >Welcome &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><font color="#FFFFFF"><?php echo $username; ?></font>
	  </div>
	</div>
</div>
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="userhome.php">Home</a></li>
			<li><a href="userhome.php?view=send_complaints">complaints</a></li>
			<li></li>
			<li><a href="userhome.php?view=u_changepass">Change password</a></li>
			<li></li>
			<li><a href="userhome.php?log=out">Logout</a></li>
		</ul>
	</div>
	
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
		<div id="sidebar1" class="sidebar">
			<ul>
			  <li>
				<h2>Control Users</h2>
				  <ul>
					  <li><a href="userhome.php?view=us_profile">View Profile</a></li>
                      <li><a href="userhome.php?view=u_feedback">Feedback</a></li>
					 <li><a href="userhome.php?view=u_changepass">Change Password</a></li>
				  </ul>
				</li>
				<li>
					<h2>Complaints</h2>
					<ul>
						<li><a href="userhome.php?view=send_complaints">Send Complaints</a></li>
						
                        
						<li><a href="userhome.php?view=view_reports">View Reports</a></li>
						
                     
					<li><a href="userhome.php?view=us_complaints">View Complaints</a></li>
					</ul>
				</li>
			  
				  
			
				</li>
		  </ul>
    </div>
		<!-- start content -->
		<div id="content1">
          <?php
        include_once("../connect/conn.php");
        if($_REQUEST['view']<>"")
		{
			$class="us_class.php";
			if(file_exists($class))
			{
				include_once($class);
			 $obj=new us_detail;	
			}
		}
		else
		{
        
        ?>
			<div class="post">
				<h1 class="title"><a href="">Welcome User...</a></h1>
					<div class="entry">
						
				
					</div>
				</div>
                <?php
		}
		?>
        
        
		</div>
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end page -->
</div>
<div id="footer">
	<p class="copyright">&copy;&nbsp;&nbsp;2013 All Rights Reserved
</div>
</body>
</html>
<?php
}
else
{
	echo"<script>window.location='../index.php'</script>";
}
?>