<?php
// Ejemplo vulnerable a Command Injection (DVWA - Low)
$target = $_REQUEST['ip'];
$cmd = shell_exec('ping -c 4 ' . $target);
echo "<pre>{$cmd}</pre>";
?>
