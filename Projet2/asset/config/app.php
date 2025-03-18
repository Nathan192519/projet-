<?php
$servername = "localhost";
$username = "root"; // Changez cela si vous avez un autre utilisateur
$password = ""; // Assurez-vous d'avoir défini le bon mot de passe
$database = "equipe_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
?>