<?php
session_start();
$username=$_SESSION['username'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">

.b{width:150px;height:100px;float:left;margin-top:35px;margin-left:20px}

</style>
</head>

<body>
<center>
<?php
 $s1=mysql_query("select * from service_mgr where mgr_una='$username'");
while($r=mysql_fetch_array($s1))
{
	
$a=$r['mgr_name'];	
$b=$r['mgr_id'];
	$s11=mysql_query("select * from service_exec where mgr_id='$b'");
while($r1=mysql_fetch_array($s11))
{
	
$a1=$r1['ex_na'];	
$b1=$r1['ex_id'];
?>

<div class=b><a href="servicemgrhome.php?view=allex_details&amp;id=<?php echo $b1;?>&id2=<?php echo $b;?>" ><img src="../images/exec.jpeg" width="61%" height="96%" /></a><br />
<?php echo $a1;?> (<?php $g=mysql_query("select * from complaints where solv_mgr='$b' and solv_ex='$b1'");
$count=mysql_num_rows($g);
echo $count;

?>)
</div>

<?php
}
}
?>

</center>
</body>
</html>