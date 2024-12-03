<?php
var_dump(http_response_code(404));
header("Location:https://master-fatima-fajardo.test/blog.php");
$page='home';
$h1 = 'El blog del Marketing Digital';
define("h1", "El blog del Marketing Digital"); /* Tengo una duda; ¿Por qué si los ponemos debajo del include no nos reconoce la variable?. Lo intenté y no me funsiono:( */
define("pagina", "inicio");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
        <section id="home">
            <h1><?php echo h1;?></h1>
                <p>En esta web puedes encontrar todo tipo de recuros que te ayudarán a empezar tu camino en el marketing digital</p>
                <ul>
                    <li class="marketing">SEO</li>
                    <li class="marketing">SEM</li>
                    <li class="marketing">E-Mail Marketing</li>
                    <li class="marketing">Social Media</li>
                </ul>
                <?php ctas(); ?>
                <p>Además, en nuestro blog podrás encontrar información actualizada sobre todas estas temáticas.</p>
                <figure>
                    <img width="600" height="400" alt="todo-sobre-marketing-digital" src="/imagenes/marketing-digital.jpg">
                    <figcaption>¿Qué es el Marketing Digital?</figcaption>
                </figure>
                <div class="imagenfalsa"></div>
                <div class="imagenfalsa2">
                    <a href="/blog/como-hacer-una-estrategia-de-e-mail-marketing.php">Marketing_igi</a>
                </div>
        </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>