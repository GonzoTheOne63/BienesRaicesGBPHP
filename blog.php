<?php
    require 'includes/funciones.php';        
    incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Nuestro Blog</h1>


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
                <p>Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y, lo
                    mejor,
                    ahorrando en gastos.</p>
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
                <p>Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                <p>Maximiza espacios a tu hogar con esta guía, combina muebles, colores y decoración y le darás vida
                    y
                    calidez</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/build/img/blog3.webp" type="imagen/webp">
                <source srcset="/build/img/blog3.jpg" type="imagen/jpeg">
                <img loading="lazy" src="/build/img/blog3.jpg" alt="Texto Entrada Blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Terraza en el techo de tu casa</h4>
                <p>Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                <p>Consejos para construir una terraza en el techo de tu casa con los mejores materiales y, lo
                    mejor,
                    ahorrando en gastos.</p>
            </a>
        </div>
    </article>
    <article class="entrada-blog">
        <div class="imagen">
            <picture>
                <source srcset="/build/img/blog4.webp" type="imagen/webp">
                <source srcset="/build/img/blog4.jpg" type="imagen/jpeg">
                <img loading="lazy" src="/build/img/blog4.jpg" alt="Texto Entrada Blog">
            </picture>
        </div>
        <div class="texto-entrada">
            <a href="entrada.php">
                <h4>Guía para la decoración de tu hogar</h4>
                <p>Escrito el: <span>04/11/22</span> por: <span>Admin</span> </p>
                <p>Maximiza espacios a tu hogar con esta guía, combina muebles, colores y decoración y le darás vida
                    y
                    calidez</p>
            </a>
        </div>
    </article>
</main>

<?php
    incluirTemplate('footer');
?>