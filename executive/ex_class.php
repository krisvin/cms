<?php

class ex_detail

{
	function ex_detail()
	{	
		switch($_REQUEST['view'])
		{			
		case'ex_profile':			
		include_once("ex_profile.php");
		break;		
			
		case'ex_changepass':				
		include_once("ex_changepass.php");
		break;
		
		case'ex_feedback':				
		include_once("ex_feedback.php");
		break;	
		
		case'ex_complaints':				
		include_once("ex_complaints.php");
		break;
		case'reply_ex_complaints':				
		include_once("reply_ex_complaints.php");
		break;
		
		case'ex_sendreport':				
		include_once("ex_sendreport.php");
		break;
		
		case'ex_pending_co':				
		include_once("ex_pending_co.php");
		break;
		
		case'ex_changpwd':				
		include_once("ex_changpwd.php");
		break;
		
		case'ex_feedback':				
		include_once("ex_feedback.php");
		break;
		case'view_ex_report':				
		include_once("view_ex_report.php");
		break;
		case'view_ex_report1':				
		include_once("view_ex_report1.php");
		break;
        }
	}
     
 }
?>