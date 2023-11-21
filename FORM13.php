<!DOCTYPE html>
<html>
<head>
	<title>Mostrar imangen</title>

</head>
<body bgcolor="pink">
<center>
	<table border="5" >
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>contraseña</th>
				<TH>nivel</TH>
				<TH>foto</TH>

			</tr>
		</thead>
		<tbody>
		<?php
		include("condb1.php");
		$query = "SELECT * FROM administrador";
		$resultado= $conex->query($query);
		while ($row = $resultado->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row['id'];?></td>
			<td><?php echo $row['nombre'];?></td>
			<td><?php echo $row['contraseña'];?></td>
			<td><?php echo $row['nivel'];?></td>

			<td><img   height="80px" while="100px" src="data:imagen.png;base64,<?php echo base64_encode($row['foto']) ?>"/></td>

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