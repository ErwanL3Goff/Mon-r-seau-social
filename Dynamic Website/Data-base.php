<?php
$servername = "localhost";
$username = "user";
$password = "KurosakiDante296";
$dbname = "ma_base";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}