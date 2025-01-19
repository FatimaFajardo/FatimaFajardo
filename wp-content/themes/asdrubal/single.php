<?php include 'header.php'; ?>

<div class="generic-content">
    <h1><?php the_title (); ?></h1>
    <?php if (get_field('descripcion_web')){
        ?>
        <div class="descripcion_web"><?php echo get_field('descripcion_web');?></div>
        <?php
    }
    else{}
    ?>
    <section id="content">
        <?php echo the_content ();?>
    
    </section>
</div>
<?php include 'footer.php'; ?>