<?php
	//for MySQLi OOP
	$conn = new mysqli('localhost', 'root', '', 'test_crud_op');
	if($conn->connect_error){
	   die("Conexción falló: " . $conn->connect_error);
	}

?>