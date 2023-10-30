<?php
    $titulo = "Condicionales en PHP";
    $contenido = "Las estructuras condicionales como if, else, elseif o switch-case se utilizan para tomar decisiones.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //VARIABLES A UTILIZAR</h3>
    $edad = 18;
    $opcion = 2;
    <h3 style="margin: 0px !important;">   //IF-ELSE</h3>
    if ($edad >= 18) {
        echo "Eres mayor de edad.";
    } else {
        echo "Eres menor de edad.";
    }
    <h3 style="margin: 0px !important;">   //IF-ELSEIF-ELSE</h3>
    if ($edad < 18) {
        echo "Eres menor de edad";
    } elseif ($edad >= 18 && $edad < 60) {
        echo "Eres adulto";
    } else {
        echo "Eres un adulto mayor";
    }
    <h3 style="margin: 0px !important;">   //OPERADOR TERNARIO</h3>
    $mensaje = ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";
    echo $mensaje;
    <h3 style="margin: 0px !important;">   //SWITCH-CASE</h3>
    switch ($opcion) {
        case 1:
            echo "Opción 1 seleccionada";
            break;
        case 2:
            echo "Opción 2 seleccionada";
            break;
        default:
            echo "Opción no válida";
    }
    </code>
<button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>