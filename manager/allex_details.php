<?php
session_start();
$username=$_SESSION['username'];
/*$a1=mysql_query("select * from service_mgr where mgr_una='$username'") or die(mysql_error());
while($r1=mysql_fetch_array($a1))
{
 $mgr_id=$r1['mgr_id'];
}*/
error_reporting("NOTICE");
include_once("../connect/conn.php");
$mgr_id=$_REQUEST['id2'];
$ex_id=$_REQUEST['id'];
?>
<html>
<body>
 <div class="templatemo_box">
   	    <h2 align="center">View Complaints from Admin</h2>
<?php



$p=mysql_query("select * from complaints where solv_mgr='$mgr_id' and solv_ex='$ex_id'") or die(mysql_error());

 

?>
  <table width="98%" border="0" style="text-align:center">
  <tr height="30" bgcolor="#999999">
    <th width="15%" height="43">Title</th>
    <th width="18%">Category Name</th><th width="20%">Brand Name</th><th width="18%">Product Name</th>
    <th colspan="3">More</th></tr>
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
  
     <td width="7%"><a href="servicemgrhome.php?view=mgr_all_complaints&comp_id=<?php echo $aa;?>&cat_id=<?php echo $c;?>&b_id=<?php echo $d;?>&p_id=<?php echo $e;?>&mgr_id=<?php echo $mgr_id;?>">MORE</a></td>
     
     
     
     
    

     
   </tr>


<?php
}

?>
</table></form> 
  
 
  </div>
   </body>
  </html>