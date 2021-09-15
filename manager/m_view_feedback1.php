<div class="templatemo_box">
   	    <h2 align="center">View Feedback</h2>
<?php
session_start();
$username=$_SESSION['username'];

include_once("../connect/conn.php");
$id=$_REQUEST['id1'];

$s=mysql_query("select * from feedback where f_id='$id'");
$r=mysql_fetch_array($s);


 	
?>

<form name="form1" method="post" action="">
 <center> <table width="600" height="272" border="0">
  
    <tr><th width="297" height="47">From</th>
      <td width="293" height="47"><input name="" type="text" value="<?php echo $r['send_from'];?>" readonly="readonly"/></td></tr>
      
     <tr>
      <th height="47">Subject</th>
      <td><input name="" type="text" value="<?php echo $r['sub'];?>" readonly="readonly"/></td></tr>
     
       <tr><th>Message</th>
        <td><textarea name="area" cols="35" rows="5" readonly="readonly"><?php echo $r['desc'];?></textarea></td>
          </tr>
          
            <tr><th height="35"></th>
      <td height="35"><a href="servicemgrhome.php?view=m_view_feedback"><input name="sub" type="button" value="Back"></a></td></tr>
     </table>
    </center>
</form>
</div>