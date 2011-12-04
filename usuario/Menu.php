<?php
include "../function/funciones.php";

$a=$_GET['a'];
$b=$_GET['b'];


$s=mysql_query("select * from alumno where usuario='$a' and pass='$b'");
$r=mysql_fetch_array($s);

$n=$r['nombre'];
$ap=$r['apellido'];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Escuela Tecnologia Innova _ Online ::.</title>
<script type="text/javascript">
function Seleccion()
{
	if(confirm("Esta seguro de haber seleccionado el Grado indicado?"))
	{
		form1.action="RegistroPrimaria.php";
		form1.submit();
	}
	else
	{
		form1.radio[0].checked=false;
		form1.radio[1].checked=false;
		form1.radio[2].checked=false;
		form1.radio[3].checked=false;
		form1.radio[4].checked=false;
		form1.radio[5].checked=false;
	}
	
}
</script>

<style type="text/css">
<!--
.texto {
	font-family:Arial;
	font-size:24px;
	color: #FFF;
}

.Ttexlogo {
	font-family:Arial;
	font-size:18px;

}


body {
	background-color: #F4F4F4;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
<style type="text/css">
#form1 div table tr td table tr td {
	color: #FFF;
	font-size: 18px;
}
.style9 {	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
}
#form1 div table tr td table tr td p {
	color: #333;
	font-size: 24px;
}
</style>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="valida.php">
<div align="center">
  <table width="900" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="84" height="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="../img/hh.png" width="43" height="56" /></td>
      <td width="643" align="left" valign="middle" bgcolor="#FFFFFF" class="Ttexlogo"><img src="../img/logo.png" width="486" height="30" /></td>
      <td width="173" align="left" valign="middle" bgcolor="#FFFFFF" class="Ttexlogo"><img src="../img/PERU.png" width="150" height="35" /></td>
    </tr>
  </table>
  <table width="900" border="0" cellspacing="0">
    <tr>
      <td height="25" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="2%" height="34" align="center" valign="middle" bgcolor="#666666">&nbsp;</td>
          <td width="92%" align="left" valign="middle" bgcolor="#666666">Bienvenido : <?php echo "$n $ap";?></td>
          <td width="6%" align="center" valign="middle" bgcolor="#FFFFFF"><span style="font-family:Arial"><span class="style9"><a href="index.php">Salir</a></span><a href="../cerrarsesion.php" class="texto"><img src="../img/user2.png" width="16" height="16" border="" alt="Salir del Sistema"></a></span></td>
        </tr>
      </table>
        
       
        <table width="854" border="0">
          <tr>
            <td align="center" valign="middle"><p>&nbsp;</p>
              <p>Ingresar a las Clases</p>
              <p>&nbsp;</p>
              <p>Ver Detalles de Mi Cursos</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <p>&nbsp;</p></td>
          </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</form>

</body>
</html>