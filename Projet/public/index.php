<?php

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

include BASE_PATH.'./Core/function.php';
include BASE_PATH.'./Core/Router.php';
include BASE_PATH.'./view/partials/nav.php';
include BASE_PATH.'./view/partials/head.php';
?>
<body>
    <div class="banner">
        <div class="banner-content">
            <h1>Cat Liberation Association</h1>
            <h2>Our Mission</h2>
            <p>The Feline Liberation Association is a non-profit organization founded in 2020 by three cat enthusiasts who have their well-being at heart. Our mission is to take in stray or abandoned cats, care for them, sterilize them and find them the perfect family for them. Because we believe that all cats have the right to their chance, we have a network of foster families and a feline behavior fairy ready to take the time it takes for our pets to get used to human contact and be ready to be adopted.</p>
        </div>
        <div class="adoption-steps">
            <div class="step">
                <?php
                $imagePath = "../img/Visite.jpg";
                ?>
                <h3>Visit</h3>
                <p>You come to meet the cat to see if it really suits your family and your lifestyle.</p>
            </div>
            <div class="step">
                <?php
                $imagePath = "../img/Reservation.jpg";
                ?>
                <h3>Reservation</h3>
                <p>If suitable, you pay for the reservation of the cat and we agree on a time to bring it to your home.</p>
            </div>
            <div class="step">
                <?php
                $imagePath = "../img/sterilisation.jpg";
                ?>
                <h3>Sterilization</h3>
                <p>If the cat is not yet sterilized, we will make an appointment and inform you at the appropriate time.</p>
            </div>
            <div class="step">
                <?php
                $imagePath = "../img/Adoption.jpg";
                ?>
                <h3>Adoption</h3>
                <p>You pay the rest of the adoption fees, we give you his health record and you live happily with your new companion.</p>
            </div>
        </div>
        <div class="container">
            <h1>Our last emancipated cats</h1>
            <div class="cat">
                <?php
                $imagePath = "../img/Cat1.jpeg";
                ?>
                <h1>Puzzle and Rudis</h1>
                <p>Pour adoption</p>
            </div>
            <div class="cat">
                <?php
                $imagePath = "../img/Cat2.jpeg";
                ?>
                <h1>Scratch</h1>
                <p>Adopté</p>
            </div>
            <div class="cat">
                <?php
                $imagePath = "../img/Cat3.jpeg";
                ?>
                <h1>Rita</h1>
                <p>Adoptée</p>
            </div>
        </div>
<?php
include BASE_PATH.'./view/partials/foot.php';
?>