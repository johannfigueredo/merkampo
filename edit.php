<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Registro actualizado correctamente.';
		}

		
		else{
			$_SESSION['error'] = 'Algo salió mal al actualizar miembro.';
		}
	}
	else{
		$_SESSION['error'] = 'Selecciona un miembro para editarlo.';
	}

	header('location: index.php');

?>