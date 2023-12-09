<?php
	function Conectar(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "agenda";
		
		$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
		
		/*if ($conexion){
			echo "Conectado";
		}else{
			echo "Desconectado"
		}*/
		return $conexion;
	}
	
		//Conectar();
?>