<?php
$connection = new mysqli('localhost', 'root', '', 'db_kk'); // Kosongkan password jika tidak ada
if ($connection->connect_error) {
    die("Gagal Terhubung Ke Database: " . $connection->connect_error);
}
?>
