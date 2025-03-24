<?php
session_start();

// Vérification des identifiants
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_id = $_POST['admin_id'];
    $password = $_POST['password'];

    // Remplacez ces valeurs par celles de votre base de données
    $admin_id_correct = 'admin123';
    $password_correct = 'password123';

    if ($admin_id === $admin_id_correct && $password === $password_correct) {
        $_SESSION['admin_logged_in'] = true; // L'utilisateur est connecté
        header('Location:/asset/PHP/view/admin_login.php'); // Redirection vers le tableau de bord
        exit;
    } else {
        $error = "Identifiant ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion Admin</title>
</head>
<body>
    <h1>Connexion Admin</h1>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?= $error; ?></p>
    <?php endif; ?>
    <form method="POST">
        <label for="admin_id">Identifiant :</label>
        <input type="text" id="admin_id" name="admin_id" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>