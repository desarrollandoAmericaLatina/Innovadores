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
	color: #039;
}
</style>
<script src="../Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
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
        <table width="100%" border="0">
          <tr>
            <td align="right" valign="middle"><a href="../index.php"><img src="../img/BACK.png" width="50" height="37" border=""><br>volver</a></td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../img/2.png" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID8" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
            <br />
              <input type="radio" name="radio" id="radio" value="1" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../imggrados/segundo.jpg" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID2" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados2.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados2.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID7" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
          <br>
              <input type="radio" name="radio" id="radio" value="2" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../imggrados/tercero.jpg" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID3" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados3.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados3.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID4" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
            <br>
              <input type="radio" name="radio" id="radio" value="3" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../imggrados/cuarto.gif" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID5" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados4.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados4.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID6" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
            <br>
              <input type="radio" name="radio" id="radio" value="4" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../imggrados/quinto.jpg" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID9" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados5.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados5.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID10" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
            <br>
              <input type="radio" name="radio" id="radio" value="5" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
        <table width="864" height="261" border="0">
        <tr>
          <td width="158" align="left" valign="middle"><img src="../imggrados/sexto.gif" width="158" height="207" /></td>
          <td width="653" align="left" valign="middle"><object id="FlashID11" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="655" height="207">
            <param name="movie" value="../img/grados6.swf" />
            <param name="quality" value="high" />
            <param name="wmode" value="opaque" />
            <param name="swfversion" value="11.0.0.0" />
            <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
            <param name="expressinstall" value="../Scripts/expressInstall.swf" />
            <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
            <!--[if !IE]>-->
            <object type="application/x-shockwave-flash" data="../img/grados6.swf" width="655" height="207">
              <!--<![endif]-->
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
              <div>
                <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
              </div>
              <!--[if !IE]>-->
            </object>
            <!--<![endif]-->
          </object></td>
          <td width="653" align="center" valign="middle"><p>
            <object id="FlashID12" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="29" height="42">
              <param name="movie" value="../img/flecha.swf" />
              <param name="quality" value="high" />
              <param name="wmode" value="opaque" />
              <param name="swfversion" value="11.0.0.0" />
              <!-- Esta etiqueta param indica a los usuarios de Flash Player 6.0 r65 o posterior que descarguen la versión más reciente de Flash Player. Elimínela si no desea que los usuarios vean el mensaje. -->
              <param name="expressinstall" value="../Scripts/expressInstall.swf" />
              <!-- La siguiente etiqueta object es para navegadores distintos de IE. Ocúltela a IE mediante IECC. -->
              <!--[if !IE]>-->
              <object type="application/x-shockwave-flash" data="../img/flecha.swf" width="29" height="42">
                <!--<![endif]-->
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="11.0.0.0" />
                <param name="expressinstall" value="../Scripts/expressInstall.swf" />
                <!-- El navegador muestra el siguiente contenido alternativo para usuarios con Flash Player 6.0 o versiones anteriores. -->
                <div>
                  <h4>El contenido de esta página requiere una versión más reciente de Adobe Flash Player.</h4>
                  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Obtener Adobe Flash Player" width="112" height="33" /></a></p>
                </div>
                <!--[if !IE]>-->
              </object>
              <!--<![endif]-->
            </object>
            <br>
              <input type="radio" name="radio" id="radio" value="6" onClick="Seleccion();"/>
              <label for="radio"></label>
            </p></td>
        </tr>
    </table>
        <table width="864" border="0">
          <tr>
            <td height="45" align="center" valign="top">___________________________________________________________________________________________________________</td>
          </tr>
        </table>
       
        <p>&nbsp;</p></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</form>
<script type="text/javascript">
swfobject.registerObject("FlashID");
swfobject.registerObject("FlashID2");
swfobject.registerObject("FlashID7");
swfobject.registerObject("FlashID8");
swfobject.registerObject("FlashID3");
swfobject.registerObject("FlashID4");
swfobject.registerObject("FlashID5");
swfobject.registerObject("FlashID6");
swfobject.registerObject("FlashID9");
swfobject.registerObject("FlashID10");
swfobject.registerObject("FlashID11");
swfobject.registerObject("FlashID12");
</script>
</body>
</html>