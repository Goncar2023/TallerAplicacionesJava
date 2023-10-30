<?php
    $titulo = "Variables en PHP";
    $contenido = "En PHP, las variables se utilizan para almacenar datos. Pueden contener texto, números u otros tipos de datos.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    // Declaración de Variables y Constantes
    $variable = "Hola"; // Variable
    define("PI", 3.14159);     // Constante

    // Tipos de Datos
    $numero = 10;              // Entero
    $precio = 19.99;           // Decimal
    $nombre = "Bruce Wayne";   // Cadenas de texto
    $activo = true;            // Booleano
    $colores = array("amarillo", "negro", "azul"); // Arreglo
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>