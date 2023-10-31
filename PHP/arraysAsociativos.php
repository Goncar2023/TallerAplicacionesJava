<?php
    $titulo = "Arrays Asociativos en PHP";
    $contenido = "Un array asociativo utiliza claves personalizadas para acceder a los elementos del array.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //ARRAYS ASOCIATIVOS - CREACIÓN</h3>
    //Crear un array asociativo
    $persona = array(
        "nombre" => "Clark",
        "apellido" => "Kent",
        "edad" => 28,
        "ciudad" => "Smallville"
    );

    //Otra forma a partir de PHP 5.4
    $persona = [
        "nombre" => "Clark",
        "apellido" => "Kent",
        "edad" => 28,
        "ciudad" => "Smallville"
    ];
    <h3 style="margin: 0px !important;">   //ARRAYS ASOCIATIVOS - ACCESO Y MANIPULACIÓN</h3>
    //Acceder a elementos en un array asociativo
    echo "Nombre completo: ".$persona["nombre"]." ".$persona["apellido"]."&lt;br&gt;";
    echo "Ciudad: ".$persona["ciudad"]."&lt;br&gt;";

    //Modificar un elemento en un array asociativo
    $persona["edad"] = 30;
    echo "Edad: ".$persona["edad"]."&lt;br&gt;";

    // Añadir un elemento a un array asociativo
    $persona["profesion"] = "Reportero";
    echo "Profesion: ".$persona["profesion"]."&lt;br&gt;";

    // Eliminar un elemento de un array asociativo
    unset($persona["ciudad"]);
    var_dump($persona);
    <h3 style="margin: 0px !important;">   //ITERACIÓN A TRAVÉS DE UN ARRAY</h3>
    /// Obtener las claves del array asociativo
    $claves = array_keys($persona);

    // Obtener la longitud del array
    $longitud = count($claves);
    // Iterar a través del array asociativo utilizando un bucle for
    for ($i = 0; $i < $longitud; $i++) {
        $clave = $claves[$i];
        $valor = $persona[$clave];
        echo "$clave: $valor "."&lt;br&gt;";
    }

    //Iterar a través de un array asociativo con foreach
    foreach($persona as $clave => $valor) {
        echo $clave .": ". $valor ."&lt;br&gt;";
    }
    <h3 style="margin: 0px !important;">   //ARRAY ASOCIATIVO COMPLEJO</h3>
    //Crear un array asociativo complejo
    $usuario = [
        "nombre" => "Mario Rojas",
        "edad" => 30,
        "direccion" => [
            "calle" => "Av. Francisco de Aguirre #321",
            "ciudad" => "La Serena",
            "codigo_postal" => "170000"
        ],
        "contacto" => [
            "email" => "mario@example.com",
            "telefono" => "+569 98653214"
        ],
        "intereses" => ["Programación", "Viajes", "Música"]
    ];

    // Acceder a los datos del array asociativo complejo
    echo "Nombre: " . $usuario["nombre"] . "&lt;br&gt;";
    echo "Edad: " . $usuario["edad"] . "&lt;br&gt;";
    echo "Dirección: " . $usuario["direccion"]["calle"] . ", " . $usuario["direccion"]["ciudad"] . ", " . $usuario["direccion"]["codigo_postal"] . "&lt;br&gt;";
    echo "Email: " . $usuario["contacto"]["email"] . "&lt;br&gt;";
    echo "Intereses: " . implode(", ", $usuario["intereses"]); //implode -> Convierte el array en una cadena separada por comas
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>