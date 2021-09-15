
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Work Flow Complaint management system</title>



<?php
include_once("../connect/conn.php");
error_reporting("NOTICE");
if($_POST['sub'])
{
$a=$_POST['name'];	
$b=$_POST['address'];	
$c=$_POST['gender'];	
$d=$_POST['district'];	
$e=$_POST['state'];
$g=$_POST['phone'];	
$h=$_POST['mail'];	
echo $un=$_POST['una'];
$i=$_POST['pass'];


 $s=mysql_query("select * from login where username='$un'");
if((mysql_num_rows($s))>0)
{
echo"<script>alert('Username Already Exists')</script>";	
echo"<script>window.location='index.php?view=us_reg'</script>";
}
else
{

mysql_query("insert into user_reg values('','$a','$b','$c','$d','$e','$g','$h','$un','$i','0')");

mysql_query("insert into login values('','$un','$i','user','0')");

echo"<script>alert('Registration Successfull')</script>";	
echo"<script>window.location='index.php?view=us_reg'</script>";
}
}


?>

<script src="../jscript/gen_validatorv31.js" type="text/javascript"></script>
<script type="text/javascript">
function DoCustomValidation(frmname)
{
  var frm = document.forms[frmname];
  if((frm.pass.value != frm.cpass.value))
  {
    alert('Please Confirm Your Password!');
	
	    return false;
  }
  else
  {
  
        return true; 
  

  }
}
</script> 

</head>
<body>
 <div class="templatemo_box">
   	    <h2 align="center">User Registration</h2>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<form name="f1" id="f1" action="" method="post" >
 <center> <table width="515" height="446" border="0">
    <tr>
      <td width="281" height="32">Name</td>
      <td width="218"><input type="text" name="name" id="name" size="40"></td>
    </tr>
    <tr>
      <td height="99">Address</td>
      <td><textarea name="address" id="address" cols="30" rows="5" style:"size=41"></textarea></td>
    </tr>
    <tr>
      <td>Gender</td>
     <td>
         	<input type="radio" name="gender" value="male" id="gender" checked="checked" />
            Male
            <input type="radio" name="gender" value="female" id="gender" />
           Female        
         
            
         </td>
    </tr>
	                                             
<tr>
      <td height="40">State</td>
      <td><select name="state" style="width:257px" id="state">
      <option value="">---SELECT---</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
</select></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="district" id="district"  size="40"></td>
    </tr>
   
   
    <tr>
      <td>Phone</td>
      <td><input type="text" name="phone" id="phone" size="40" ></td>
    </tr>
    <tr>
      <td>Mail</td>
      <td><input type="text" name="mail" id="mail" size="40"></td>
    </tr>
     <tr>
      <td>Username</td>
      <td><input type="text" name="una" id="una" size="40"></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="pass" id="pass" size="40"></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="cpass" id="cpass" size="40"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sub" id="button" value="Submit" onClick="return DoCustomValidation('f1')"></td>
    </tr>
  </table>
  </center>
</form>
</div>

</body>
</html>

<script language="javascript" type="text/javascript">
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("name","req","Please Enter Name!");
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("address","req","Please Enter Address!");
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("gender","req","Select Gender!");
     var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("state","req","Select State!");
  
   var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("district","req","Enter District!");
  
  
 
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("phone","req","Enter the Phone Number!");
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("phone","num","Only Numbers Allowed!");
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("phone","maxlen=12","Maximum Length 12!");
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("phone","minlen=10","Minimum Length 10!");
 
 var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("mail","req","Enter Email Id!");
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("mail","email","Enter Valid Email!");
 
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("una","req","Enter Username!");
 
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("pass","req","Please Enter Password!");
 
  var frmvalidator = new Validator("f1");
 frmvalidator.addValidation("cpass","req","Please Confirm Password!");
 
 
 
 </script>