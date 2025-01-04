<form method="POST" enctype="multipart/form-data">

	<input type="file" name="fileUpload">

	<button type="submit">Enviar</button>
	
</form>
<style>
	button {
		color: #398;
		background-color: red;
		
	}
	button:hover{
		cursor: pointer;
		background-color: black;
	}
	form{
		background-color: red;
	}
</style>

<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$file = $_FILES['fileUpload'];

	if ($file['error']) {

		throw new Exception("Error: ".$file['error']);		

	}

	$dirUploads = "uploads";

	if (!is_dir($dirUploads)) {

		mkdir($dirUploads);

	}

	if (move_uploaded_file($file['tmp_name'], $dirUploads . DIRECTORY_SEPARATOR . $file['name'])) {

		echo "Upload realizado com sucesso!";

	} else {

		throw new Exception("Não foi possível realizar o upload.");
		

	}

}

?>