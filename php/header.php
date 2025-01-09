<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
        <base href="https://master-fatima-fajardo.test/">
        <link rel="stylesheet" href="/css/estilos.css">
        <link rel="stylesheet" href="/css/fonts.css">
    <?php
        include_once $_SERVER['DOCUMENT_ROOT'].'/php/funciones.php';
    switch(constant('pagina')){
        case 'inicio';
            break;
        case 'blog';
           echo '<link rel="stylesheet" href="/css/blog.css">'; /*Podriamos poner diferentes hojas de estilo para cada 'tipo'o categoria  de pagona */       
        break;
            case 'otros recursos';
            case 'quienes somos'; /*podemos poner dos casos a la vez*/
            echo '<link rel="stylesheet" href="/css/otros.css">';
        break;
        case 'categorias';
            echo '<link rel="stylesheet" href="/css/categorias.css">';
        break;
        default:
            echo '<!-- No pondre css en este caso del switch case --!>';
    }?>

        <title><?php
            if (empty ($titulo)){
                        if(empty($h1)){echo 'Marketing digital';}
                        else{echo h1 ;}
            }
            else {echo "$titulo";}?></title>
        <meta name="description" content="<?php
            switch($page){
                case 'home';
                    echo 'Todo sobre Marketing digital';
                break;
                case 'blog';
                    echo 'El blog de Marketing digital';
                break;
                case 'otros recursos';
                    echo 'Otros recursos de Marketing Digital';
                break;
                case 'quienes somos';
                    echo '¿Quienes somos?';
                default:
                    echo "$metadescripcion";}?>">
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
        