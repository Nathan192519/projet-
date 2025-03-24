<?php

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
include __DIR__ . '/../../config/app.php';
$sql = "SELECT * FROM `equipe`";
$result = $conn->query($sql);

?>
    <h1>Notre Equipe</h1>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <section>
            <h2><?php echo $row['nom'] . " " . $row['prenom']; ?></h2>
            <p>Spécialité : <?php echo $row['specialite']; ?></p>
        </section>
    <?php } ?>
    <?php
    $conn->close();
    ?>
    <?php
        include __DIR__ . '/partials/foot.php';
?>
<style>
    h1{
        font-family: 'hades', sans-serif;
        text-align: center;
        margin-top: 20px;
    }

</style>