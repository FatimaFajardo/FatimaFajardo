<?php
$page='categorias';
$h1 = 'Todas nuestras categorías';
define("h1", "Categorías web");
define("pagina", "categorias");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
    <section>
        <h1><?php echo h1;?></h1>
        <ul>
            <ol><a href="/categorias/seo">SEO</a></ol>
            <ol><a href="/categorias/sem">SEM</a></ol>
            <ol><a href="/categorias/e-mail-marketing">E-Mail Marketing</a></ol>
            <ol><a href="/categorias/social-media">Social Media</a></ol>
            <ol><a href="/categorias/copywriting">Copywriting</a></ol>
        </ul>
       




    </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>