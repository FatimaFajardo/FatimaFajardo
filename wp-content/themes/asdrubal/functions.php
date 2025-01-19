<?php 
$plantillas = __DIR__ . '/plantillitas/';
 

function tresposts(){
    $plantillas = __DIR__ . '/plantillitas/';
    include $plantillas . 'tres-posts.php';
    
}
add_shortcode('lastposts', 'tresposts'); /*nombre + funcion*/
?>
