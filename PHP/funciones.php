<?php
    $titulo = "Funciones en PHP";
    $contenido = "Una función es un bloque de código que realiza una tarea específica y puede ser llamado y
    ejecutado en cualquier parte de un script PHP.Las funciones se utilizan para organizar el código en
    bloques reutilizables, lo que facilita el mantenimiento y la modificación del código.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //DECLARACIÓN DE FUNCIONES</h3>
    function saludo() {
        echo "¡Hola, mundo! &lt;br&gt;";
    }

    saludo();  // Llama a la función
    <h3 style="margin: 0px !important;">   //FUNCIONES CON PARÁMETROS Y VALOR DE RETORNO</h3>
    function sumar($a, $b) {
    return $a + $b;
    }

    function restar($a, $b) {
        return $a -$b;
    }

    function multiplicar($a, $b) {
        return $a * $b;
    }

    function dividir($a, $b) {
        return $a / $b;
    }

    $suma = sumar(3, 5);  //Llama a la función con dos argumentos
    $resta = restar(10, 5);
    $multiplicacion = multiplicar(4, 6);
    $division = dividir(100, 5);

    echo "La suma es: $suma &lt;br&gt; ";
    echo "La resta es: $resta &lt;br&gt;" ;
    echo "La multiplicacion es: $multiplicacion &lt;br&gt;" ;
    echo "La division es: $division &lt;br&gt;" ;
    <h3 style="margin: 0px !important;">   //FUNCIONES CON PARÁMETROS PREDETERMINADOS</h3>
    function bienvenida($nombre = "Usuario") {
        echo "Bienvenid@, $nombre! &lt;br&gt;";
    }

    bienvenida();  // Imprime el valor predeterminado
    bienvenida("Eliana González");
    <h3 style="margin: 0px !important;">   //FUNCIONES CON ARGUMENTOS VARIABLES</h3>
    //Esta función toma un número variable de argumentos y los imprime uno por uno en líneas separadas.
    function listarCiudades(...$ciudades) {
        foreach ($ciudades as $ciudad) {
            echo "$ciudad &lt;br&gt;";
        }
    }

    listarCiudades("La Serena", "Santiago", "Iquique","Vicuña");  // Imprime cada ciudad en una nueva línea
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>