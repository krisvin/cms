<?php

echo $n1=$_POST['ag1'];
echo $n2=$_POST['ag2'];
echo "<option>...........select......................</option>";
//.".$n1.".".$n2.".
include_once("../../connect/conn.php");
echo $s2="select * from  product where cat_id='$n1' and b_id='$n2'";

$res=mysql_query($s2);
while($r2=mysql_fetch_array($res))
{

$r3= $r2['p_na'];
$r2=$r2['p_id'];

?>
<option value="<?php echo $r2; ?>"><?php echo $r3; ?></option>
<?php
}
?>