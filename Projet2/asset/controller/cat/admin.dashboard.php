<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: /aseet/controller/cat/admin.login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Bienvenue sur le tableau de bord Admin</h1>
    <p>Vous êtes connecté en tant qu'administrateur.</p>
    <a href="/asset/controller/cat/logout.admin.php">Se déconnecter</a>