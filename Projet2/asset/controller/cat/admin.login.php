<?php
session_start();

use Core\Database;

// Configuration de la base de données
$config = [
    'host' => 'localhost',
    'dbname' => 'admin_db',
    'charset' => 'utf8mb4'
];

// Établir la connexion à la base de données
$db = new Database($config, 'root', ''); // Remplacez '' par votre mot de passe si nécessaire

// Vérification des identifiants
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin_id = $_POST['admin_id'];
    $password = $_POST['password'];

    // Requête pour vérifier les identifiants dans la base de données
    $query = "SELECT * FROM users WHERE username = :username";
    $db->query($query, ['username' => $admin_id]);
    $user = $db->find();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['admin_logged_in'] = true; // L'utilisateur est connecté
        header('Location: /asset/controller/admin.dashboard.php'); // Redirection vers le tableau de bord
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
</body>
</html>