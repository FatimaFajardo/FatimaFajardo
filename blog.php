<?php
$page='blog';
$h1 = 'El blog del Marketing Digital';
define("h1", "El blog del Marketing Digital");
define("pagina", "blog");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
    <section id="articulo">
        <h1><?php echo h1;?></h1>
        <div class="articulos blog">
            <a href="/blog/como-hacer-una-estrategia-de-e-mail-marketing"><img src="/imagenes/estrategia-e-mail-marketing.jpg" alt="estrategia-e-mail-marketing" width="600" height="400"></a>
            <a href="/blog/como-hacer-una-auditoria-seo"><img src="/imagenes/realizacion-auditoria-seo.png" alt="hacer-auditoria-seo" width="600" height="400"></a>
            <a href="/blog/que-es-el-marketing-digital"><img src="/imagenes/marketing-digital.jpg" alt="marketing-digital" width="600" height="400"></a>
            <a href="/blog/las-medidas-en-css"><img src="/imagenes/medidas-de-css.webp" alt="las medidas de css" width="600" height="400"></a>
        </div>
    </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>
