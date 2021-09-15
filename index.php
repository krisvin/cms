<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="jscript/gen_validatorv31.js" ></script>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Complaint Management System ::: Total Online Solutions</title>
<meta name="keywords" content="" />
<meta name="Cool Black" content="" />
<link href="default.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="logo">
		<h1><a href="#"><span>Complaint</span> Management</a></h1>
		<p>&nbsp;</p>
		<p>System</p>
	</div>
</div>
	<div id="menu">
		<ul id="main">
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<li><a href="index.php?view=login">Login</a></li>
			<li><a href="index.php?view=us_reg">Registration</a></li>
			<li><a href="index.php?view=aboutus">About Us</a></li>
			<li><a href="index.php?view=contactus">Contact Us</a></li>
		</ul>
	</div>
	
<!-- end header -->
<div id="wrapper">
	<!-- start page -->
	<div id="page">
    <div id="sidebar1" class="sidebar">
		  <ul>
				<li>
					<h2>Total Solutions</h2>
			
			</ul>
                    <img src="images/Small Business Solutions.jpg" width="231" />
				</li>
		  <li>Register to our site...</li>
                <li>Submit your complaints...</li>
                <li>Get quick responce...</li>
                </ul>
                </li>
                
                <ul>
				<li>
					<h2>Wide Categories</h2>
			
			</ul>
                    <img src="images/Category.jpg" width="231" />
				</li>
                <marquee direction="left" scrollamount="5">
                <font color="red">
		  <li><b>Mobile Phones, Laptops, Printers, Tablets, DVD Players, Televisions, Digital Cameras and more...</b></li>
          </font>
          </marquee>
            </ul>
            </li>
				
                      
		</ul>
	  </div>
		<!-- start content -->
		<div id="content1">
          <?php
        include_once("connect/conn.php");
        if($_REQUEST['view']<>"")
		{
			$class="in_fil/in_class.php";
			if(file_exists($class))
			{
				include_once($class);
			 $obj=new in_detail;	
			}
		}
		else
		{
        
        ?>
			<div class="post">
                <img src="images/Happy.jpg" width="707" height="155" />
					
			  <div class="entry">
                      
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Complaint Management System is a Web based solution, designed for the purpose of management of complients online. To submit your complaints on various brands available in the market, you need to be a member of the Complaint Management System family. Your complaints were examined by our technical experts and appropriate reports ware forwarded to you. The complaints ware solved within 10 working days by our team. Save your time and money. We are here to help you...
                <br />
                <br />
                <font color="#FF0000" size="+2"><blink><a href="index.php?view=us_reg">Register Now</a></blink> to submit your complaints!!!</font>
                <br />
                <br />
                <img src="images/Brands.jpg" width="700" height="129"/>
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
