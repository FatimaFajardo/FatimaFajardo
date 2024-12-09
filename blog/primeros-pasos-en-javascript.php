<?php
$metadescripcion ='¿Cómo empezar a aprender JavaScript';
$page='categoria blog';
$titulo = "Los primeros aspectos que debes saber de JavaScript";
define("pagina", "directorio blog");
define("newarticle","/las-medidas-en-css");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
        <script src="/scripts/pruebas.js"></script>
        <section id="articulo">
                <h1>Los primeros aspectos que debes saber de JavaScript</h1>
                    <div class="introduccion">
                    <noscript>Conoce más artículos</noscript>
                        <p id="firstjs">Para aprender a utilizar JavaScript debemos de comenzar con el comando oneclick</p>
                        <button type="button" onclick='document.getElementById("firstjs").innerHTML = "Boton clickable"'>
                            ¡Enteráte aquí!
                        </button>
                    </div>
                    <div class="cuerpo">

                    </div>
                    <img src="/imagenes/marketing-digital.jpg" loading="lazy" alt="marketing-digital" width="600" height="400">
                    <div class="conclusion">
                    </div>
                    <?php newarticle();?>
        </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>