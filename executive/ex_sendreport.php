<?php
session_start();
 $ex_una=$_SESSION['username'];

?><html>
<body>
<a href="executivehome.php?view=ex_complaints"><input type="button" value="Back"></a>
   	    <h2 align="center">Send Report to Executives</h2>
<?php
include_once("../connect/conn.php");
 $co_id=$_REQUEST['co_id'];
$b1=mysql_query("select * from service_exec where ex_una='$ex_una'");
while($c1=mysql_fetch_array($b1))
{
	
	$ex_id=$c1['$ex_id'];
	$mg_id=$c1['mgr_id'];
	
}


$b=mysql_query("select * from service_mgr where mgr_id='$mg_id'");
while($c=mysql_fetch_array($b))
{
	
	
	$mg_una=$c['mgr_una'];
	
}

if($_POST['submit'])
{
$a=$_POST['from'];	
$b=$_POST['tos'];	
$c=$_POST['subject'];	
$d=$_POST['report'];	


 //mysql_query("update complaints set report_send='ex_co' where co_id='$comp_id'") or die(mysql_error()); 
mysql_query("insert into co_report values('','$a','$b','$c','$d','$co_id')")or die(mysql_error());

echo"<script>alert('Report Sent to $b')</script>";	
echo"<script>window.location='executivehome.php?view=ex_sendreport'</script>";
}

?>


<?php		



$s123=mysql_query("select * from complaints where co_id='$comp_id'") or die(mysql_error());
$r=mysql_fetch_array($s123);
$tit=$r['title'];
	
?>



<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<form name="form1" method="post" action="">
  <center><table width="569" height="300" border="0">
    <tr>
      <td width="264">From</td>
      <td width="340"><input type="text" name="from" id="from" style="width:252px" value="<?php echo $ex_una;?>" readonly="readonly"></td>
    </tr>
    <tr>
      <td>To</td>
      <td><input type="text" name="tos" id="tos" value="<?php echo $mg_una;?>" readonly="readonly" style="width:252px" /></td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><input type="text" name="subject" id="subject" style="width:252px"/></td>
    </tr>
    <tr>
      <td height="110">Report</td>
      <td><textarea name="report" id="report" cols="30" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="button" value="Submit"></td>
    </tr>
  </table>
  </center>
</form>
</body>
</html>

<script  language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("from","req","Please enter the from address");
   var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("subject","req","Please enter the subject");
      var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("report","req","Enter the description");
 </script>