<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $genero = $_POST["genero"];
    $comentarios = $_POST["comentarios"];
    $pais = $_POST["pais"];

    // Realizar acciones con los datos (por ejemplo, almacenar en una base de datos)

    // Mostrar un mensaje de éxito al usuario
    echo "¡Gracias por registrarte, $nombre!<br>";
    echo "Correo Electrónico: $email<br>";
    echo "Género: $genero<br>";
    echo "Comentarios: $comentarios<br>";
    echo "País: $pais<br>";
    echo "<a href='useForm.php' class='link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover'>Volver</a>";

} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Procesar datos del formulario enviado por GET
    $nombre = $_GET["nombre"];
    $email = $_GET["email"];
    $genero = $_GET["genero"];
    $comentarios = $_GET["comentarios"];
    $pais = $_GET["pais"];

    // Mostrar un mensaje de éxito al usuario
    echo "¡Gracias por registrarte, $nombre!<br>";
    echo "Correo Electrónico: $email<br>";
    echo "Género: $genero<br>";
    echo "Comentarios: $comentarios<br>";
    echo "País: $pais<br>";
    echo "<a href='useForm.php' class='link-primary link-offset-2 text-decoration-underline link-underline-opacity-25 link-underline-opacity-100-hover'>Volver</a>";
}else {
    // Si el formulario no se envió correctamente, redirigir o mostrar un mensaje de error
    echo "Error al procesar el formulario.";
}
?>