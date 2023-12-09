<?php
	require_once("conexion.php");
	//print_r($_POST);
	$nombre=$_POST["nombre"];
	$telefono=$_POST["telefono"];
	$celular=$_POST["celular"];
	$email=$_POST["email"];
	
	$sql="INSERT INTO contactos(nombre,telefono,celular,email) VALUES ('$nombre','$telefono', '$celular', '$email')";
	$resultado = mysqli_query(Conectar(), $sql);
	if(resultado){
		echo "<script>
				alert('Contacto insertado');
				window.location = 'index.php';
				</script>";
	}else{
		echo "<script>
				alert('Existio alguna falla, favor de intentar nuevamente');
				window.location = 'index.php';
				</script>";
	}
	?>