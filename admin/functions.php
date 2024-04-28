<?php
//Ocultar todos los avisos de actualizaciones
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=>
time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');




//Redirigir al usuario despues de cerrar sesion a la home
function my_custom_logout_redirect(){
  wp_redirect( home_url() );
  exit();
}
add_action( 'wp_logout', 'my_custom_logout_redirect' );

/* Redirigir pagina de inicio.*/
function go_home(){
    wp_redirect( home_url() );
    exit();
}
add_action('wp_login','go_home');


/* alargar el tiempo máximo de sesión*/
function extender_periodo_sesion( $expire ) {
    return 9999999999999999999999999999999999999999999999999999999;
}
add_filter( 'auth_cookie_expiration', 'extender_periodo_sesion' );


//quitar imagenes sobrantes, hacer que por cada imagen subida solo se suba una
/* Evitar que WP cree tamaños de imagen adicionales */
function ayudawp_desactiva_medios_adicionales_wp($sizes) {
	
	unset($sizes['thumbnail']);    // desactivar tamaño miniatura
	unset($sizes['medium']);       // desactivar tamaño medio
	unset($sizes['large']);        // desactivar tamaño grande
	unset($sizes['medium_large']); // desactivar tamaño medio-grande
	unset($sizes['large']); // desactivar tamaño medio-grande 
	unset($sizes['scaled']); // desactivar tamaño medio-grande 
	unset($sizes['1536x1536']);    // desactivar tamaño medio-grande x2
	unset($sizes['2048x2048']);    // desactivar tamaño grande x2 de WooCommerce
	unset($sizes['woocommerce_thumbnail']);    // desactivar tamaño grande x2 de WooCommerce
	unset($sizes['woocommerce_single']);    // desactivar tamaño grande x2 de WooCommerce
	unset($sizes['woocommerce_gallery_thumbnail']);    // desactivar tamaño grande x2 de WooCommerce
}
add_action('intermediate_image_sizes_advanced', 'ayudawp_desactiva_medios_adicionales_wp');


/* Evitar que se creen los tamaños escalados */
add_filter('big_image_size_threshold', '__return_false');


/* Evitar que se creen otros tamaños de imagen */
function ayudawp_desactiva_otros_medios_adicionales() {
remove_image_size('post-thumbnail'); // desactiva imágenes añadidas mediante set_post_thumbnail_size() 
remove_image_size('otro-tamaño-adicional'); // desactiva cualquier otro tamaño de imagen adicional
}
add_action('init', 'ayudawp_desactiva_otros_medios_adicionales');

/* Ocultar todos los avisos admin de WP */
add_action('admin_head', 'ayudawp_ocultar_avisos_wp'); function ayudawp_ocultar_avisos_wp() { ?> <style> .notice, .woocommerce-message { display: none;} </style> <?php }


/* Este codigo va a servir para definir un extracto menor a 45 palabras*/
function custom_excerpt_length( $length ) {
 return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>