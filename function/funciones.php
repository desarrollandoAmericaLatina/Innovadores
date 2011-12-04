<?php 
$nxion=mysql_connect('localhost', 'root', ''); 
mysql_select_db("innova"); 	



function validarcorreo($usu)
{
	$sql=mysql_query("select * from alumno where usuario='$usu'");
	$cant=mysql_num_rows($sql);
	
	return $cant;
}


function registraralumno($x1,$x2,$x3,$x4,$x5,$x6,$x7,$x8,$x9,$x10,$x11)
{
	$sql=mysql_query("insert into alumno value('','$x1','$x2','$x3','$x4','$x5','$x6','$x7','$x8','$x9','$x10')");
	$sqlx=mysql_query("select max(id) as id from alumno");
	$r=mysql_fetch_array($sqlx);
	$cod=$r['id'];
	
	$x=mysql_query("insert into grados values('$cod','$x11')");
	
	
	
}

?> 