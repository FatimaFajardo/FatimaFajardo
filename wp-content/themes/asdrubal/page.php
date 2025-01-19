<?php get_header(); ?>

<div class="generic-content">
    <h1><?php the_title (); ?></h1>
    <section id="content">
        <?php echo the_content ();?>
    
    </section>
</div>
<?php get_footer() ?>