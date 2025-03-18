<?php

$header = 'Erreur 404';

require 'partials/head.php';
require 'partials/nav.php';
?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-5xl font-bold mt-6"><?= $msg?></h1>
    </div>
</main>

<?php
require 'partials/foot.php';