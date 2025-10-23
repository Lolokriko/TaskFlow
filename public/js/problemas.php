

    <!-- Categoría 1: Variables y Tipos de Datos (Dificultad: Baja) -->
<br>

<?php
  // Problema 1.1: Perfil de Usuario

    $nombre = "Lolo";
    $apellidos = "Rico Ruiz";
    $edad = 19;
    $altura = 1.75;
    $estudiante = true;

    echo "Nombre: $nombre $apellidos <br>";
        echo "Edad: $edad años <br>";
    echo "Altura: $altura m <br>";
        echo "¿Es estudiante?: " . ($estudiante ? "Sí" : "No") ; 
?>


    <br>
    <br>

<?php
  // Problema 1.2: Información de un Producto
    $productoNombre = "Reloj Cartier Santos";
  $precio = 1200;
    $stock = 100;
  $enOferta = true;

    echo "Producto: $productoNombre<br>";
  echo "Precio: $precio €<br>";
    echo "Stock disponible: $stock unidades<br>";
  echo "¿Está en oferta?: " . ($enOferta ? "Sí" : "No") . "<br>";
?>

    <br>
    <br>

<?php
  // Problema 1.3: Constantes de la Aplicación

    define("NOMBRE_SITIO", "Mi Tienda Online");
    define("VERSION_APP", 1.0);

    echo "Nombre del sitio: " . NOMBRE_SITIO . "<br>";
        echo "Versión de la aplicación: " . VERSION_APP . "<br>";

?>


    <!-- Categoría 2: Operadores (Dificultad: Baja-Media) -->

    <br>
    <br>


<?php

    // Problema 2.1: Calculadora Básica

    $num1 = 10;
    $num2 = 5;

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    echo "Número 1: $num1<br>";
        echo "Número 2: $num2<br>";
    echo "Suma: $suma<br>";
        echo "Resta: $resta<br>";
    echo "Multiplicación: $multiplicacion<br>";
        echo "División: $division<br>";

?>

    <br>
    <br>

<?php
// Problema 2.2: Actualización de Stock

    $stock = 100;
    $ventas = 25;

    $stock -= $ventas;
        echo "Después de la venta de $ventas unidades, el stock es: $stock<br>";

    $pedido = 50;
    $stock += $pedido;
        echo "Después de recibir un pedido de $pedido unidades, el stock es: $stock<br>";

?>

    <br>
    <br>

<?php
  // Problema 2.3: Concatenación de Textos

    $nombre = "Lolo";
    $apellido = "Rico Ruiz";
    $curso = "Chapa y pintura con albañileria";

    $fraseCompleta = "El profesor " . $nombre . " " . $apellido . " imparte el curso de " . $curso;

        echo $fraseCompleta . "<br>";


?>

    <br>
    <br>

<?php
  // Problema 2.4: Comparaciones Simples

    $edad = 20;
    $edadMinima = 18;

    var_dump($edad >= $edadMinima);

    $contrasenaGuardada = "9876";
    $contrasenaUsuario = "9876";

    var_dump($contrasenaGuardada === $contrasenaUsuario);
?>

    <br>
    <br>

<?php
  // Problema 2.5: ¿Par o Impar?

$numero = 7;

    if ($numero % 2 == 0) {
        echo "El número $numero es par<br>"; }

        else {
            echo "El número $numero es impar<br>";
    }
?>


    <!-- Categoría 3: Estructuras Condicionales (Dificultad: Media) -->


<?php
  // Problema 3.1: Control de Acceso

    $edad = 19;

        if ($edad >= 18) {
            echo "Puedes pasar <br>"; }

        else {
            echo "No puedes pasar <br>";
             }

?>

    <br>
    <br>

<?php
  // Problema 3.2: Calificación de Examen

    $nota =2;

    if ($nota >= 9 ){
        echo "Sobresaliente <br>"; }

        elseif ($nota >= 7){
            echo "Notable <br>"; }

    elseif ($nota >= 5) {
        echo "Aprobado <br>"; }

        else {
            echo "Suspenso <br>"; }



?>

    <br>
    <br>

<?php
  // Problema 3.3: Menú del Día con switch

    $diaSemana = "viernes";

    switch ($diaSemana) {
        case "lunes":
            echo "Plato del día: Patatas guisadas <br>";
            break;
        case "miércoles":
            echo "Plato del día: salchipapa <br>";
            break;
        case "viernes":
            echo "Plato del día: Hoy no hay comida, Red label con RedBull <br>";
            break;
        default:
            echo "Hoy no hay menú especial <br>";

    break;
    }


?>

    <br>
    <br>

<?php
  // Problema 3.4: Verificación de Usuario Avanzada

    $rolUsuario = "admin";
    $usuarioActivo = true;

    if ($rolUsuario === "admin" && $usuarioActivo) {
        echo "Acceso concedido <br>";
    } else {
        echo "Acceso denegado <br>";
    }

?>

    <br>
    <br>

    <!-- Categoría 4: Bucles (Dificultad: Media-Alta) -->


<?php
  // Problema 4.1: Tabla de Multiplicar del 7

    for ($i = 1; $i <= 10; $i++) {
        $resultado = 7 * $i;

        echo "7 x $i = $resultado<br>";
    }

?>

    <br>
    <br>

<?php
  // Problema 4.2: Cuenta Atrás para Año Nuevo

    $contador = 10;

    while ($contador >= 1) {
        echo "$contador<br>";
        $contador--;
    }

    echo "¡Feliz Año Nuevo!<br>";


?>

    <br>
    <br>

<?php
  // Problema 4.3: Recorrer Nombres

    $alumnos = ["Mondongo", "Miguel", "Julio", "Ufano"];

    foreach ($alumnos as $alumno) {
        echo "Hola, $alumno<br>";
    }

?>

    <br>
    <br>

<?php
  // Problema 4.4: Listado de Productos

    $productos = [
            ["nombre" => "Reloj Cartier", "precio" => 50],
            ["nombre" => "Reloj Trucha", "precio" => 25],
            ["nombre" => "Reloj Rolex", "precio" => 200]
    ];
    foreach ($productos as $producto) {
        echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " €<br>";
    }

?>

    <br>
    <br>

    <!-- Categoría 5: Arrays (Dificultad: Alta) -->


<?php
  // Problema 5.1: Ficha de Usuario

    $usuario = [
            "nombre" => "Lolo",
            "edad" => 19,
            "email" => "lolorico@mondon.go",
            "estudiante" => true
    ];

    echo "Nombre: " . $usuario["nombre"] . "<br>";
        echo "Edad: " . $usuario["edad"] . "<br>";
    echo "Email: " . $usuario["email"] . "<br>";
        echo "¿Es estudiante?: " . ($usuario["estudiante"] ? "Sí" : "No") . "<br>";

?>

    <br>
    <br>

<?php
  // Problema 5.2: Filtrado de Notas

    $notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];

    foreach ($notas as $nota) {
        if ($nota >= 5) {
            echo "Nota aprobada: $nota<br>";
        }
    }

?>

    <br>
    <br>

<?php
  // Problema 5.3: Lista de la Compra Avanzada

    $listaCompra = [
            "Bebida" => ["Red bull", "Agua", "Fanta limon"],
            "Chazina" => ["Caña de lomo", "Chorizo"],
            "Filetes" => ["Ternera", "Mondongo", "Pollo"]
    ];

    foreach ($listaCompra as $categoria => $productos) {
        echo "<strong>$categoria:</strong><br>";

        foreach ($productos as $producto) {
            echo "- $producto<br>";
        }
        echo "<br>";
    }

?>

    <br>
    <br>

<?php
  // Problema 5.4: Calculando el Total del Carrito

    $productos = [

            ["nombre" => "Teclado", "precio" => 50],
            ["nombre" => "Ratón", "precio" => 25],
            ["nombre" => "Monitor", "precio" => 200]
    ];

    $total = 0;

    foreach ($productos as $producto) {
        echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " €<br>";
        $total += $producto["precio"];
    }

    echo "<br>Coste total del carrito: $total €<br>";

?>

    <br>
    <br>


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
