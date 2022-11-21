<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BienesRaicesGB</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>

<body>
    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <!-- AGREGA el logo de inicio solo donde esté presente 'inicio' -->
        <!-- CON "inicio" se hace diferente a las otras páginas -->
        <div class="contenedor contenido-header">
            <!-- ESPACIO para centrar el contenido del HEADER -->
            <div class="barra">
                <!-- MANTIENE el contenido de la barra separada del resto -->
                <a href="/">
                    <img class="logotipo" src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>


                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div> <!-- CIERRE de la barra -->

            <?php if($inicio) { ?>
            <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>

        </div>
    </header>