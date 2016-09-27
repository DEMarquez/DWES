<?php
/*
index.php
redireccion por id
*/

if (isset($_GET["id"])){
  require_once 'detalle.php';//si no carga detalle solo se carga una vez
}else{
  require_once 'todo.php';//cargara todo solo se carga una vez
}

?>
