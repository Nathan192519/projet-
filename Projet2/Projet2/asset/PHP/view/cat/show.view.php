<?php
require base_path('view/partials/head.php');
require base_path('view/partials/nav.php');
require base_path('view/partials/banner.php');

?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <p>Chose à faire n <?= $todo['ktodo']?></p>
        <p><?= htmlentities($todo['title'])?></p>
    </div>

    <div class="mt-4 text-blue-500 hover:underline">
        <a href="/todos/edit?id=<?= $id?>" class="bg-blue-400 hover:shadow hover:bg-danger transition duration-150 px-2 py-1 rounded text-sm text-white mx-1 my-2 hover:bg-blue-600">Mettre la todo à jour...</a>
    </div>

    <form action="/todos" method="POST">
        <input type="hidden" name="id" value="<?= $todo['ktodo']?>">
        <input type="hidden" name="_method" value="DELETE">
            <div class="mt-6 flex items-center justify-end gap-x-6">    
                <button type="submit" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-600">Supprimer la todo</button>
            </div>
        </form>
</main>

<?php
require base_path('view/partials/foot.php');
?>