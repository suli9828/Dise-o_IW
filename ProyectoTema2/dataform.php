<?php
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    echo $nombre;
    echo "<br>";
    $apellidos = $_POST['apellidos'];
    echo $apellidos;
    echo "<br>";
    $direccion = $_POST['direccion'];
    echo $direccion;
    echo "<br>";
    $telefono = $_POST['telefono'];
    echo $telefono;
    echo "<br>";
}
