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
    <div id="miniBlocBlue">
        <div><h1 id="orgTitle">C&nbsp;O&nbsp;N&nbsp;T&nbsp;Á&nbsp;C&nbsp;T&nbsp;A&nbsp;N&nbsp;O&nbsp;S</h1></div>
        <div id="newLogos">
            <div>
                <img class="logosNeutro" src="PhoneLogo.svg" alt="Phone"><div class="acompaLogo">614 178 60 32</div>
            </div>
            <div>
                <img class="logosNeutro" src="MailLogo.svg" alt="Mail"><div class="acompaLogo">a.escobedo@cpiseguridad.com.mx</div>
            </div>
            <div>
                <img class="logosNeutro" src="UbiLogo.svg" alt="Ubicacion"><div class="acompaLogo">Plaza Comercial Travessia Av. Teófilo Borunda No 11811</div>
            </div>
        </div>
        <div><img id="mapa" src="Maps.svg" alt="Mapas"></div>
        <div><img id="minilogo" src="MiniLogo.svg" alt="Lg"></div>
        <div id="compilacionLogosNaranjas">
		    <a href="#" class="button"><img src="InstaOra.svg" alt="Instagram"></a>
		    <a href="#" class="button"><img src="FaceOra.svg" alt="Facebook" style="margin: 0px 22px 0px 24px;"></a>
		    <a href="#" class="button"><img src="TikTokOra.svg" alt="TikTok" style="margin: 0px 20px 0px 10px;"></a>
		    <a href="#" class="button"><img src="YoutubeOra.svg" alt="YouTube"></a>
	    </div>
    </div>
    <div>
        <form id="lario">
            <label for="fullname" class="form">Nombre Completo*</label><br>
            <input type="text" class="rellenar" name="fullname"><br>
            <label for="phone" class="form">Teléfono*</label><br>
            <input type="tel" class="rellenar" name="phone"><br>
            <label for="email" class="form">Correo electrónico*</label><br>
            <input type="email" class="rellenar" name="email"><br>
            <label for="birthdate" class="form">Fecha de nacimiento*</label><br>
            <input type="date" class="rellenar" name="birthdate"><br>
            <label for="age" class="form">Edad:*</label><br>
            <input type="number" class="rellenar" name="age"><br>
            <label for="message" class="form">Mensaje:</label><br>
            <textarea id="message" name="message"></textarea><br>
            <input id="enter" type="submit" value="ENVIAR">
        </form>
    </div>
</div>

<?php include_once("PhpAssets/footer.php"); ?>

</body>
</html>