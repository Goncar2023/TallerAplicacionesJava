<?php
    $titulo = "Bucles en PHP";
    $contenido = "Los bucles como for, while y do-while se utilizan para repetir bloques de código.";
?>

<h2><?php echo $titulo; ?></h2>
<p><?php echo $contenido; ?></p>

<div class="codigo" id="codigo">
    <code>
    <h3 style="margin: 0px !important;">   //FOR</h3>
    for ($i = 0; $i < 5; $i++) {
        echo "Número: $i &lt;br&gt;";
    }
    <h3 style="margin: 0px !important;">   //WHILE</h3>
    $i = 0;//ITERADOR
    while ($i < 5) {
        echo "Número: $i &lt;br&gt;";
        $i++;
    }
    <h3 style="margin: 0px !important;">   //DO-WHILE</h3>
    $i = 0;//ITERADOR
    do {
        echo "Número: $i &lt;br&gt;";
        $i++;
    } while ($i < 5);
    </code>
    <button id="btn-copiar" data-clipboard-target="#codigo">Copiar código</button>
</div>