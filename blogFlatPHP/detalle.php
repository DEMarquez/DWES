<?php
//detalle.php
//Escrito por una persona
	require_once 'modelo.php';
	$entrada = devolver_entrada_id($_GET['id']);
	require 'vistas/show.php';
?>
