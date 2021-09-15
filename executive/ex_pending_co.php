<?php
session_start();
$ex_user=$_SESSION['username'];
$a1=mysql_query("select * from service_exec where ex_una='$ex_user'") or die(mysql_error());
while($r1=mysql_fetch_array($a1))
{
 $mgr_id=$r1['mgr_id'];
 $ex_id=$r1['ex_id'];
 
}
error_reporting("NOTICE");
include_once("../connect/conn.php");
?>
<html>
<body>
 <div class="templatemo_box">
   	    <h2 align="center">View Pending Complaints </h2>
<?php



 $p1="select * from complaints where solv_ex='$ex_id' and solv_mgr='$mgr_id' and c_status='0'";
$p=mysql_query($p1)or die(mysql_error());

 

?>
  <table width="100%" border="0">
  <tr height="30" bgcolor="#999999"><th width="13%" height="48"><div align="center">Title</div></th><th width="22%"><div align="center">Category Name</div></th><th width="21%"><div align="center">Brand Name</div></th><th width="19%"><div align="center">Product Name</div></th></tr>
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


?>

    <tr>
     
   <td height="30"><div align="center"><?php echo $f;?></div></td>
        <?php  
		 $s14=mysql_query("select * from category where cat_id='$c'") or die(mysql_error());     
    	 while($r14=mysql_fetch_array($s14))
			{
				 $cna3=$r14['cat_name'];
			?>    
<td><div align="center"><?php echo $cna3;?></div></td>    
   			<?php
    		}
    ?>

       
        <?php  
		 $s13=mysql_query("select * from brand where b_id='$d' and cat_id='$c'") or die(mysql_error());     
    	 while($r13=mysql_fetch_array($s13))
			{
			 $cna2=$r13['b_name'];
			?>    
	  <td><div align="center"><?php echo $cna2;?></div></td>   
   			<?php
    		}
    ?>
       
       
       <?php  
		 $s12=mysql_query("select * from product where p_id='$e' and b_id='$d' and cat_id='$c'") or die(mysql_error());     
    	 while($r12=mysql_fetch_array($s12))
			{
				$cna=$r12['p_na'];
			?>    
	  <td><div align="center"><?php echo $cna;?></div></td>   
   			<?php
			}	
			
			
			?>
     
     
    
     
   </tr>


<?php
}

?>
</table></form> 
  
 
  </div>
   </body>
  </html>