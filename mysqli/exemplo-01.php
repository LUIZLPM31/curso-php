<?php

$conn = new mysqli("localhost", "root", "", "bd_php");

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
	exit;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);

$login = "ti_fuder";
$pass = "12345";

$stmt->execute();

/*$login = "root";
$pass = "!@#$";

$stmt->execute();*/

?>