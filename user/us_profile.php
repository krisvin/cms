  <div class="templatemo_box">
   	    <h2 align="center">User Profile</h2>

<?php
session_start();
$usname=$_SESSION['username'];

include_once("conn.php");

if($_POST['submit'])
{
 $a=$_POST['name'];
	
 $b=$_POST['address'];	
 $c=$_POST['gender'];
 $d=$_POST['co'];
 $e=$_POST['st'];
 $f=$_POST['dist'];
 	
 $g=$_POST['mail'];
 $h=$_POST['phone'];


 mysql_query("update user_reg set name='$a',address='$b',gender='$c',district='$d',state='$e',mail='$g',phone='$h' where una='$usname'")or die(mysql_error());
echo"<script>alert('Updated Successfully')</script>";	
echo"<script>window.location='userhome.php?view=us_profile'</script>";
}




$m=mysql_query("select * from user_reg where una='$usname'") or die(mysql_error());
$r=mysql_fetch_array($m);
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="../jscript/gen_validatorv31.js"></script>

</head>

<body>
<form name="form1" method="post" action="">
 <center> <table width="520" height="500" border="0">
    <tr>
      <td width="252">Manager Name</td>
      <td width="252"><input type="text" name="name" id="name" style="width:252px" value="<?php echo $r['name'];?>"></td>
    </tr>
    <tr>
      <td height="110">Address</td>
      <td><textarea name="address" id="address" cols="30" rows="5"><?php echo $r['address'];?></textarea></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input type="text" name="gender" id="gender" style="width:252px" value="<?php echo $r['gender'];?>"></td>
    </tr>
    <tr>
      <td>District</td>
      <td><input type="text" name="co" id="co" style="width:252px" value="<?php echo $r['district'];?>" /></td>
    </tr>
    <tr>
      <td>State</td>
      <td><input type="text" name="st" id="st" style="width:252px" value="<?php echo $r['state'];?>" /></td>
    </tr>
    <tr>
      <td>Mail</td>
      <td><input type="text" name="mail" id="mail" style="width:252px" value="<?php echo $r['mail'];?>"></td>
    </tr>
    <tr>
      <td>Phone Number</td>
      <td><input type="text" name="phone" id="phone" style="width:252px" value="<?php echo $r['phone'];?>"></td>
    </tr>
     <tr>
       <td>Username</td>
       <td><input type="text" name="username" id="username" style="width:252px" value="<?php echo $r['una'];?>" readonly="readonly"></td>
     </tr>
     <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" id="submit" value="Update"></td>
    </tr>  
  </table>
  </center>
</form>
<br />
</body>
</html>
</div>
<script  language="javascript" type="text/javascript">
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("name","req","Please enter Name!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("address","req","Please enter the Address!");

  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("gender","req","Please choose the Gender!");
 var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("st","req","Please enter State!");
var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("dist","req","Please enter  District!");

 
      var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("mail","req","Enter Email Id!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("mail","email","Enter Valid Email!");
 var frmvalidator = new Validator("form1");
   frmvalidator.addValidation("phone","req","Please Enter the Phone Number!");
  var frmvalidator = new Validator("form1");
  frmvalidator.addValidation("phone","num","Enter Numbers Only for Phone Number!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("phone","maxlen=12","Maximum Length 12!");
  var frmvalidator = new Validator("form1");
 frmvalidator.addValidation("phone","minlen=10","Minimum length 10!");

  
 
 </script>