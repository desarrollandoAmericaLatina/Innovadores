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
	color: #036;
	font-size: 18px;
}
</style>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<div align="center">
  <table width="900" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="84" height="80" align="center" valign="middle" bgcolor="#FFFFFF"><img src="img/hh.png" width="43" height="56" /></td>
      <td width="643" align="left" valign="middle" bgcolor="#FFFFFF" class="Ttexlogo"><img src="img/logo.png" width="486" height="30" /></td>
      <td width="173" align="left" valign="middle" bgcolor="#FFFFFF" class="Ttexlogo"><img src="img/PERU.png" width="150" height="35" /></td>
    </tr>
  </table>
  <table width="900" border="0" cellspacing="0">
    <tr>
      <td height="25" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0">
        <tr>
          <td height="47" align="center" valign="middle" bgcolor="#666666"><span class="texto">INGRESE A SU PLAN DE ESTUDIO</span></td>
        </tr>
      </table>
        
       
        <table width="854" border="0">
          <tr>
            <td align="right" valign="middle"><a href="usuario/index.php"><img src="img/login.png" width="63" height="63" border=""><br>Entra a tu cuenta</a></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <table width="854" border="0">
          <tr>
            <td width="409" align="center" valign="top"><a href="registro/primaria.php"><img src="img/PRIM.png" width="355" height="266" border=""></a></td>
            <td width="380" align="center" valign="top"><a href="registro/secundaria.php"><img src="img/SECUN.png" width="355" height="266" border=""></a></td>
          </tr>
          <tr>
            <td height="48" align="center" valign="middle" class="Ttexlogo"><a href="registro/primaria.php">NIVEL PRIMARIA</a></td>
            <td align="center" valign="middle" class="Ttexlogo"><a href="registro/secundaria.php">NIVEL SECUNDARIA</a></td>
          </tr>
        </table>
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</form>

</body>
</html>