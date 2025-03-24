<?php
include __DIR__ . '/../../config/app.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $sql = "INSERT INTO profils (nom, prenom, email) VALUES ('$nom', '$prenom', '$email')";
    if ($conn->query($sql) === TRUE) {
        header('Location: admin.dashboard.view.php'); // Retour à la page admin
        exit;
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>