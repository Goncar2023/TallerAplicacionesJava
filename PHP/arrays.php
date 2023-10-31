<?php
    $titulo = "Arrays en PHP";
    $contenido = "Son estructuras de datos que pueden contener múltiples valores.
    Pueden almacenar diversos tipos de datos, como números, cadenas, objetos y hasta otros arrays. ";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //ARRAYS INDEXADOS - CREACIÓN</h3>
    //Un array indexado utiliza índices numéricos para acceder a los elementos del array. La indexación comienza desde 0.
    $colores = array("Rojo", "Amarillo","Verde", "Azul");// Crear un array indexado

    // Otra forma de crear un array indexado
    $colores = ["Rojo", "Amarillo","Verde", "Azul"]; //A partir de PHP 5.4
    <h3 style="margin: 0px !important;">   //ARRAYS INDEXADOS - ACCESO Y MANIPULACIÓN</h3>
    // Acceder a elementos en un array indexado
    echo $colores[0] ."&lt;br&gt;";
    echo $colores[1]."&lt;br&gt;";
    echo $colores[2]."&lt;br&gt;";
    echo $colores[3] ."&lt;br&gt;";

    // Modificar un elemento en un array indexado
    $colores[1] = "Rosado";
    echo "Color modificado: ".$colores[1]."&lt;br&gt;";

    // Añadir un elemento al final de un array indexado
    $colores[] = "Calipso";
    echo "Color agregado: ".$colores[4]."&lt;br&gt;";

    // Eliminar un elemento de un array indexado
    echo "Arreglo antes de eliminar un elemento";
    var_dump($colores);
    unset($colores[1]);
    echo "Arreglo después de eliminar un elemento";
    var_dump($colores);

    <h3 style="margin: 0px !important;">   //ITERACIÓN A TRAVÉS DE UN ARRAY</h3>
    //Iteración con for
    $colores = array("Rojo", "Amarillo","Verde", "Azul");
    for ($i = 0; $i < count($colores); $i++) {
        echo $colores[$i] . "&lt;br&gt;";
    }

    //Iteración con foreach
    foreach($colores as $color) {
        echo $color."&lt;br&gt;";
    }
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>