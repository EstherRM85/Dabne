<?php
/**
	Plugin Name:	Noticias feeds
	Plugin URI:		
	Description:	Plugin para generar el XML de noticias para Mailchimp
	Version: 	0.1
	Author:			
	Author URI:	Margarita Padilla García, Esther Ruiz Martínez, Diana Toledo
	License:	GPLv2 or later
**/

/*
* Función para añadir una página al menú de administrador de wordpress
*/
function notifeed_plugin_menu(){
	//Añade una página de menú a wordpress
	add_menu_page('Selección de noticias',				//Título de la página
				'Noticias feeds',			//Título del menú
				'administrator',			//Rol que puede acceder
			  	'notifeed-settings',			//Id de la página de opciones
			  	'notifeed_content_page_settings',	//Función que pinta la página de configuración del plugin
			  	'dashicons-admin-generic');		//Icono del menú
}
add_action('admin_menu','notifeed_plugin_menu');

/*
* Función que pinta la página de configuración del plugin
*/
function notifeed_content_page_settings(){
?>

<div class="wrap">
	<h2>Selección de noticias para Mailchimp</h2>
	

	<form action="<?php echo plugin_dir_url(  __FILE__ ).'/formulario_01.php'; ?>" method="post">
		Nombre: <input type="text" name="nombre">
	
		<h1>Posts</h1>


<?php
/** este código es para que se muestren los resultados de la query **/
	$the_query = get_posts('post_type=post'); // hace la consulta a la base de datos de wordpress



	foreach ( $the_query as $post ) : setup_postdata( $post ); // recorre cada uno de los post dentro de la variable $the_query y crea un input por cada recorrido y lo guarada en $post
		$titulo=get_the_title($post->ID);
		
		echo "<input type='checkbox' name='intereses[]'  value=$post->ID>$titulo<br>";
	endforeach;



	// Restore original Post Data	
	wp_reset_postdata();

?>

		<input type="submit" name="enviar">
	</form>

</div>


	<?php 
	echo "<pre>";
	print_r($the_query);
	echo "</pre>"; 
	?>


<?php
}

?>

