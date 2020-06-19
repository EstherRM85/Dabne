<?php
if(isset($_POST['enviar'])){
if(!empty($_POST['intereses'])) {

$archivo = fopen("resultados_formulario.xml","w") or die ("Error al crear");
// $nombre = $_POST ['nombre'];
$intereses = $_POST ['intereses'];

echo "Bienvenido,  sus datos han sido enviados correctamente"; 

// fwrite($archivo, $nombre);
fwrite($archivo, "<?xml version='1.0' encoding='UTF-8'?>");
fwrite($archivo, "\n");
fwrite($archivo, "<rss version='2.0'>");
fwrite($archivo, "\n");
fwrite($archivo, "<channel>");
fwrite($archivo, "\n");
fwrite($archivo, "<title>Economía solidaria</title>");
fwrite($archivo, "\n");
fwrite($archivo, "<link>https://economiasolidaria.org/</link>");
fwrite($archivo, "\n");
fwrite($archivo, "<description>El portal de la economía solidaria</description>");
fwrite($archivo, "\n");
fwrite($archivo, "<language>es</language>");
fwrite($archivo, "\n");
fwrite($archivo, "<item>");
fwrite($archivo, "\n");

foreach( $intereses as $interes) {
    fwrite($archivo, "<title>$interes</title>"); 
    fwrite($archivo, "\n");
}
fwrite($archivo, "</item>");
fwrite($archivo, "\n");
fwrite($archivo, "</channel>");
fwrite($archivo, "\n");
fwrite($archivo, "</rss>");
}
}
?>