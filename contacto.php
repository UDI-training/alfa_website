<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script>
    <title>Contacto</title>
</head>
<body>
<?php include_once("PhpAssets/header.php"); ?>

<!-- Contenedor principal -->
<div id="formulario">
    <div id="MiniBlocBlue">
        <div><h1 id="OrgTitle">C&nbsp;O&nbsp;N&nbsp;T&nbsp;Á&nbsp;C&nbsp;T&nbsp;A&nbsp;N&nbsp;O&nbsp;S</h1></div>
        <div id="NewLogos">
            <div>
                <img class="LogosNeutro" src="PhoneLogo.svg" alt="Phone"><div class="AcompaLogo">614 178 60 32</div>
            </div>
            <div>
                <img class="LogosNeutro" src="MailLogo.svg" alt="Mail"><div class="AcompaLogo">a.escobedo@cpiseguridad.com.mx</div>
            </div>
            <div>
                <img class="LogosNeutro" src="UbiLogo.svg" alt="Ubicacion"><div class="AcompaLogo">Plaza Comercial Travessia Av. Teófilo Borunda No 11811</div>
            </div>
        </div>
        <div><img id="Mapa" src="Maps.svg" alt="Mapas"></div>
        <div><img id="Minilogo" src="MiniLogo.svg" alt="Lg"></div>
        <div id="CompilacionLogosNaranjas">
		    <a href="#" class="button"><img src="InstaOra.svg" alt="Instagram"></a>
		    <a href="#" class="button"><img src="FaceOra.svg" alt="Facebook" style="margin: 0px 22px 0px 24px;"></a>
		    <a href="#" class="button"><img src="TikTokOra.svg" alt="TikTok" style="margin: 0px 20px 0px 10px;"></a>
		    <a href="#" class="button"><img src="YoutubeOra.svg" alt="YouTube"></a>
	    </div>
    </div>
    <div>
        <form id="lario">
            <label for="fullname" class="form">Nombre Completo*</label><br>
            <input type="text" class="Rellenar" name="fullname"><br>
            <label for="phone" class="form">Teléfono*</label><br>
            <input type="tel" class="Rellenar" name="phone"><br>
            <label for="email" class="form">Correo electrónico*</label><br>
            <input type="email" class="Rellenar" name="email"><br>
            <label for="birthdate" class="form">Fecha de nacimiento*</label><br>
            <input type="date" class="Rellenar" name="birthdate"><br>
            <label for="age" class="form">Edad:*</label><br>
            <input type="number" class="Rellenar" name="age"><br>
            <label for="message" class="form">Mensaje:</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input id="enter" type="submit" value="ENVIAR">
        </form>
    </div>
</div>

<?php include_once("PhpAssets/footer.php"); ?>

</body>
</html>