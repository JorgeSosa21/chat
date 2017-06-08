<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Chat</title>
		<script language="javascript" src="js/jquery-1.7.2.min.js"></script>
		<script language="javascript" src="js/fancywebsocket.js"></script>
		<script language="javascript">
			function insertar(){	
				var mensaje = document.getElementById('mensaje').value;
				var tipo = document.getElementById('tipo').value;
				
				$.ajax({
					type: "POST",
					url: "insertar.php",
					data: "mensaje="+mensaje+"&tipo="+tipo,
					dataType:"html",
					success: function(data){
						send(data);
						$("#mensaje").val("");
					}
				});
			}

			function escribiendo(){
				$.ajax({
					type: "POST",
					url: "insertar.php",
					data: "escribiendo=true&tipo="+$("#tipo").val(),
					dataType:"html",
					success: function(data){
						send(data);
					}
				});	
			}
		</script>
	</head>
	<body>
		<input type="text" name="mensaje" id="mensaje" onKeyUp="escribiendo();"/><br />
		<select name="tipo" id="tipo">
		<option value="1">Martin</option>
		<option value="2">Fernanda</option>
		<option value="3">Laura</option>
		<option value="4">Cesar</option>
		</select><br />
		<input type="submit" value="enviar" onclick="insertar();" />
	</body>
</html>