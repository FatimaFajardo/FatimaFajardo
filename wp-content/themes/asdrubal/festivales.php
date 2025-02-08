<?php get_header ?>
<div class="generico">
    <h1> <?php the_title();?>
    <section id="contenido">
        <?php if (in_category('festivales')){
            

    }
    else{;}
    echo the_content(); ?>
    </section>
</div>
<?php get_footer(); ?>
