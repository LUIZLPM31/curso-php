<?php

$conn = new PDO("mysql:dbname=bd_php;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET desslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "Luiz";
$password = "22211";
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

echo "Alterado!";

?>