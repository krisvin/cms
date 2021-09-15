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
<title>Complaint Management System ::: Service Executive</title>
<meta name="keywords" content="" />
<meta name="Cool Black" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" media="screen" />
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
			<li class="current_page_item"><a href="executivehome.php">Home</a></li>
			<li><a href="executivehome.php?view=ex_complaints">complaints</a></li>
			<li><a href="executivehome.php?view=ex_changpwd">change password</a></li>
			<li></li>
			<li><a href="executivehome.php?log=out">Logout</a></li>
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
					  <li><a href="executivehome.php?view=ex_profile">Profile</a></li>
                      <li><a href="executivehome.php?view=ex_changpwd">Change Password</a></li>
					  <li><a href="executivehome.php?view=ex_feedback">Feedback</a></li>
				  </ul>
				</li>
				<li>
					<h2>Complaints</h2>
					<ul>
						<li><a href="executivehome.php?view=ex_complaints">View Complaints</a></li>
						
                        
						<li><a href="executivehome.php?view=ex_pending_co">Pending Complaints</a></li>
						<!--
                        
						<li><a href="executivehome.php?view=ex_sendreport">Send Report</a></li>-->
                        <li><a href="executivehome.php?view=view_ex_report">View Report</a></li>
					
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
			$class="ex_class.php";
			if(file_exists($class))
			{
				include_once($class);
			 $obj=new ex_detail;	
			}
		}
		else
		{
        
        ?>
			<div class="post">
				<h1 class="title"><a href="">Welcome Service Executive...</a></h1>
					<div class="entry">
                    <img src="../images/Service Executive.jpg" width="670" height="195" />
						
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