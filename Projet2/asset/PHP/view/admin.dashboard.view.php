<?php

namespace Core;

use PDO;

// Inclure le fichier de configuration
include __DIR__ . '/../../config/app.php';

// Configuration de la base de données
$config = [
    'host' => 'localhost',
    'dbname' => 'admin_db',
    'charset' => 'utf8mb4'
];

// Établir la connexion à la base de données
$db = new Database($config, 'user', 'admin123'); // Utiliser les informations d'identification fournies

$sql = "SELECT * FROM articles"; // Changer de `equipe` à `articles`
$result = $db->query($sql)->get(); // Utiliser la méthode de la classe Database

?>

<h1>ADMINISTRATION</h1>
<table>
    <?php foreach ($result as $row): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['title']; ?></td> <!-- Changer de `nom` à `title` -->
        <td>
            <a href="/asset/controller/cat/update.php?id=<?= $row['id']; ?>">Modifier</a>
            <a href="/asset/controller/cat/create.php">Ajouter</a>
            <a href="destroy.php?id=<?= $row['id']; ?>" onclick="return confirm('Êtes-vous sûr ?');">Supprimer</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<form action="/asset/PHP/view/add.profil.php" method="POST">
    <label for="titre"> Nom :</label>
    <input type="text" id="nom" name="nom" required>
    <br>
    <label for="titre"> Prenom :</label>
    <input type="text" id="prenom" name="prenom" required>
    <br>
    <label for="auteur">Spécialité :</label>
    <input type="text" id="specialite" name="specialite" required>
    <br>
</form>

<style>
    h1 {
        font-family: 'hades', sans-serif;
        text-align: center;
        margin-top: 30px;
    }
</style>