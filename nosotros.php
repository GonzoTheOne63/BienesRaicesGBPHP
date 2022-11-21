<?php
    require 'includes/funciones.php';        
    incluirTemplate('header');
?>

<main class="contenedor seccion">
    <h1>Conoce Sobre Nosotros</h1>

    <div class="contenido-nosotros">
        <div class="imagen">
            <picture>
                <source srcset="/build/img/nosotros.webp" type="image/webp">
                <source srcset="/build/img/nosotros.jpg" type="image/jpeg">
                <img loading="lazy" src="/build/img/nosotros.jpg" alt="Sobre Nosotros">
            </picture>
        </div>

        <div class="texto-nosotros">
            <blockquote>
                25 Años de Experiencia
            </blockquote>

            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat
                vitae. In dictum felis et nunc aliquet molestie. Proin tristique
                commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis
                convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor
                non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl
                vel odio semper hendrerit. Nunc porta in justo finibus tempor.
                Suspendisse lobortis dolor quis elit suscipit molestie. Sed
                condimentum, erat at tempor finibus, urna nisi fermentum est, a
                dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur
                malesuada sodales congue. Suspendisse potenti. Ut sit amet
                convallis nisi.
                Aliquam </p>
            <p>Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem.
                Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce
                augue quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis
                tincidunt odio fermentum vel.</p>

        </div>
    </div>
</main>

<section class="contenedor">
    <!-- SEPARA otra sección -->
    <h1>Más Sobre Nosotros</h1>
    <div class="iconos-nosotros">
        <div class="icono">
            <img src="/build/img/icono1.svg" alt="Ícono Seguridad" loading="lazy">
            <h3>Seguridad</h3>
            <p>Impedit nobis inventore harum. Eligendi reprehenderit non hic temporibus dolore molestiae dignissimos
                id
                ratione, obcaecati consequuntur iste adipisci odit voluptate ea numquam</p>
        </div>
        <div class="icono">
            <img src="/build/img/icono2.svg" alt="Ícono Tiempo" loading="lazy">
            <h3>Valor</h3>
            <p>Inventore impedit nobis harum obcaecati consequuntur iste adipisci odit voluptate ea numquam.
                Eligendi
                reprehenderit non hic temporibus dolore molestiae dignissimos id ratione</p>
        </div>
        <div class="icono">
            <img src="/build/img/icono3.svg" alt="Ícono Tiempo" loading="lazy">
            <h3>Compromiso</h3>
            <p>Eligendi reprehenderit non hic temporibus dolore molestiae dignissimos id ratione, impedit nobis
                inventore harum obcaecati consequuntur iste adipisci odit voluptate ea numquam</p>
        </div>
    </div>
</section>

<?php
    incluirTemplate('footer');
?>