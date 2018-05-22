<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$sql = "INSERT INTO members (firstname, lastname, address) VALUES ('$firstname', '$lastname', '$address')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Datos almacenados correctamente';
		}
		
		else{
			$_SESSION['error'] = 'Algo salió mal al agregar el registro';
		}
	}
	else{
		$_SESSION['error'] = 'Rellena el formulario de agregar primero';
	}

	header('location: index.php');
?>