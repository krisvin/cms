<?php
session_start();
$username=$_SESSION['username'];
?><html>
<head>

</head>
<body>
 <div class="templatemo_box">
   <h2 align="right"></h2>
   <h2 align="center">Assign Complaints to Service Executives</h2>
<?php
include_once("../connect/conn.php");
$comp_id=$_REQUEST['comp_id'];
$cid=$_REQUEST['cat_id'];
$mgr_id=$_REQUEST['mgr_id'];
$bid=$_REQUEST['b_id'];
$pid=$_REQUEST['p_id'];
 $s1=mysql_query("select * from complaints where co_id='$comp_id'") or die(mysql_error());

?>

 <form action="" method="post">
 <br><br><br>
  <table width="60%" border="0" align="center">
  
  <?php
while($r=mysql_fetch_array($s1))
{
	
$a=$r['from'];	
$b=$r['to'];	
$c=$r['cat_id'];	
$d=$r['b_id'];	
$e=$r['p_id'];
$f=$r['title'];	
$g=$r['desc'];	
 $h=$r['c_date'];
$mgr_id=$r['solv_mgr'];
$s_m=$r['solv_ex'];
 $c_status=$r['c_status'];	
 	
	


?>
<tr>
    <td width="33%" height="36"><a href="servicemgrhome.php?view=mgr_complaints"><input type="button" value="Back"></a></td></tr>
   <tr>     <td height="34"><em>Title</em></td>
      <td width="67%"><?php echo $f;?></td></tr>
    <tr>    <td height="37"><em>Description</em></td>
      <td><?php echo $g;?></td></tr>
     <tr>  <td height="39"><em>Category</em></td>
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
</tr>
<tr>
       <td height="29"><em>Brand</em></td>
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
    </tr><tr> <td height="37"><em>Product</em></td>  
       
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
       
             </tr>
             
             
             
             <tr>
             <td colspan="2">
         
             
              <?php
  if($c_status=='ex_complet')
  {
  ?>
  
  

   
    <select name="ex1" style="width:200px" ><option value="">select</option>
   
   <option value="mgr_check">checked</option>
  
   
   
   
  </select>
  
&nbsp;<input type="submit" value="Completed" name="complete">
</center>
  
             
             
  <?php
 
  
  }
  else if($c_status=='ex_incomplete')
  {
	  echo " <center><font color=#0000CC size=5>";
	  echo "This complaint is not working";
	  echo " </font> ";
	  echo "</center>";
  }
  else if ($c_status=='mgr_check')
  {
	  echo " <center><font color=#0000CC>";
	  echo "This complaint is successfully solved";
	  echo " </font> ";
	   echo "</center>";
  }
  
    ?></td>
             </tr>
             
             
             
             
             
             
             
<tr>        
   <td height="34" colspan="2" align="left">
  
  
  <?php
  if($s_m=='0')
  {
  ?>
  
  

   
   <select name="ex2" style="width:200px" ><option value="">select</option>
   
   <?php  
   echo $a1="select * from service_exec where ex_sta='1' and mgr_id='$mgr_id'";
		$d=mysql_query($a1)or die(mysql_error());
		while($f=mysql_fetch_array($d))
		{				
			$exid=$f['ex_id'];
			$exna=$f['ex_na'];
		$exmgr=$f['mgr_id'];
			?>    
   			<option value="<?php echo $exid;?> "><?php echo $exna;?> (
			
			<?php $k=mysql_query("select * from complaints where solv_ex='$exid' and c_status='0' and solv_mgr='$exmgr'") or die(mysql_error());
$count=mysql_num_rows($k);
echo $count;

?>) </option> 
   			<?php
    		}
    ?>
   
   
   
  </select>
  
&nbsp;<input type="submit" value="Assign Executives" name="assign">
 
  
  
  
  
  
  <?php
  
  }
 /* else
  {
	  echo " <center><font color=#FF3399>";
	  echo "This complaint is already assigned";
	  echo " </font> ";
  }*/
    ?>
  

  </center>
    </td> 
   
    
    </tr>
    <tr> <td colspan="2" align="center"><input type="submit" value="Send Report" name="send">
</td></tr>
    


<?php
}

?>
  </table>
 </form> 
 
 <?php
 if($_POST['assign'])
 {
	 	echo $ex_id=$_POST['ex2']; 
	 	$s231=mysql_query("select * from  complaints where co_id='$comp_id' and solv_ex='$ex_id'") or die(mysql_error());
	if((mysql_num_rows($s231))>0)
	{
		echo"<script>alert('Already Assigned')</script>";	

	}

	mysql_query("update complaints set solv_ex='$ex_id' where co_id='$comp_id'") or die(mysql_error());
	
	
 }
 
else if($_POST['send'])
 {
	
	
	$s23=mysql_query("select * from  complaints where co_id='$comp_id' and c_status='3'") or die(mysql_error());
	if((mysql_num_rows($s23))>0)
	{
		echo"<script>alert('Report Already Send')</script>";	
	echo"<script>window.location='servicemgrhome.php?view=report_complaints&co_id=$comp_id&mgr_id=$mgr_id'</script>";
	}
	else
	{
	
//	
	echo"<script>window.location='servicemgrhome.php?view=report_mgr_complaints&to=$a&from=$b&co_id=$comp_id&mgr_id=$mgr_id'</script>";
	}
	
	
 }
 else if($_POST['complete'])
 {
	 	echo $ex1=$_POST['ex1']; 
		
	 
echo $n="update complaints set c_status='$ex1' where co_id='$comp_id'";
	mysql_query($n)or die(mysql_error());
	
 }
 
 ?>
  </div>
   </body>
  </html>