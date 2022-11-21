<?php
    require 'includes/funciones.php';        
    incluirTemplate('header', $inicio = true);
?>
<!-- INCLUDES agrega todo el HTML a los archivos. Si presiso un cambio lo hago al hader -->

<main class="contenedor parrafo">
    <!-- SEPARA otra sección -->
    <h1>Más Sobre Nosotros</h1>

    <div class="iconos-nosotros">
        <div class="icono">
            <img src="/build/img/icono1.svg" alt="Ícono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Impedit nobis inventore harum. Eligendi reprehenderit non hic temporibus dolore molestiae dignissimos
                id ratione, obcaecati consequuntur iste adipisci odit voluptate ea numquam</p>
        </div>
        <div class="icono">
            <img src="/build/img/icono2.svg" alt="Ícono Tiempo" loading="lazy">
            <h3>Valor</h3>
            <p>Inventore impedit nobis harum obcaecati consequuntur iste adipisci odit voluptate ea numquam.
                Eligendi reprehenderit non hic temporibus dolore molestiae dignissimos id ratione</p>
        </div>
        <div class="icono">
            <img src="/build/img/icono3.svg" alt="Ícono Tiempo" loading="lazy">
            <h3>Compromiso</h3>
            <p>Eligendi reprehenderit non hic temporibus dolore molestiae dignissimos id ratione, impedit nobis
                inventore harum obcaecati consequuntur iste adipisci odit voluptate ea numquam</p>
        </div>
    </div>
</main>

<section class="seccion contenedor">
    <h2>Casas y Departamentos en Venta</h2>

    <div class="contenedor-anuncios">
        <div class="anuncio">
            <picture>
                <source srcset="/build/img/anuncio1.webp">
                <source srcset="/build/img/anuncio1.jpg" type="image/jpeg">
                <img loading="lazy" src="/build/img/anuncio1.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa de lujo en el lago</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div><!-- contenido-anuncio -->
        </div><!-- anuncio -->

        <div class="anuncio">
            <picture>
                <source srcset="/build/img/anuncio2.webp">
                <source srcset="/build/img/anuncio2.jpg" type="image/jpeg">
                <img loading="lazy" src="/build/img/anuncio2.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Terminados de lujo</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>


        <div class="anuncio">
            <picture>
                <source srcset="/build/img/anuncio3.webp">
                <source srcset="/build/img/anuncio3.jpg" type="image/jpeg">
                <img loading="lazy" src="/build/img/anuncio3.jpg" alt="anuncio">
            </picture>
            <div class="contenido-anuncio">
                <h3>Casa con alberca</h3>
                <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio
                </p>
                <p class="precio">$3,000,000</p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg"
                            alt="icono estacionamiento">
                        <p>3</p>
                    </li>
                    <li>
                        <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono dormitorio">
                        <p>3</p>
                    </li>
                </ul>
                <a href="anuncio.php" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
        </div>

    </div><!-- contenedor-anuncios -->

    <div class="alinear-derecha">
        <a href="anuncios.php" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tus sueños</h2>
    <p>Llena el formulario y un asesor se pondrá en contacto contigo a la brevedad</p>
    <a href="contacto.html" class="boton-amarillo">Contáctanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog1.webp" type="imagen/webp">
                    <source srcset="/build/img/blog1.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="/build/img/blog1.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                    <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y, lo
                        mejor, ahorrando en gastos.</p>
                </a>
            </div>
        </article>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog2.webp" type="imagen/webp">
                    <source srcset="/build/img/blog2.jpg" type="imagen/jpeg">
                    <img loading="lazy" src="/build/img/blog2.jpg" alt="Texto Entrada Blog">
                </picture>
            </div>
            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                    <p>Maximiza espacios a tu hogar con esta guía, combina muebles, colores y decoración y le darás
                        vida y calidez</p>
                </a>
            </div>
        </article>
    </section>

    <section class="testimoniales">
        <h3>Testimoniales</h3>
        <div class="testimonial">
            <blockquote>El personal se comportó de una excelente forma, muy buena atención y la casa que nos
                ofrecieron cumple con todas nuestras expectativas</blockquote>
            <p>- Maggy DeBar</p>
        </div>
    </section>
</div>
<?php
    incluirTemplate('footer');
?>