<?php require_once('configuracion.php'); ?>

<?php
function conectarBD(){
	try{
		$con = new PDO ("mysql:host=".HOST.";dbname=".DBNAME.";charset=utf8",USER,PASS);
		$con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Error de conexión: ".$e->getMessage();
		file_put_contents("PDOErrors.txt","\r\n".date('j F, Y, g:i a ').$e->getMessage(), FILE_APPEND);
		exit;
	}
	return $con;
}

function desconectarBD($con){
	$con=NULL;
	return $con;
}

?>