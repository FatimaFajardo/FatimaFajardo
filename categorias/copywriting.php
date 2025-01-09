<?php
$page='categorias';
$h1 = 'Todos los recursos de Copywriting';
define("h1", "Todos los recursos de Copywriting"); /* Tengo una duda; ¿Por qué si los ponemos debajo del include no nos reconoce la variable?. Lo intenté y no me funsiono:( */
define("pagina", "categorias");
include $_SERVER["DOCUMENT_ROOT"]. "/php/header.php";
?>
    <section id="info-copywriting">
        <h1><?php echo h1;?></h1>
        <div class="icons">
            <img src="/imagenes/copywriting-icon.png" alt="icon-copywriting">
        </div>
        <div class="articulos blog">
           <div class="posts-articles">
            <div class="article-container">
                <article class="article-content">
                    <div class="article-photos">
                        <a href="/guias/como-hacer-una-auditoria-seo"><img loading="lazy" alt="auditoria-seo" height="100px" width="150px" src="/imagenes/realizacion-auditoria-seo.png"></a>
                    </div>
                    <div class="article-info">
                        <a href="/guias/como-hacer-una-auditoria-seo">
                            <h3 class="article-title">¿Qué es una auditoría SEO?</h3>
                            <p class="article-text">Las auditorias SEO son uno de los puntos más importantes del SEO.Su propósito es diagnosticar problemas y detectar puntos de optimización para mejorar el ranking de un</p>
                            <p class="article-container-link"><span class="leer-mas">Leer más</span></p>
                        </a>
                    </div>
                </article>                
            </div>
            <div class="article-container">
                <article class="article-content">
                    <div class="article-photos">
                        <a href="/guias/como-hacer-una-auditoria-seo"><img loading="lazy" alt="auditoria-seo" height="100px" width="150px" src="/imagenes/realizacion-auditoria-seo.png"></a>
                    </div>
                    <div class="article-info">
                        <a href="/guias/como-hacer-una-auditoria-seo">
                            <h3 class="article-title">¿Qué es una auditoría SEO?</h3>
                            <p class="article-text">Las auditorias SEO son uno de los puntos más importantes del SEO.Su propósito es diagnosticar problemas y detectar puntos de optimización para mejorar el ranking de un</p>
                            <p class="article-container-link"><span class="leer-mas">Leer más</span></p>
                        </a>
                    </div>
                </article>                
            </div>
            <div class="article-container">
                <article class="article-content">
                    <div class="article-photos">
                        <a href="/guias/como-hacer-una-auditoria-seo"><img loading="lazy" alt="auditoria-seo" height="100px" width="150px" src="/imagenes/realizacion-auditoria-seo.png"></a>
                    </div>
                    <div class="article-info">
                        <a href="/guias/como-hacer-una-auditoria-seo">
                            <h3 class="article-title">¿Qué es una auditoría SEO?</h3>
                            <p class="article-text">Las auditorias SEO son uno de los puntos más importantes del SEO.Su propósito es diagnosticar problemas y detectar puntos de optimización para mejorar el ranking de un</p>
                            <p class="article-container-link"><span class="leer-mas">Leer más</span></p>
                        </a>
                    </div>
                </article>                
            </div>
        </div>
    </section>
<?php include $_SERVER["DOCUMENT_ROOT"]. "/php/footer.php";
?>


