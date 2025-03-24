<?php

const BASE_PATH = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR;

include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/nav.php';
?>

<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #444;
        }
        p {
            margin: 1em 0;
        }
        .btn-container {
            margin-top: 20px;
            text-align: left;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            margin-right: 10px;
            background-color: #0073e6;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #005bb5;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Une entreprise française unique</h1>
        <p>
            Créée il y a 10 ans, chez <strong>Tiger Protection pour Chats</strong>, nous sommes les spécialistes de l'installation de filets de protection domestiques. 
            Situés à 40 km au nord de Paris, à Montataire, nous avons participé à l'installation de milliers de filets de protection pour garantir la sécurité des chats.
        </p>
        <p>
            Grâce à notre équipe de techniciens, nous intervenons partout en France et en Europe pour proposer des solutions de protection sur mesure, 
            de la simple fenêtre ou balcon jusqu'au jardin.
        </p>
        <div class="btn-container">
            <a href="#" class="btn">Notre histoire</a>
            <a href="#" class="btn">Nos valeurs</a>
        </div>
    </div>
<?php
        include __DIR__ . '/partials/foot.php';
?>