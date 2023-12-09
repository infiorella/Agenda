<?php
	require_once("conexion.php");
	$sql="SELECT * FROM contactos";
	$resultado= mysqli_query(Conectar(), $sql);
?>

<DOCTYPE html>
<html lang="es">
	<head>
		<title>Contactos</title>
	</head>
	
	<body>
		<table border="1">
			<tr>
				<th>Listas de contactos</th>
			</tr>
			<tr>
				<th>Nombre</th>
				<th>Telefono de casa</th>
				<th>Telefono Celular</th>
				<th>Email</th>
			</tr>
			<?php
				while($renglon = mysqli_fetch_array($resultado)){
						$nombre = $renglon['nombre'];
						$telefono=$renglon['telefono'];
						$celular=$renglon['celular'];
						$email=$renglon['email'];
			?>
			<tr>
				<td><?php echo $nombre ?></td>
				<td><?php echo $telefono ?></td>
				<td><?php echo $celular ?></td>
				<td><?php echo $email ?></td>
			</tr>
			<?php
				}
			?>
	</body>