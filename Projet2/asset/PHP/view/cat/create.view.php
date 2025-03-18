<?php
require base_path('view/partials/head.php');
require base_path('view/partials/nav.php');
require base_path('view/partials/banner.php');

?>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <form action="/todos" method="post">
            
            <div class="mt-10 gap-x-6 gap-y-8">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-gray-900">Nom de la Todo</label>
                    
                    <div class="mt-2">
                        <div class="flex items-center rounded-md pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <textarea name="title" id="title" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Saisissez votre todo..." required></textarea>
                        </div>
                    </div>

                    <div class="text-red-500 text-xs mt-2">
                        <?= $errors['title'] ?? null?>
                    </div>
                </div>
            </div>
            
            <div class="mt-6 flex items-center justify-end gap-x-6">    
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Ajouter la todo</button>
            </div>
        </form>
    </div>




</main>

<?php
require base_path('view/partials/foot.php');
