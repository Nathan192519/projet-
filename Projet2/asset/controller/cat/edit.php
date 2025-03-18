<?php
include __DIR__ . '/../asset/config/app.php';

$id = $_GET['id'];
$sql = "SELECT * FROM profils WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<h2>Modifier un Profil</h2>
<form method="POST" action="modifier.php">
    <input type="hidden" name="id" value="<?= $row['id']; ?>">
    <input type="text" name="nom" value="<?= $row['nom']; ?>" required>
    <input type="text" name="prenom" value="<?= $row['prenom']; ?>" required>
    <input type="email" name="email" value="<?= $row['email']; ?>" required>
    <button type="submit">Mettre à jour</button>
</form>