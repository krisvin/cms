<div class="templatemo_box">
   	    <h2 align="center">Feedback</h2>
<?php
include_once("../connect/conn.php");
session_start();
$username=$_SESSION['username'];
$a1=mysql_query("select * from service_exec where ex_una='$username'") or die(mysql_error());
while($r1=mysql_fetch_array($a1))
{
 $mgr_id=$r1['mgr_id'];
 $ex_id=$r1['ex_id'];
 
}


$a12=mysql_query("select * from service_mgr where mgr_id='$mgr_id'") or die(mysql_error());
while($r12=mysql_fetch_array($a12))
{
 $mgr_una=$r12['mgr_una'];
 
 
}

if($_POST['submit'])
{
$a=$_POST['from'];	
$b=$_POST['tos'];	
$c=$_POST['subject'];	
$d=$_POST['feedback'];	


  
mysql_query("insert into feedback values('','$a','$b','$c','$d')");

echo"<script>alert('Feedback Send Successfully')</script>";	
echo"<script>window.location='executivehome.php?view=ex_feedback'</script>";
}

?>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<form name="form1" method="post" action="">
  <center><table width="569" height="300" border="0">
    <tr>
      <td width="264">From</td>
      <td width="340"><input type="text" name="from" id="from" style="width:252px" value="<?php echo $username;?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>To</td>
      <td><input type="text" name="tos" id="tos" value="<?php echo $mgr_una;?>" readonly="readonly" style="width:252px" /></td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><input type="text" name="subject" id="subject" style="width:252px" /></td>
    </tr>
    <tr>
      <td height="110">Feedback</td>
      <td><textarea name="feedback" id="feedback" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="button" value="Submit"></td>
    </tr>
  </table>
  </center>
</form>
</div>


<script  language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("from","req","Enter the From Address!");
   var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("subject","req","Enter the Subject!");
      var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("feedback","req","Enter the Description!");
 </script>