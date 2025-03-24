<?php
include __DIR__ . '/../../config/app.php';
$conn = new mysqli('localhost', 'utilisateur', 'mot_de_passe', 'equipe');
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}

// Vérifiez que l'ID est défini
if (!isset($_GET['id'])) {
    die("Erreur : ID manquant !");
}

$id = intval($_GET['id']); // Assurez-vous que l’ID est un entier

// Requête SQL sécurisée
$stmt = $conn->prepare("DELETE FROM cat WHERE id = ?");
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Catégorie supprimée avec succès.";
    header("Location: admin.dashboard.view.php"); // Redirection après suppression
} else {
    echo "Erreur lors de la suppression : " . $stmt->error;
}

$stmt->close();
$conn->close();
?>