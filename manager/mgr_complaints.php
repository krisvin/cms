<?php
session_start();
$username=$_SESSION['username'];
$a1=mysql_query("select * from service_mgr where mgr_una='$username'") or die(mysql_error());
while($r1=mysql_fetch_array($a1))
{
 $mgr_id=$r1['mgr_id'];
}
error_reporting("NOTICE");
include_once("../connect/conn.php");
?>
<html>
<body>
 <div class="templatemo_box">
   	    <h2 align="center">View complaints from Admin</h2>
<?php


$comp_id=$_REQUEST['comp_id'];
$f=$_REQUEST['f'];
if($_REQUEST['f']='delete')
{
	mysql_query("delete  from complaints where solv_mgr='$mgr_id' and c_status='complete'") or die(mysql_error());

	
}


$p=mysql_query("select * from complaints where solv_mgr='$mgr_id'") or die(mysql_error());

 

?>
  <table width="98%" border="0" >
  <tr height="30" bgcolor="#D1A5A5">
    <th width="15%" height="43">Title</th>
    <th width="18%">Category Name</th><th width="20%">Brand Name</th><th width="18%">Product Name</th>
  <th colspan="3">Options</th></tr>
  <?php
while($r=mysql_fetch_array($p))
{
	
$aa=$r['co_id'];		
	
$c=$r['cat_id'];	
$d=$r['b_id'];	
$e=$r['p_id'];
$f=$r['title'];	
$g=$r['desc'];	
 $h=$r['c_date'];	
 $st=$r['c_status'];

$solv_ex=$r['solv_ex']
?>

    <tr>
     
   <td height="31"><?php echo $f;?></td>
        <?php  
		 $s14=mysql_query("select * from category where cat_id='$c'") or die(mysql_error());     
    	 while($r14=mysql_fetch_array($s14))
			{
				 $cna3=$r14['cat_name'];
			?>    
<td><?php echo $cna3;?></td>    
   			<?php
    		}
    ?>

       
        <?php  
		 $s13=mysql_query("select * from brand where b_id='$d' and cat_id='$c'") or die(mysql_error());     
    	 while($r13=mysql_fetch_array($s13))
			{
			 $cna2=$r13['b_name'];
			?>    
	  <td><?php echo $cna2;?></td>   
   			<?php
    		}
    ?>
       
       
       <?php  
		 $s12=mysql_query("select * from product where p_id='$e' and b_id='$d' and cat_id='$c'") or die(mysql_error());     
    	 while($r12=mysql_fetch_array($s12))
			{
				$cna=$r12['p_na'];
			?>    
	  <td><?php echo $cna;?></td>   
   			<?php
    		}
			
	?>
    <td width="22%">
    <?php		
     
    
if($solv_ex!=0)
{
       
    
    
			if($st=='mgr_check'||$st=='re_send')
			{
				?>
        
       
			<font color="#FF0000" size="+1">Complete</font>
			
    	 <?php	}
			else if($st=='0')
			{?>
            
			  <font color="#9999CC" size="+1">Work is Pending</font>
             
              
             <?php 
			}
			else if($st=='ex_complet')
			{
				echo "<font color=##FF33CC size=+1>Executive Completed</font>";
             
				
			}
			
			else if($st=='ex_incomplete')
			{
				echo "<font color=#FFCC33 size=+1>Incomplete</font>";
             
				
			}
			else if($st=='not_working')
			{
				echo "<font color=#FFCC33 size=+1>Not Working</font>";
             
				
			}
}
else 
{
echo "<font color=#0000FF size=+1>Not Assigned</font>";
             
				
}
			?>
             
    
      </td>  
     <td width="7%"><a href="servicemgrhome.php?view=reply_mgr_complaints&comp_id=<?php echo $aa;?>&cat_id=<?php echo $c;?>&b_id=<?php echo $d;?>&p_id=<?php echo $e;?>&mgr_id=<?php echo $mgr_id;?>">MORE</a></td>
     
     
     
     
    

     
   </tr>


<?php
}

?>
</table></form> 
  
 
  </div>
   </body>
  </html>