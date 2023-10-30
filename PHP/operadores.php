<?php
    $titulo = "Operadores en PHP";
    $contenido = "Los operadores se utilizan para realizar diversas operaciones en PHP,
    desde cálculos matemáticos hasta comparaciones y asignaciones de valores
    a variables. Puedes combinar estos operadores para crear expresiones más
    complejas y realizar tareas específicas.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //VARIABLES A UTILIZAR</h3>
    $numberOne = 10;
    $numberTwo = 2;
    $activo = true;

    <h3 style="margin: 0px !important;">   //OPERADORES ARITMÉTICOS</h3>
    $suma = $numberOne + $numberTwo; // Suma
    echo($suma);
    $resta = $numberOne - $numberTwo;      // Resta
    echo($resta);
    $multiplicacion = $numberOne * $numberTwo; // Multiplicación
    echo($multiplicacion);
    $division = $numberOne / $numberTwo;   // División
    echo($division);
    $modulo = $numberOne % $numberTwo;     // Módulo
    echo($modulo);

    <h3 style="margin: 0px !important;">   //OPERADORES DE COMPARACIÓN</h3>
    $igual = ($numberOne == $numberTwo);      // Igual a
    echo($igual);
    $diferente = ($numberOne != $numberTwo);  // Diferente de
    echo($diferente);
    $menor = ($numberOne < $numberTwo);        // Menor que
    echo($menor);
    $mayor = ($numberOne > $numberTwo);        // Mayor que
    echo($mayor);
    $menorIgual = ($numberOne <= $numberTwo);  // Menor o igual que
    echo($menorIgual);
    $mayorIgual = ($numberOne >= $numberTwo);  // Mayor o igual que
    echo($mayorIgual);

    <h3 style="margin: 0px !important;">   //OPERADORES LÓGICOS</h3>
    $and = ($activo && $numberOne > 0);  // AND
    echo($and);
    $or = ($activo || $numberOne > 0);   // OR
    echo($or);
    $not = !$activo; // NOT
    echo($not);

    <h3 style="margin: 0px !important;">   //OPERADORES DE ASIGNACIÓN</h3>
    $asignacion = 5;  // Asignación simple
    echo($asignacion);
    $asignacion += 2; // Asignación con suma
    echo($asignacion);
    $asignacion -= 3; // Asignación con resta
    echo($asignacion);
    $asignacion *= 4; // Asignación con multiplicación
    echo($asignacion);
    $asignacion /= 2; // Asignación con división
    echo($asignacion);
    </code>
<button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>
