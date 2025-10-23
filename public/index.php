<?php

// Carga la biblioteca de funciones. Falla si no la encuentra.
require_once '../app/functions.php';

// Define el array de tareas
$tasks = [
        [
                'title' => 'Completar la práctica de TaskFlow (UD2)',
                'completed' => true,
                'priority' => 'alta'
        ],
        [
                'title' => 'Hacer la compra semanal',
                'completed' => false,
                'priority' => 'media'
        ],
        [
                'title' => 'Llamar al cliente para reunión',
                'completed' => false,
                'priority' => 'alta'
        ],
        [
                'title' => 'Estudiar para el examen de Sistemas',
                'completed' => false,
                'priority' => 'media'
        ],
        [
                'title' => 'Pagar la factura de la luz',
                'completed' => true,
                'priority' => 'baja'
        ]
];

// Incluye el archivo HTML del encabezado
include '../app/views/header.php';

?>

<h2>Tareas Pendientes</h2>

<ul class="task-list">
    <?php
    // Recorre cada tarea del array $tasks
    foreach ($tasks as $task) {

        // Llama a la función de 'functions.php' para "dibujar" el <li>
        // e imprime (echo) el HTML que esta devuelve.
        echo renderizarTarea($task);
    }
    ?>
</ul>

<?php
// Incluye el archivo HTML del pie de página
include '../app/views/footer.php';
?>

