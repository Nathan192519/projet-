<?php
$conn = new mysqli('localhost', 'admin123', '1234', 'admin_db'); // Utilisez les bonnes informations d'identification

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $specialite = $conn->real_escape_string($_POST['specialite']);

    // Insérer les données dans la base
    $sql = "INSERT INTO articles (title, content, created_at, updated_at) VALUES ('$nom', '$prenom', NOW(), NOW())"; // Assurez-vous que les colonnes correspondent à votre table

    if ($conn->query($sql) === TRUE) {
        echo "Article ajouté avec succès.";
        header("Location: admin.dashboard.view.php");
        exit; // Ajoutez exit après header pour éviter d'exécuter le reste du script
    } else {
        echo "Erreur : " . $conn->error;
    }
}

$conn->close();
?>