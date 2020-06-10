<?php
if(isset($_POST['enviar'])){
if(!empty($_POST['intereses'])) {

$archivo = fopen("resultados_formulario.txt","a") or die ("Error al crear");
$nombre = $_POST ['nombre'];
$intereses = $_POST ['intereses'];
fwrite($archivo, $nombre);
fwrite($archivo, "\n");
foreach( $intereses as $interes) {

    fwrite($archivo, $interes); 
    fwrite($archivo, "\n");
}
fwrite($archivo, "\n");
}
}
?>