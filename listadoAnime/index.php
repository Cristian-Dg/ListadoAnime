<?php
	session_start();
	require_once('bbdd/bbdd.php');
	$pagina='index';
	$titulo='listadoAnime';
	require_once('inc/encabezado.php');
	
?>

<main class="main">
	<div class="container">
		<h1>Listado Anime</h1>
		<p> contenido de pagina </p>
	</div>
</main>

<?php
	require_once('inc/pie.php');
?>