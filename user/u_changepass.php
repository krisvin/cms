<div class="templatemo_box">
   	    <h2 align="center">user Change Password</h2>

<?php
session_start();
$user=$_SESSION['username'];
include_once("../connect/conn.php");


if($_POST['update'])
{
$opass=$_POST['opass'];
$npass=$_POST['npass'];
 $cpass=$_POST['cpass'];

$s="select * from login where username='$user'";
	$result=mysql_query($s);
	$val=mysql_fetch_array($result);
	if($opass==$val['password'])
	{
			$s1="update login set password='$npass' where username='$user'";
			mysql_query($s1);
			
			$s11="update user_reg set pwd='$npass' where una='$user'";
			mysql_query($s11);
			echo "<script> alert('password changed') </script>";
			echo "<script> window.location='userhome.php'</script>";
		
		}
	else
	{
		echo "<script> alert('check your username or password') </script>";
		echo "<script> window.location='userhome.php?view=u_changepass'</script>";
		
	}

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<script type="text/javascript">
 function DoCustomValidation(frmname)
{
  var frm = document.forms[frmname];
  if((frm.npass.value != frm.cpass.value))
  {
    alert('The Password and Confirm password do not match!');
	
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
<form id="form1" name="form1" method="post" action="">
 <center> <table width="518" height="342" border="0">
  <tr>
      <td width="313">Username</td>
      <td width="238"><input type="text" name="textfield" id="user" value="<?php echo $user;?>"/></td>
    </tr>
    <tr>
      <td width="313">Old Password</td>
      <td width="238"><input type="password" name="opass" id="opass" /></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><input type="password" name="npass" id="npass" /></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><input type="password" name="cpass" id="cpass" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="update" id="Update" value="Update" onClick="return DoCustomValidation('form1')"/></td>
    </tr>
  </table>
  </center>
</form>
</body>
</html>
</div>

<script  language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("opass","req","Enter the Old Pasword!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("npass","req","Enter New Password!");

  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("cpass","req","Confirm your Password!");
    
 </script>