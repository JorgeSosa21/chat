<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>CHAT</title>
		<script src="js/jquery-1.7.2.min.js"></script>
		<script src="js/fancywebsocket.js"></script>
		<script src="js/index.js"></script>
		<link rel="stylesheet" href="./css/index.css">
	</head>

	<body>
		<div class="contactos">
			<div class="cabecera"><span>Contactos</span></div>
			<div class="contacto" id="1" OnClick="mostrarConve(this)">
				<div class="img-perfil"></div>
				<div class="nombre-contacto"><span>Martin</span></div>
				<div class="ultimo-msg"><span><i></i></span></div>
			</div>
			<div class="contacto" id="2" OnClick="mostrarConve(this)">
				<div class="img-perfil"></div>
				<div class="nombre-contacto"><span>Fernanda</span></div>
				<div class="ultimo-msg"><span><i></i></span></div>
			</div>
			<div class="contacto" id="3" OnClick="mostrarConve(this)">
				<div class="img-perfil"></div>
				<div class="nombre-contacto"><span>Laura</span></div>
				<div class="ultimo-msg"><span><i></i></span></div>
			</div>
			<div class="contacto" id="4" OnClick="mostrarConve(this)">
				<div class="img-perfil"></div>
				<div class="nombre-contacto"><span>Cesar</span></div>
				<div class="ultimo-msg"><span><i></i></span></div>
			</div>
		</div>
		<div class="conversacion">
			<div class="cabecera degrado"></div>
			<div class="mensajes">
				<div class="renglon"></div>
			</div>
			<div class="captura">
				<input id="txtMsj" />
				<div id="envMsg"><img src="./image/sent.png"/></div>
			</div>
		</div>
	</body>
</html>
