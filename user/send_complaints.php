<?php
session_start();
 $u_user=$_SESSION['username'];
include_once("../connect/conn.php");





if($_POST['submit'])
{
 $a=$_POST['from'];	
 $b=$_POST['to'];
 $c=$_POST['n1'];	
$b_id=$_POST['pdt'];	
 $e=$_POST['pdt1'];		
 $f=$_POST['title'];	
 $g=$_POST['desc'];
 $h=date("Y-m-d");		
	
  $d=mktime(0,0,0,date("m"),date("d")+10,date("Y"));
 $d_date=date("Y/m/d", $d);
 
mysql_query("insert into complaints values('','$a','$b','$c','$b_id','$e','$f','$g','$h','0','0','$d_date','0','0')") or die(mysql_error());

echo"<script>alert('Complaint Registration Successfull!')</script>";	
echo"<script>window.location='userhome.php?view=send_complaints'</script>";
}


?><script type="text/javascript" src="../jq/jquery-1.4.js"></script>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<html>
<head></head><body>
<script type="text/javascript">
agencychk=function()
{
	var n1 = $("#n1").val();
	$.post("php/getdest.php",{ag:n1},function(pdt)
	{
		$(".anscatt").html(pdt);
	});
}
agencychk1=function()
{
	var pdt = $("#n1").val();
	var pd = $("#pdt").val();
	$.post("php/getdest1.php",{ag1:pdt,ag2:pd},function(pdt1)
	{
		$(".anscatt1").html(pdt1);
	});
}
</script>

   	    <h2 align="center">Send Complaint</h2>

<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<form name="form1" method="post" action="">
 <center><table width="520" height="281" border="0">
    <tr>
      <td width="249" height="54">From</td>
      <td width="255"><input name="from" type="text" id="from" style="width:300px" value="<?php echo $u_user;?>" readonly></td>
    </tr>
    <tr>
      <td height="54">To</td>
      <td><input name="to" type="text" id="to" style="width:300px" value="admin" readonly></td>
    </tr>
     <tr>
      <td height="54">Title</td>
      <td><input name="title" type="text" id="title" style="width:300px" value=""></td>
    </tr>
     <tr>
      <td height="90">Description</td>
      <td><textarea name="desc" cols="30" rows="4" id="desc" style="width:300px"></textarea></td>
    </tr>
   <td width="246">Category Name</td>
      <td width="275"><select name="n1" style="width:300px" onChange="agencychk();" id="n1" ><option value="">select</option>
	    <?php

echo $s=mysql_query("select * from category") or die(mysql_error());
while($r=mysql_fetch_array($s))
{

			
?>	 
			 <option value="<?php echo $r['cat_id']; ?>"><?php echo $r['cat_name']; ?></option>
	  	
	  
<?php } ?>  
	   </select></td>
    </tr>
    <tr>
      <td width="246">Brand Name</td>
	  
      <td width="275"><select name="pdt" style="width:300px" id="pdt" class="anscatt" onChange="agencychk1()";></select>
	     </tr>
    <tr>
      <td>Product Name</td><td><select name="pdt1" style="width:300px" id="pdt1" class="anscatt1"></select></td></tr>
    
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="button" value="Send" /></td>
    </tr>
  </table>
  </center>
</form>
</body>
</html>


<script  language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("title","req","Please Enter the  Title!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("desc","req","Please Enter the Complaint!");
      var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("n1","req","Select Category Name!");
   var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("pdt","req","Select Brand Name!");
   var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("pdt1","req","Select Product Name!");
 </script>