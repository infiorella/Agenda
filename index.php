<?php
	require_once("conexion.php");
	$sql="SELECT * FROM contactos";
	$resultado= mysqli_query(Conectar(), $sql);
?>

<!DOCTYPE html>
<html lang="es">
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1"><!-- -->
			<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css"/>
			<script src="js/jquery.js"></script>
			<script src="js/jquery.mobile-1.4.5.js"></script>
			<link rel="stylesheet" href="css/estilo.css">
			
	</head>
	
<body>

	<div data-role="page" id="pagina1">
		<div data-role="header" data-theme="b">
			<h1> Agenda</h1>
	</div>
	
	<div data-role="main" class="ui-content">
	     <p id="barra">
		    <span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
			<span> </span>
		</p>
	<p class="cuadro1"><a href="#pagetwo"> Preciona para continuar </a></p>		
	</div>
	
	<div data-role="footer" data-theme="b">
		<h1>Autor: Gilberto Gaona Ramirez</h1>
	</div>
</div>
    
	<!-- pagina 2 -->
	
	<div data-role="page" id="pagetwo">
		<div data-role="header" data-theme="b">
			<h1>Agenda</h1>
	</div>
	<form action="insertarcontacto.php" method="POST">
			<fieldset>
				<legend>Contacto</legend>
				<label>Nombre:</label>
					<input type="text" name="nombre" id="nombre"/>
				<label>Telefono de Casa:</label>
					<input type="telefono" name="telefono" id="telefono"/>
				<label>Celular:</label>
					<input type="celular" name="celular" id="celular"/>
				<label>Email:</label>
					<input type="text" name="email" id="email"/>
				<input type="submit" value="Enviar"/>
			</fieldset>
		</form>
	<p class="cuadro1"><a href="#pagethree">Contactos</a></p>
	<div data-role="footer" data-theme="b">
	       <h1> Autor: Gilberto Gaona Ramirez</h1>
	</div>
	</div>
	<!-- pagina 3 -->
	
	<div data-role="page" id="pagethree">
		<div data-role="header" data-theme="b">
			<h1>Agenda</h1>
	</div>
		<div>
		<form>
			<table border="1" class="tabla1">
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
			</table>
			</form>
			</div>
	<div data-role="footer" data-theme="b">
	       <h1> Autor: Gilberto Gaona Ramirez </h1>
	</div>
	</div>
<script src="js/script.js"></script>
	
</body>
</html>    	

		