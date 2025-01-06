<?php
$page='home';
$h1 = 'El blog del Marketing Digital';
define("h1", "El blog del Marketing Digital"); /* Tengo una duda; ¿Por qué si los ponemos debajo del include no nos reconoce la variable?. Lo intenté y no me funsiono:( */
define("pagina", "inicio");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
        <section id="home">
        <aside class="button-info"> 
            <div class="solicitud-button" id="openForm">Solicita información</div>
        </aside>
        <?php include $_SERVER["DOCUMENT_ROOT"]. "/php/solicitud-info.php"; ?>
            <h1><?php echo h1;?></h1>
                <p>En esta web puedes encontrar todo tipo de recuros que te ayudarán a empezar tu camino en el marketing digital</p>
                <ul>
                    <li class="marketing">SEO</li>
                    <li class="marketing">SEM</li>
                    <li class="marketing">E-Mail Marketing</li>
                    <li class="marketing">Social Media</li>
                </ul>
            <h2 id="heading2">¿Que más puedes encontrar?<h2>
                <div>
                    <p>Además, en nuestro blog podrás encontrar información actualizada sobre todas estas temáticas.</p>
                    <figure>
                        <img class="imagen-initial" width="600" height="400" alt="todo-sobre-marketing-digital" src="/imagenes/marketing-digital.jpg">
                        <figcaption>¿Qué es el Marketing Digital?</figcaption>
                    </figure>
                    <div class="imagenfalsa"></div>
                    <div class="imagenfalsa2">
                        <a href="/blog/como-hacer-una-estrategia-de-e-mail-marketing">Marketing_igi</a>
                    </div>
                </div>
                <?php allarticles();?>
                <div class="going-up" id="goUpBtn"><img src="/imagenes/go-up.png" width="35" height="35" /></div>
                <script>
                    const goUpBtn = document.getElementById('goUpBtn');
                    window.onscroll = function() {
                        if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {goUpBtn.style.display = "block";} 
                        else {goUpBtn.style.display = "none";}};
                    goUpBtn.onclick = function() {window.scrollTo({ top: 0, behavior: 'smooth' });};
                </script>
        </section>
        <script src="/scripts/solicitud-info.js"></script>
<?php 
include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>
<script src="/scripts/pruebas.js"></script>