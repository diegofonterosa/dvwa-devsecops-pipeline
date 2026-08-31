<?php
// Ejemplo vulnerable a SQL Injection (DVWA - Low)
$id = $_GET['id'];
$query = "SELECT first_name, last_name FROM users WHERE user_id = '$id'";
$result = mysqli_query($conn, $query);
?>
