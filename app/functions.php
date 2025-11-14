<?php

/**
 * Devuelve un string con la clase CSS
 * correspondiente a la prioridad de la tarea.
 */
function obtenerClasePrioridad($prioridad)
{
    switch ($prioridad) {
        // Si es alta, devuelve la clase para el color rojo
        case 'alta':
            return ' priority-alta';

        // Si es media, devuelve la clase para el color naranja
        case 'media':
            return ' priority-media';

        // Si es baja, devuelve la clase para el color verde
        case 'baja':
            return ' priority-baja';

        // Si no es ninguna, no devuelve nada
        default:
            return '';
    }
}

function renderizarTarea($tarea)
{
    $clasesTarea = 'task-item';

    // CAMBIO 1: 'completed' -> 'completado' (Para que coincida con el PDF)
    if (isset($tarea['completado']) && $tarea['completado']) {
        $clasesTarea .= ' completed';
    }

    // CAMBIO 2: 'priority' -> 'prioridad'
    // Usamos isset por si acaso no viene definida
    $prioridad = isset($tarea['prioridad']) ? $tarea['prioridad'] : '';
    $clasesTarea .= obtenerClasePrioridad($prioridad);

    // CAMBIO 3: 'title' -> 'titulo'
    $titulo = isset($tarea['titulo']) ? htmlspecialchars($tarea['titulo']) : 'Sin título';

    return '<li class="' . $clasesTarea . '">' . $titulo . '</li>';
}

?>