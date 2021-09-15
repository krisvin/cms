<?php
session_start();
$user=$_SESSION['username'];

error_reporting("NOTICE");
include_once("../connect/conn.php");
?>
<html>
<body>
 <div class="templatemo_box">
   	    <h2 align="center">View Complaints from <font color=#FF0000><?php echo  $a;?></font></h2>
<?php




$p=mysql_query("select * from complaints where c_from='$user'") or die(mysql_error());

 

?>
  <table width="100%" border="0">
  <tr height="30" bgcolor="#CCCCCC">
    <th width="14%" height="48" align="center">Title</th>
    <th align="center" width="24%">Category Name</th><th width="23%" align="center">Brand Name</th><th width="17%" align="center">Product Name</th>
    <th colspan="3" align="center">More</th></tr>
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
$ex_id=$r['solv_ex'];
$mg_id=$r['solv_mgr'];

?>

    <tr align="center">
     
   <td height="30"><?php echo $f;?></td>
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
      
      <td width="14%">
   			<?php
			}
			if(($st=='re_send'))
			{
				?>
        
       
			<font color="#FF0000" size="+1">Solved</font>
			
    	 <?php	}
			
			
			else if($st=='not_working')
			{
				echo "<font color=#FFCC33 size=+1>don't working</font>";
             
				
			}
			else
			{?>
            
			 <font color="#0000FF" size="+1">Pending</font>
              
              
             <?php 
			}
			?>
    
    
			
            </td>
     <td width="8%"><a href="userhome.php?view=us_view_complaints&comp_id=<?php echo $aa;?>&cat_id=<?php echo $c;?>&b_id=<?php echo $d;?>&p_id=<?php echo $e;?>&mgr_id=<?php echo $mg_id;?>&ex_id=<?php echo $ex_id;?>">MORE</a></td>
     
     
     
     
    
     
   </tr>


<?php
}

?>
</table></form> 
  
 
  </div>
   </body>
  </html>