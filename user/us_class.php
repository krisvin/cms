<?php

class us_detail

{
	function us_detail()
	{	
		switch($_REQUEST['view'])
		{			
		
		case'send_complaints':			
		include_once("send_complaints.php");
		break;
		case'view_service_exec':			
		include_once("send_service_exec.php");
		break;
		case'manage_service_exec':			
		include_once("send_service_exec.php");
		break;
		case'u_feedback':			
		include_once("u_feedback.php");
		break;
		
		case'us_complaints':			
		include_once("us_complaints.php");
		break;
		
		
		case'us_view_complaints':			
		include_once("us_view_complaints.php");
		break;
		case'u_changepass':			
		include_once("u_changepass.php");
		break;
		
		case'us_profile':			
		include_once("us_profile.php");
		break;
		
		case'view_reports':			
		include_once("view_reports.php");
		break;
		case'view_reports1':			
		include_once("view_reports1.php");
		break;
		
        }
	}
     
 }
?>