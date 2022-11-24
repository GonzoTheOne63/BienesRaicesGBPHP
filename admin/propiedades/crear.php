<?php
    require '../../includes/funciones.php';   
    
    require '../../includes/config/database.php';
    $db = conectarDB();

    /* var_dump($db); */
    
    
    incluirTemplate('header');
?>

<main class="contenedor">
    <!-- SEPARA otra sección -->
    <h1>Crear</h1>
    <a href="/admin" class="boton boton-verde">Clic para Volver</a>

    <form class="formulario" action="">
        <fieldset>
            <legend>Información General</legend>

            <label for="titulo">Título</label>
            <input type="text" id="titulo" placeholder="¿Cómo llamas a tu Propiedad?">

            <label for="precio">Precio</label>
            <input type="number" id="precio" placeholder="¿Cuánto Vale tu Propiedad o Deseas Pagar?">

            <label for="imagen">Imagen</label>
            <input type="file" id="imagen" accept="image/jpeg, image/png">

            <label for="descripcion">Descripción:</label>
            <textarea name="" id="descripcion"></textarea>
        </fieldset>

        <fieldset>
            <legend>Información de la Propiedad</legend>

            <label for="habitaciones">Habitaciones:</label>
            <input type="number" id="habitaciones" placeholder="Ej;3" min="1" max="9">

            <label for="wc">Baños:</label>
            <input type="number" id="wc" placeholder=" Ej;3" min="1" max="9">

            <label for="estacionamientos">Estacionamientos:</label>
            <input type="number" id="estacionamientos" placeholder="Ej;3" min="1" max="9">

        </fieldset>

        <fieldset>
            <legend>Vendedor</legend>

            <select name="" id="">
                <option value="1">Goin</option>
                <option value="2">Maggy</option>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="boton boton-verde">
    </form>
</main>

<?php
    incluirTemplate('footer');
?>