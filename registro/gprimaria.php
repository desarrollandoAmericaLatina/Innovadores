<?php
include "../function/funciones.php";

$tx1=$_POST['t1'];
$tx2=$_POST['t2'];
$tx3=$_POST['t3'];
$tx4=$_POST['t4'];
$tx5=$_POST['t5'];
$tx6=$_POST['t6'];
$tx7=$_POST['t7'];
$tx8=$_POST['t8'];
$tx9=$_POST['t9'];
$tx10=$_POST['t10'];
$txradi=$_POST['radio'];

registraralumno($tx1,$tx2,$tx3,$tx4,$tx5,$tx6,$tx7,$tx8,$tx9,$tx10,$txradi);



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Escuela Tecnologia Innova _ Online ::.</title>


<script type="text/javascript">
function Pagos(url) 
{

var posicion_x;  
var posicion_y;  
posicion_x=(screen.width/8)-(20/2);  
posicion_y=(screen.height/10)-(20/2);  

blankWin=window.open(url,'_blank','menubar=no,width=900,height=450,toolbar=no,location=no,directories=no,fullscreen=no,titlebar=no,hotkeys=no,status=no,scrollbars=no,resizable=yes,left='+posicion_x+',top='+posicion_y);


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

.fontx
{
	font-family:Arial;
	
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
	color: #CCC;
}
#form1 div table tr td table tr td table {
	font-size: 12px;
}
#form1 div table tr td table tr td table tr .Ttexlogo {
	color: #000;
}
#form1 div table tr td table tr td table tr .Ttexlogo p {
	color: #036;
	font-weight: bold;
}
#form1 div table tr td table tr td p {
	color: #036;
}
</style>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<script type="text/javascript">
Pagos('../pagos.php');
</script>
<form id="form1" name="form1" method="post" action="javascript:Valida()">
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
      <td height="25" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0">
        <tr>
          <td height="47" align="center" valign="middle" bgcolor="#666666"><span class="texto">NIVEL PRIMARIA</span></td>
        </tr>
      </table>
        <table width="864" height="25" border="0">
        <tr>
          <td width="653" height="21" align="center" valign="middle"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>SU USUARIO Y PASSWORD SE ACABA DE ENVIAR A SU CORREO.</p>
            <p>UNA VEZ HAYA HECHO EL PAGO EN EL SISTEMA DE BANCO,</p>
            <p>EL SISTEMA DE BANCO LE VA A REDIRIGIR A UN FORMULARIO, DONDE</p>
            <p>TENDRA QUE INGRESAR SU USUARIO Y PASSWORD PARA ACTIVAR SU CUENTA DE ESTUDIOS.</p>
            <p>&nbsp;</p>
            <p><a href="javascript:Pagos('../pagos.php')">HAGA CLICK PARA POCEDER SU PAGO</a></p>
            <p>&nbsp;</p>
            <p><a href="../index.php"><img src="../img/BACK.png" width="50" height="37" border=""><br>Volver</a></p>
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