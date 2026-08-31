<?php
// Ejemplo vulnerable a XSS Reflected (DVWA - Low)
$name = $_GET['name'];
echo "<h1>Hola " . $name . "</h1>";
?>
