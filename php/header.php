<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta charset="viewport" content="width=device-width,initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="/css/estilos.css">
        <link rel="stylesheet" href="/css/fonts.css">
        <base href="https://master-fatima-fajardo.test" />

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
        default:
            echo '<!-- No pondre css en este caso del switch case --!>';
        /* Default es el equivalente al else en el caso de swtich*/
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
                    <li><a href="index">Inicio</a></li>
                    <li><a href="otros-recursos">Otros recursos</a></li>
                    <li><a href="blog">Blog</a></li>
                    <li><a href="quienes-somos">¿Quiénes somos?</a></li>
                    <li><a href="https://www.linkedin.com/in/fatimafajardonovo/">Más información</a></li>
                </ul>
                <div class="cerrar">x</div>
            </nav>
        </header>