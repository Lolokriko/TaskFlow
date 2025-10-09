
    <?php
    $pageTitle = "Problemas de PHP";
    define("SITE_NAME", "TaskFlow");
    $isPremiumUser = true;
    ?>



    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <header>
            <h1>Bienvenido a <?php echo SITE_NAME; ?></h1>
        </header>

        <main>
            <h2>Perfil del Usuario</h2>
            <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
            <p><strong>Edad:</strong> <?php echo $edad; ?> años</p>
            <p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>
        </main>
    </body>
    </html>
