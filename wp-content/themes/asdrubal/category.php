<?php get_header(); ?>
<div class="generic">
    <h1><?php single_cat_title(); ?></h1>
        <section id="content">
            <?php echo category_description(); ?>
        </section>
        <section id="postscontainer">
            <?php $argc = array(
        /*-1 es para ver todos los posts*/
            'posts_per_page' => '3',
            'post_type' => 'post',
            'orderby' => 'date', //poniendolo como rand se ordenan de manera aleatoria//
            'order' => 'DESC',); //quedan todos los posts ordenados por fecha en forma descendente//
            $the_query = new WP_Query( $argc); //un loop
                if ( $the_query->have_posts()){
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                include $plantillas .'/display-posts/card-posts.php';}}
                else{ echo "No hay posts"; }
            wp_reset_postdata();?>
        </section>
        
</div>
<?php get_footer(); ?>