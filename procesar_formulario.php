<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $mensaje = "¡Gracias, $nombre! Tu formulario ha sido enviado con éxito.";
}
?>
