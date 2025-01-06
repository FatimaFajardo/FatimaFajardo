<?php
define("enlace1","otros-recursos");
define("enlace2","quienes-somos");
define("enlace3","guias");

function newarticle(){
    echo '<div class="nuevo-articulo"><a href="'.newarticle.'">Mira nuestro nuevo articulo</a></div>';
}

function ctas (){
    echo '<div class="blocazo">
            <div class="bloquecito"><a href="'.enlace1.'" >Otros recursos</a></div>
            <div class="bloquecito"><a href="'.enlace2.'" >¿Quienes somos? </a></div>
            <div class="bloquecito"><a href="'.enlace3.'" >Guias</a></div>
        </div>';
}

function allarticles(){
    echo '
    <div class="al-dia-eventos">
        <div class="col-12 col-md-9">
            <p>Todos nuestros artículos</p>
        </div>
        <div class="col-12 col-md-3"><a class="btn btn-default" href="/todos-nuestros-articulos">Conocelos aquí</a></div>
    </div>';
}
?>
