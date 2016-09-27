<?php $titulo = $entrada['titulo'] ?>

<?php ob_start() ?>
	<h1><?= $entrada['titulo'] ?></h1>

	<div>
		<?= $entrada['descripcion'] ?>
	</div>

<?php $contenido = ob_get_clean() ?>

<?php include 'plantilla.php' ?>
