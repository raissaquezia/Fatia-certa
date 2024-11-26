<?php
define('HOST', 'localhost');
define('USER', 'Raissa'); // Usuário padrão
define('PASS', 'root'); // Senha vazia por padrão no XAMPP/WAMP
define('DB', 'cakeshopdb');

$conn = mysqli_connect(HOST, USER, PASS, DB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
