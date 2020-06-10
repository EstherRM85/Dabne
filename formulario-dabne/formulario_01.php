


<?php

$archivo = fopen("resultados_formulario.txt","a") or die ("Error al crear");

$nombre = $_POST ['nombre'];
$intereses = $_POST ['intereses'];


fwrite($archivo, $nombre);
fwrite($archivo, "\n");
fwrite($archivo, $intereses);
fwrite($archivo, "\n");

 ?>

