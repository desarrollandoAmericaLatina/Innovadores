<?php
include "../function/funciones.php";


$x1=$_POST['t1'];
$x2=$_POST['t2'];

$sql=mysql_query("select * from alumno where usuario='$x1' and pass='$x2'");
$n=mysql_num_rows($sql);

if($n>0)
{
	header("location: Menu.php?a=$x1&b=$x2");
	 
}
else
{
	 header("location: index.php?f=1");
}

?>