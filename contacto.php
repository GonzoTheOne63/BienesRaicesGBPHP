<?php
    require 'includes/funciones.php';        
    incluirTemplate('header');
?>

<main class="contenedor">
    <!-- SEPARA otra sección -->
    <h1>Página de Contacto</h1>

    <picture srcset="/build/img/destacada3.webp" type="image/webp">
        <picture srcset="/build/img/destacada3.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada3.jpg" alt="Imagen Contacto">
        </picture>
        <h2>Llene el Formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensajel">Mensaje:</label>
                <textarea placeholder="Tus comentarios nos ayudan a mejorar, gracias." id="mensaje"></textarea>

            </fieldset>

            <fieldset>
                <legend>Información Sobre la Propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                <p>¿Cómo desea ser contactado?</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">E-mail</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>
                <p>Si prefirió teléfono, escoja la fecha y la hora</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">
                <div>
                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" name="hora" min="09:00" max="18:00" required>

                </div>
            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
        </form>

</main>

<?php
    incluirTemplate('footer');
?>