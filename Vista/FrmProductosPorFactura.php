<?php
$control = new CtrCliente();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $credito = $_POST["credito"];
    
    $control->guardarCliente($codigo, $nombre, $email, $telefono, $credito);
}
?>