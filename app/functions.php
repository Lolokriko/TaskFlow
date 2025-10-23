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

    if ($tarea['completed']) {
        $clasesTarea .= ' completed';
    }

    $clasesTarea .= obtenerClasePrioridad($tarea['priority']);

    $titulo = htmlspecialchars($tarea['title']);

    return '<li class="' . $clasesTarea . '">' . $titulo . '</li>';
}

?>

