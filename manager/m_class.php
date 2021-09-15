<?php

class m_detail

{
	function m_detail()
	{	
		switch($_REQUEST['view'])
		{			
		case'mg_profile':			
		include_once("mg_profile.php");
		break;		
			
		case'm_changepass':				
		include_once("m_changepass.php");
		break;
		
		case'm_feedback':				
		include_once("m_feedback.php");
		break;	
		case'm_feedback':				
		include_once("m_feedback.php");
		break;
		
		case'm_view_feedback':				
		include_once("m_view_feedback.php");
		break;
		case'm_view_feedback1':				
		include_once("m_view_feedback1.php");
		break;
		
		
		case'mgr_complaints':				
		include_once("mgr_complaints.php");
		break;
		case'reply_mgr_complaints':				
		include_once("reply_mgr_complaints.php");
		break;
		
		case'report_mgr_complaints':				
		include_once("report_mgr_complaints.php");
		break;
		case'mgr_view_report':				
		include_once("mgr_view_report.php");
		break;
		case'mgr_view_report1':				
		include_once("mgr_view_report1.php");
		break;
		
		case'all_exec':				
		include_once("all_exec.php");
		break;
		case'allex_details':				
		include_once("allex_details.php");
		break;
		
		case'mgr_all_complaints':				
		include_once("mgr_all_complaints.php");
		break;
        }
	}
     
 }
?>