<?php
    $titulo = "Funciones Incorporadas en PHP";
    $contenido = "Las funciones incorporadas o nativas proporcionan funcionalidades predefinidas para diferentes tareas
    Estas funciones son parte del núcleo del lenguaje y están disponibles para su uso sin necesidad de importar bibliotecas externas";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //FUNCIONES DE CADENA</h3>
    //strlen() -> Devuelve la longitud de una cadena
    $longitud = strlen("Hola, mi nombre es: ...");

    //str_replace() -> Reemplaza todas las apariciones de un substring con otro substring en una cadena.
    $texto = "Hola mundo";
    $newtext = str_replace("mundo", "usuario", $texto); // $newtext contendrá "Hola usuario"
    <h3 style="margin: 0px !important;">   //FUNCIONES NUMÉRICAS</h3>
    // round() -> Redondea un número decimal al entero más cercano.
    $decimal = 3.8;

    $redondeado = round($decimal); // $redondeado tendrá el valor 4
    // rand() -> Genera un número entero aleatorio.
    $aleatorio = rand(1, 100); // Genera un número entre 1 y 100
    <h3 style="margin: 0px !important;">   //FUNCIONES DE FECHA Y HORA</h3>
    // date() -> Formatea la fecha y la hora actual según el formato especificado.
    $fecha = date("Y-m-d"); // Obtendrá la fecha actual en formato "año-mes-día"
    <h3 style="margin: 0px !important;">   //FUNCIONES DE ARRAYS</h3>
    // count() -> Devuelve el número de elementos en un array.
    $numeros = [1, 2, 3, 4, 5];
    $cantidad = count($numeros);

    // array_push() -> Añade uno o más elementos al final de un array.
    $letras = ["A", "B", "C"];
    array_push($letras, "D", "F");
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>
<?
$longitud = strlen("Hola, mi nombre es: ..."); //Devuelve la longitud de una cadena
?>