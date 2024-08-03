<?php 

ob_start();

$title = "Insertar Cantidad Producto";

?>

<form action="">
    <h1>
        Insertar Cantidad
    </h1>
</form>


<?php

$content = ob_get_clean();

include __DIR__ . '/layouts/layout.php';