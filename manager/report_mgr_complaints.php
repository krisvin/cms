<?php
session_start();
 $username=$_SESSION['username'];
?><html>
<head>
<script type="text/javascript" src="../jq/jquery-1.4.js"></script>
<script type="text/javascript"> 
$(document).ready(function(){
$(".flip").click(function(){
    $(".panel").slideToggle("slow");
  });
});
</script>
 
<style type="text/css"> 
div.panel,p.flip
{
margin:0px;
padding:3px;
text-align:center;
background:#e5eecc;
border:solid 1px #c3c3c3;
}
div.panel
{
height:120px;
display:none;
}
</style>
</head>

<body>
<br /><br />
<a href="servicemgrhome.php?view=mgr_complaints"><input type="button" value="back"></a>
   	    <h2 align="center">Send Report</h2>
<?php
include_once("../connect/conn.php");
session_start();
$username=$_SESSION['username'];
$comp_id=$_REQUEST['co_id'];
$to=$_REQUEST['to'];
$from=$_REQUEST['from'];
$mgr_id=$_REQUEST['mgr_id'];





if($_POST['submit'])
{
$a=$_POST['from'];	
$b=$_POST['tos'];	
$c=$_POST['subject'];	
$d=$_POST['report'];	


// mysql_query("update complaints set report_send='send' where co_id='$comp_id'") or die(mysql_error()); 
mysql_query("insert into co_report values('','$username','$b','$c','$d','$comp_id')");

echo"<script>alert('report Send to $b')</script>";	
echo"<script>window.location='servicemgrhome.php?view=mgr_complaints'</script>";
}

?>

<?php
$se=mysql_query("select * from co_report where co_id='$comp_id' and re_to='$username'") or die(mysql_error());
while($re=mysql_fetch_array($se))
{
	$at=$re['re_to'];
	$af=$re['re_from'];
	$a1=$re['re_title'];
	$a2=$re['report_msg'];
?>
<font color="#000000">
<div class="panel">
<p>

<table border="0" width="100%" align="left">
<tr>
<td>From</td><td>:</td><td><?php echo $af;?></td></tr>

<td>To</td><td>:</td><td><?php echo $at;?></td></tr>
<tr>
<td>title</td><td>:</td><td><?php echo $a1;?></td></tr>
<tr><td>Description</td><td>:</td><td><?php echo $a2;?></td>
</tr>
</table> </p></div>   </font>        
<?php	
}	


$s231=mysql_query("select * from  co_report where co_id='$comp_id' and re_to='$username'") or die(mysql_error());
$cnt=mysql_num_rows($s231);
	if(($cnt)>0)
	{
		echo "<center>";
		echo "<font color=blue>Already&nbsp;&nbsp; </font>"."<font color=red size=4>&nbsp;&nbsp;".$cnt."</font>&nbsp;&nbsp;"."&nbsp;&nbsp;<font color=blue>reports are viewed</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	}      

	?>
<p class="flip">View Previous Reports</p>


<?php		



$s123=mysql_query("select * from complaints where co_id='$comp_id'") or die(mysql_error());
$r=mysql_fetch_array($s123);
$tit=$r['title'];
 $ex=$r['solv_ex'];
	
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
      <td>
      <select name="tos" id="tos" style="width:252px">
      <option value="">select</option>
      <option value="admin"><?php echo "admin";?></option>
        <?php
	$z1=mysql_query("select * from service_exec where ex_id='$ex' and mgr_id='$mgr_id'") or die(mysql_error());
while($z=mysql_fetch_array($z1))
{
$ex_na=$z['ex_na'];
	
	?>
    
     <option value="<?php echo $ex_na;?>"><?php echo $ex_na;?></option>
      <?php }?>
      </select>
      </td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><input type="text" name="subject" id="subject" style="width:252px"  value="<?php echo "reply"." :".$tit;?>"/></td>
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
 frmvalidator.addValidation("tos","req","Please select to's");
   var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("subject","req","Please enter the subject");
      var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("report","req","Enter the description");
 </script>