
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
   <?php  include 'componentes/metas-seo.php';
    ?>
    <base href="https://master-fatima-fajardo.test/">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" >
    <?php wp_head();?>
</head>
    <body>
        <header class="barra-de-navegacion">
            <nav>
                <ul>
                    <ol><a class="enlaces-header" href="index">Inicio</a></ol>
                    <ol><a class="enlaces-header" href="otros-recursos">Otros recursos</a></ol>
                    <ol><a class="enlaces-header" href="guias">Guías</a></ol>
                    <ol><a class="enlaces-header" href="quienes-somos">¿Quiénes somos?</a></ol>
                    <ol><a class="enlaces-header" href="categorias">Categorías</a></ol>
                </ul>
                <div class="cerrar">x</div>
            </nav>
        </header>
        