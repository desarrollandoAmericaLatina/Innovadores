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
      <td height="25" align="center" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0">
        <tr>
          <td height="47" align="center" valign="middle" bgcolor="#666666"><span class="texto">ACCESO DE SEGURIDAD</span></td>
        </tr>
      </table>
        
       
        <table width="854" border="0">
          <tr>
            <td align="center" valign="middle"><p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="366" border="0">
              <tr>
                <td width="134" align="right" valign="middle">Usuario :</td>
                <td width="216" align="left" valign="middle"><label for="t1"></label>
                  <input type="text" name="t1" id="t1"></td>
              </tr>
              <tr>
                <td height="35" align="right" valign="middle">Password :</td>
                <td align="left" valign="middle"><label for="t2"></label>
                  <input type="text" name="t2" id="t2"></td>
              </tr>
              <tr>
                <td height="40" align="right" valign="middle">&nbsp;</td>
                <td align="left" valign="middle"><input type="submit" name="button" id="button" value="Enviar"></td>
              </tr>
            </table>
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