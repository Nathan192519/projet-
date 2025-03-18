<?php

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
session_start();

$error_id = "";
$error_password = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $admin_id = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Définir les identifiants corrects
    $admin_id_correct = "admin123";
    $password_correct = "password123";

    // Vérifier les identifiants
    if ($admin_id !== $admin_id_correct) {
        $error_id = "Identifiant incorrect.";
    } elseif ($password !== $password_correct) {
        $error_password = "Mot de passe incorrect.";
    } else {
        // Connexion réussie : Démarrer une session et rediriger
        $_SESSION['admin_logged_in'] = true;
        header('Location: /asset/PHP/view/admin.dashboard.view.php');
        exit;
    }
}
?>
?>
 <h1>Admin Login</h1>
    <form class="admin" action="/asset/PHP/view/connexion.php" method="post">
    <?php if (!empty($error_id)): ?>
    <span class="error"><?= $error_id; ?></span>
    <?php endif; ?>
        <label for="username">Admin ID :</label><br>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password :</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <?php if (!empty($error_password)): ?>
        <span class="error"><?= $error_password; ?></span>
        <?php endif; ?>
        <button type="submit">Sign in</button>
    </form>
    </form>
    <hr>
<?php include __DIR__ . '/partials/foot.php'; ?>

<style>
    h1{
        font-family: "hades";
        text-align: center;
    }
.admin{
    text-align: center;
    margin-bottom: 50px;
}
.error {
            color: red;
            font-size: 14px;
            margin-bottom: 5px;
        }
</style>