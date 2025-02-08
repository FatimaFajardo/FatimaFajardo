<?php
$term= get_queried_object();
$protocol= isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url_sin_string = $protocol.$_SERVER['HTTP_HOST'].strtok($_SERVER['REQUEST_URI'], '?'); /*PEdimos si es http/htps y el nombre del dominio*/
?>
<!--Metaetiquetas principio-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php the_field('custum_meta',$term);?> <!--Con esto podriamos insertar metaetiquetas personalizadas que no existan en el código, ed forma individual-->
    <?php $metarobots_cheked_values= get_field('metarobots',$term);
    if ($metarobots_cheked_values):?>
    <meta name="robots" content=" <?php the_field ('metarobots',$term)?> "/>
    <?php endif; ?>


    <!--Configuracion metatags categoría festivales-->
    <?php 
        if (in_category('festivales')){ 
            $metadescripcion_festivales='Conociendo el festival del '. get_field('nombre').' .Se celebra en '.get_field('paises').' durante el '.get_field('fechas').' .Es un festival de '.get_field('musica').' por '.get_field('precio').' ¿Quieres saber más? ';
        ?>
            <meta name="description" content="<?php echo $metadescripcion_festivales;?>"/>
            <meta name="og:description" content="<?php echo $metadescripcion_festivales;?>"/>
            <meta name="twitter:description" content="<?php echo $metadescripcion_festivales;?>"/>
        <?php }?>
        
<!-- Configuración páginas pilar/no son de categoria -->
    <title><?php the_field('title',$term);?></title>
    <meta name="description" content="<?php the_field('metadescription',$term);?>"/>
    <link rel="canonical" href="<?php if(get_field('canonical',$term)){
        echo the_field('canonical', $term);}
        else{echo $url_sin_string;} ?>"/>
    <!--Open graphs-->
    <meta property="og:title" content="<?php 
    if (get_field('og_title',$term)) {
         the_field('og_title',$term);}
        else{the_field('title',$term);}?>"/>
    <meta property="og:description" content="<?php 
    if (get_field('og_description',$term)) {
         the_field('og_description',$term);}
        else{the_field('metadescription',$term);}?>"/>
    <meta property="og:url" content="<?php if(get_field('canonical',$term)){
        echo the_field('canonical', $term);}
        else{echo $url_sin_string;} ?>"/>
    <meta property="og:image" content="<?php if (get_field('og_img',$term)) { the_field('og_img',$term);}
        else{echo get_template_directory_uri() . '/imagenes/logo-blanco.png';}?>"/> <!--Si no tenemos ninguna imagen podemos poner una por defecto !-->
    <meta property="og:image:secure_url" content="<?php if (get_field('og_img',$term)) { the_field('og_img',$term);}
        else{echo get_template_directory_uri() . '/imagenes/logo-blanco.png';}?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:site_name" content="@FatimaFajardo"/>
<!--Twitter Cards-->
    <meta property="twitter:title" content="<?php
    if (get_field('twitter_title',$term)) { the_field('twitter_title',$term);}
        elseif(get_field('og_title',$term)){ the_field('og_title', $term);}
        else {the_field('title',$term);}?>"/>
    <meta property="twitter:description" content="<?php 
    if (get_field('twitter_description',$term)) { the_field('twitter_description',$term);}
        elseif(get_field('og_description',$term)){ the_field('og_description', $term);}
        else {the_field('metadescription',$term);}?>"/>
    <meta property="twitter:image" content="<?php if (get_field('og_img',$term)) { the_field('og_img',$term);}
        else{echo get_template_directory_uri() . '/imagenes/logo-blanco.png';}?>"/>
    <meta property="twitter:url" content="<?php if(get_field('canonical',$term)){
        echo the_field('canonical', $term);}
        else{echo $url_sin_string;} ?>"/>
    <meta property="twitter:site" content="@FatimaFajardo"/>
    <meta property="twitter:creator" content="@FatimaFajardo"/>






