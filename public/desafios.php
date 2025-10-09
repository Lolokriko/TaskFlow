
<br><br>

    <!-- Desafíos de Lógica y Algoritmos Puros -->

<?php

    // Desafío 1: La Sucesión de Fibonacci


    ?>

<br><br>

<?php

    //Desafío 2: Comprobador de Números Primos

    $numero = 29;
    $esPrimo = null;

    if ($numero <= 1) {
        $esPrimo = false;
    }

        else {

            for ($i = 2; $i <= sqrt($numero); $i++) {

                if ($numero % $i == 0) {
                    $esPrimo = false;
                    break;

                }
            }
        }

            if ($esPrimo)
    {
        echo "El número $numero es primo<br>";
    }

    else

    {
        echo "El número $numero no es primo<br>";
    }

?>


<br><br><br>

    <!-- Desafíos de Manipulación de Datos -->

<?php

    // Desafío 3: ¿Es un Palíndromo?


?>


<br><br>


<?php

    // Desafío 4: Ordenación Manual de un Array (Bubble Sort)


?>


<br><br><br>

    <!-- Mini-Proyecto: Simulador de Cajero Automático (ATM) -->


<?php
//


?>

<br><br>

    <!-- Desafío Creativo: Arte con Bucles -->

    <?php
    //


    ?>









<br><br><br><br>




    <?php
    define("SITE_NAME", "Desafios.php");
    $nombre = "Lolo";
    $edad = 19;
    $isPremiumUser = false;
    ?>

    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
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
