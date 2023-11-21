<!doctype html>
<html lang ="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="z-va-compatible" content="IE-edge">
	<meta name ="viewport" content="width-device-width,initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="13.css">
</head>
<body>
	<form action="validacion.php"method="POST">
		<table width=90%>
		<div class="caja1">
<img src="araña.jpg" height="80" width="80" align="center">
</div>	
		<tr>
		<td>escribe tu usuario 
		<td><input name="nombre" type="text" placeholder="escribe solo tu usuario" required/></td>
		</tr>
		<tr>
        <td>escribe tu contraseña
		<td><input name="contra" type=password =required/></td>	
	    </tr>
	    <tr>
	<td colspan="2"><input type="submit" value="Enviar datos">
</tr>
</table>
</form>	
</body>	
</html>