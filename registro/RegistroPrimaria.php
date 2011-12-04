<?php
include "../function/funciones.php";

$grado=$_POST['radio'];




if($grado==1)
{
	$msn="Primer Grado";
}
if($grado==2)
{
	$msn="Segundo Grado";
}
if($grado==3)
{
	$msn="Tercer Grado";
}
if($grado==4)
{
	$msn="Cuarto Grado";
}
if($grado==5)
{
	$msn="Quinto Grado";
}
if($grado==6)
{
	$msn="Sexto Grado";
}

//echo "$grado";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>.:: Escuela Tecnologia Innova _ Online ::.</title>
<script type="text/javascript">
function Valida()
{
	if(form1.t1.value!="")
	{
		if(form1.t2.value!="")
		{
			if(form1.t3.value!="")
			{
				if(form1.t4.value!="")
				{
					if(form1.t8.value!="")
					{
						if(form1.t9.value!="")
						{
							if(form1.t10.value!="")
							{
								form1.action="gprimaria.php";
								form1.submit();
							}
							else
							{
								alert("Ingrese su Correo");
								form1.t10.focus();
							}
						}
						else
						{
							alert("Ingrese su Password");
							form1.t9.focus();
						}
					}
					else
					{
						alert("Ingrese su Usuario");
						form1.t8.focus();
					}
				}
				else
				{
					alert("Ingrese su Distrito");
					form1.t4.focus();
				}
			}
			else
			{
				alert("Ingrese su Provincia");
				form1.t3.focus();
			}
		}
		else
		{
			alert("Ingrese su Apellido");
			form1.t2.focus();
		}
	}
	else
	{
		alert("Ingrese su Nomnbre");
		form1.t1.focus();
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
          <td width="653" height="21" align="center" valign="middle"><p><a href="primaria.php"><img src="../img/BACK.png" width="50" height="37" border=""><br>Volver</a></p>
            <table width="488" border="0">
            <tr>
              <td height="51" colspan="2" align="center" valign="top" class="Ttexlogo"><p>REGISTRE SU CUENTA DE ALUMNO</p>
                <p><?php echo "$msn";?> </p>
                <p>&nbsp;</p></td>
              </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Nombre :</td>
              <td align="left" valign="middle"><input name="t1" type="text" id="t1" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Apellido :</td>
              <td align="left" valign="middle"><input name="t2" type="text" id="t2" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Provincia :</td>
              <td align="left" valign="middle"><input name="t3" type="text" id="t3" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Distrito :</td>
              <td align="left" valign="middle"><input name="t4" type="text" id="t4" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Direccion :</td>
              <td align="left" valign="middle"><input name="t5" type="text" id="t5" style="width:180px"></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Telef./Cel. :</td>
              <td align="left" valign="middle"><input name="t6" type="text" id="t6" style="width:180px"></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Edad :</td>
              <td align="left" valign="middle"><input name="t7" type="text" id="t7" style="width:180px"></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">&nbsp;</td>
              <td align="left" valign="middle">&nbsp;</td>
            </tr>
            <tr>
              <td width="173" align="right" valign="middle" class="fontx" style="color: #000">Usuario :</td>
              <td width="305" align="left" valign="middle"><label for="t8"></label>
                <input name="t8" type="text" id="t8" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Password :</td>
              <td align="left" valign="middle"><input name="t9" type="text" id="t9" style="width:180px">
                <span class="Ttexlogo">*</span></td>
            </tr>
            <tr>
              <td align="right" valign="middle" class="fontx" style="color: #000">Correo :</td>
              <td align="left" valign="middle"><label for="t10"></label>
                <input name="t10" type="text" id="t10" style="width:180px">
                <span class="Ttexlogo">*</span>                <input name="radio" type="hidden" id="radio" value="<?php echo "$grado";?>"></td>
            </tr>
            <tr>
              <td align="right" valign="middle">&nbsp;</td>
              <td align="left" valign="middle"><input type="submit" name="button" id="button" value="Registrar"></td>
            </tr>
          </table></td>
        </tr>
        </table></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</form>
</body>
</html>