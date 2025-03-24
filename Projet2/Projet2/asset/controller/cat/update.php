<?php

include __DIR__ . '/../../config/app.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];

    $sql = "UPDATE profils SET nom='$nom', prenom='$prenom', email='$email' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: admin.dashboard.view.php');
        exit;
    } else {
        echo "Erreur : " . $conn->error;
    }
}
?>