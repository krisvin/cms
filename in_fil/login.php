<script type="text/javascript" src="gen_validatorv31.js"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body><br /><br />
                   <?php  include_once("../connect/conn.php");
session_start();
if($_POST['submit'])
{
 $user1=$_POST['user'];
 $pass=$_POST['pass'];

 $s=mysql_query("select * from  login where username='$user1' and password='$pass' and status='1'");	

if(mysql_num_rows($s)>0)
{
	while($r=mysql_fetch_array($s))
	{
	$user=$r['user'];
	 $status=$r['status'];
	if($user=='admin')
	{
	 $_SESSION['username']=$r['username'];
	
echo"<script>window.location='admin/adminhome.php'</script>";
	}
	else if($user=='user')
	{
	 $_SESSION['username']=$r['username'];	  
	 $_SESSION['user']=$r['user'];
echo"<script>window.location='user/userhome.php'</script>";
	}
	else if($user=='service manager')
	{
	 $_SESSION['username']=$r['username'];
	 $_SESSION['user']=$r['user'];
echo"<script>window.location='manager/servicemgrhome.php'</script>";
	}
	else if($user=='service executive')
	{
	 $_SESSION['username']=$r['username'];
	 $_SESSION['user']=$r['user'];
echo"<script>window.location='executive/executivehome.php'</script>";
	}
	
	}
   

}
else
{
echo"<script>alert('please enter correct username or password')</script>";	
}

}
 
?>
                   <script type="text/javascript" src="gen_validatorv31.js"></script>
</h1>
<form name="form1" method="post" action="" id="form1">
  <center> <table width="299" height="92" border="0">
  <tr>
  <th colspan="2"><h2>Please Login Here !</h2></th>
  </tr>
    <tr>
      <td width="131" height="29">Username</td>
      <td width="158"><input type="text" name="user" id="user"></td>
    </tr>
    <tr>
      <td height="29">Password</td>
      <td><input type="password" name="pass" id="pwd"></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
      <td><input type="submit" name="submit" id="button" value="Log In"></td>
    </tr>
  </table></center>
</form>
</body>
</html>
<script language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("user","req","Please Enter Username!");
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("pwd","req","Please Enter Password!");
 </script>