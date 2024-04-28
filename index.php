<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header();

if ( is_single() ) {
		get_template_part( 'templateswp/single' );
	}
	
if ( is_home() ) {
		get_template_part( 'templateswp/home' );
	}

if ( is_page() ) {
		get_template_part( 'pages/' );
	}
	


/*

is_404()                  // Comprueba si la página actual es un error 404.
is_admin()                // Comprueba si se está viendo el panel de administración.
is_archive()              // Comprueba si se está viendo un archivo (categoría, etiqueta, etc.).
is_attachment()           // Comprueba si se está viendo una página de archivo de adjuntos.
is_author()               // Comprueba si se está viendo una página de autor.
is_category()             // Comprueba si se está viendo una página de archivo de categoría.
is_comments_popup()       // Comprueba si se está viendo una ventana emergente de comentarios.
is_date()                 // Comprueba si se está viendo una página de archivo de fecha.
is_day()                  // Comprueba si se está viendo una página de archivo diario.
is_feed()                 // Comprueba si se está viendo un feed.
is_front_page()           // Comprueba si se está viendo la página de inicio del sitio.
is_home()                 // Comprueba si se está viendo la página de inicio del blog.
is_month()                // Comprueba si se está viendo una página de archivo mensual.
is_multisite()            // Comprueba si se está utilizando WordPress en modo multisitio.
is_main_site()            // Comprueba si se está viendo el sitio principal en un entorno multisitio.
is_network_admin()        // Comprueba si se está viendo el panel de administración de red en un entorno multisitio.
is_new_day()              // Comprueba si es un nuevo día.
is_new_month()            // Comprueba si es un nuevo mes.
is_new_year()             // Comprueba si es un nuevo año.
is_page()                 // Comprueba si se está viendo una página.
is_page_template()        // Comprueba si se está utilizando una plantilla de página específica.
is_paged()                // Comprueba si se está viendo una página paginada.
is_preview()              // Comprueba si se está viendo una vista previa de una publicación o página.
is_privacy_policy()       // Comprueba si se está viendo la página de política de privacidad.
is_robots()               // Comprueba si se está viendo el archivo robots.txt.
is_search()               // Comprueba si se está viendo una página de resultados de búsqueda.
is_single()               // Comprueba si se está viendo una entrada única.
is_singular()             // Comprueba si se está viendo una entrada única, página o tipo de contenido personalizado.
is_ssl()                  // Comprueba si se está utilizando SSL.
is_sticky()               // Comprueba si se está viendo una entrada adhesiva.
is_tag()                  // Comprueba si se está viendo una página de archivo de etiquetas.
is_tax()                  // Comprueba si se está viendo un archivo de taxonomía.
is_taxonomy()             // Comprueba si se está viendo un archivo de taxonomía específico.
is_term()                 // Comprueba si se está viendo una página de archivo de términos.
is_time()                 // Comprueba si se está viendo una página de archivo de hora.
is_trackback()            // Comprueba si se está viendo un trackback.
is_year()                 // Comprueba si se está viendo una página de archivo anual.

*/

get_footer();
?>