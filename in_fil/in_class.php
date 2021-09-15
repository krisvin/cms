<?php

class in_detail

{
	function in_detail()
	{	
		switch($_REQUEST['view'])
		{			
		case'login':	
		
		include_once("login.php");
		break;
		case'us_reg':	
		
		include_once("us_reg.php");
		break;	
		
		case'aboutus':			
		include_once("aboutus.php");
		break;
		
		case'contactus':	
		
		include_once("contactus.php");
		break;	
        }
	}
     
 }
?>