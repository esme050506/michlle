<!DOCTYPE html>
<html>
<head>
	<title>Mostrar imangen</title>

</head>
<body bgcolor="skyblue">
<center>
	<table border="2">
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Imagen</th>
				<TH>MODIFICAR</TH>
				<TH>ELIMINAR</TH>
			</tr>
		</thead>
		<tbody>
		<?php
		include("condb1.php");
		$query = "SELECT * FROM clientes";
		$resultado= $conex->query($query);
		while ($row = $resultado->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row['id_cliente'];?></td>
			<td><?php echo $row['nombre'];?></td>
			<td><img height="50px" src="data:imagen.png;base64,<?php echo base64_encode($row['foto']) ?>"/></td>
			<th><a href="FORM6.PHP">Modificar</a>
            <th><a href="FORM9.PHP">Eliminar</a></th>
		</tr>
		<?php
		}
		?>

<button onclick="location.href='tes.php'">Regresar</button>
		</tbody>
	</table>
</center>
</body>
</html>