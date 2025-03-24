<?php

include __DIR__ . '/partials/header.php';
include __DIR__ . '/../../config/app.php';
$sql = "SELECT * FROM `equipe`";
$result = $conn->query($sql);
?>

<h1>ADMINISTRATION</h1>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nom']; ?></td>
        <td><?= $row['prenom']; ?></td>
        <td>
            <a href="/asset/controller/cat/update.php">Modifier</a>
            <a href="/asset/controller/cat/create.php">Ajouter</a>
            <a href="destroy.php?id=<?php echo $row['id']; ?>"onclick="return confirm('Êtes-vous sûr ?');">Supprimer</a>
        </td>
    </tr>
    <?php endwhile; ?>
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
    h1{
        font-family: 'hades', sans-serif;
        text-align: center;
        margin-top: 30px;
    }
</style>