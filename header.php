<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Contenido del head -->
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php get_the_title($page_id) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta name="description" content="<?php echo esc_attr($metadescription); ?>" />
    <meta name="keywords" content="<?php $keywords ?>">
    <meta name="author" content="<?php $autor ?>">
    <style>
                
        @font-face {
            font-family: 'Fuente_titulo';
            src: url('<?php echo get_template_directory_uri(); ?>/src/Fonts/Ungai.otf');
            font-style: normal;
            font-weight: 400;
          }
        
        @font-face {
            font-family: 'Fuente_texto';
            src: url('./fonts/SegUIVar.ttf');
            font-style: normal;
            font-weight: 320;
          }
        
          
        @font-face {
            font-family: 'Fuente_texto_bold';
            src: url('./fonts/Segoe UI Bold.ttf');
            font-style: extra-bold;
            font-weight: 900;
          }
  
    </style>
</head>
<body <?php body_class(); ?>>
    <div class="container-fluid">
        <center>
            <p>🥷️ Desarrollado por Isaac Navajas Pozo </p>
        </center>
