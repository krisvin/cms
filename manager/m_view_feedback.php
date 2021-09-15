 <html><div class="templatemo_box">
   	    <h2> <center>View Feedback</center></h2>
<?php
session_start();
$username=$_SESSION['username'];
include_once("../connect/conn.php");
error_reporting("E_notice");
/*$a1=mysql_query("select * from service_mgr where mgr_una='$username'") or die(mysql_error());
while($r1=mysql_fetch_array($a1))
{
 $mgr_id=$r1['mgr_id'];
 
 
}*/
$id=$_REQUEST['id'];
$status=$_REQUEST['stat'];
if($status=='delete')
{
	
	mysql_query("delete from feedback where f_id='$id'");
	
	
}

?>

<body>
<table border="0" cellpadding="5" width="100%" style="text-align:center">

  <tr bgcolor="#999999">
<th height="43"><font color="#0033FF"><em>Send From</em></th> 
<th> <em><font color="#0033FF">Subject </em></th> 
<th><div align="center"><em><font color="#0033FF">Action</em></div></th> 
</tr>


	<?php
	echo $s;
	
	
	$z="select * from feedback where send_to='$username'";
	$z1=mysql_query($z);	
	while($row=mysql_fetch_array($z1))
	{   //report_msg
		?> 	
     

		<tr><td> <?php	echo $row['send_from']; ?></td>
      	<td><a href="servicemgrhome.php?view=m_view_feedback1&id1=<?php echo $row['f_id'];?>"><?php echo $row['sub'];?></a>
		</td>
    <!--  <td><?php	//echo $row['feedback']; ?></td>-->
    <td><a href="servicemgrhome.php?view=m_view_feedback&id=<?php echo $row['f_id'];?>&stat=delete">Delete</a></td>
      </tr>
      
<?php
	}
	?>


</table>


</body>
</html>
</div>