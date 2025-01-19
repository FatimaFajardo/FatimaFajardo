<?php get_header(); ?>

<div class="generic-content">
    <h1>holi</h1>
    <section id="content">
        <?php echo the_content ();?>
    
    </section>
    <?php include $plantillas . 'tres-posts.php';
    ?>
</div>
<?php get_footer(); ?>