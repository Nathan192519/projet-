<?php
$conn = new mysqli('localhost', 'utilisateur', 'mot_de_passe', 'equipe');

if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les données du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = $conn->real_escape_string($_POST['nom']);
    $contenu = $conn->real_escape_string($_POST['prenom']);
    $auteur = $conn->real_escape_string($_POST['specialite']);

    // Insérer les données dans la base
    $sql = "INSERT INTO articles (nom, prenom, specialite) VALUES ('$nom', '$prenom', '$specialite')";

    if ($conn->query($sql) === TRUE) {
        echo "Article ajouté avec succès.";
        header("Location: admin.dashboard.view.php");
    } else {
        echo "Erreur : " . $conn->error;
    }
}

$conn->close();
?>