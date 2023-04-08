<?php
// actualizar_estado.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nuevoEstado = $_POST['estado']; // Obtén el nuevo valor del estado
    // Realiza la actualización en la base de datos o en el sistema
    // según tus necesidades
    // ...
    // Devuelve una respuesta al cliente
    echo 'Actualización exitosa';
}
?>
