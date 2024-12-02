<?php
define("enlace1","/otros-recursos.php");
define("enlace2","/quienes-somos.php");
define("enlace3","/blog.php");

function newarticle(){
    echo '<div class="nuevo-articulo"><a href="'.newarticle.'">Mira nuestro nuevo articulo</a></div>';
}

function ctas (){
    echo '<div class="blocazo">
            <div class="bloquecito"><a href="'.enlace1.'" >Otros recursos</a></div>
            <div class="bloquecito"><a href="'.enlace2.'" >¿Quienes somos? </a></div>
            <div class="bloquecito"><a href="'.enlace3.'" >Blog</a></div>
        </div>';
}
/*No se por que no se me pone el css que he hecho pa esto :( 
Lo he configurao pa cuando se añada esa parte de HTML ( lo mal q me explico? JAJAJA) */
?>