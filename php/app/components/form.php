<h3 class="p-4 text-2xl">Ecrire un article</h3>

<form method="POST" action="app/target.php">

    <div class="p-4">
        <label for="title">Titre</label> <br />
        <input type="text" class="bg-gray-200 p-2" name="title" placeholder="titre..." required />
    </div>

    <div class="p-4">
        <label for="category">Catégorie</label> <br />
        <input type="text" class="bg-gray-200 p-2" name="category" placeholder="catégorie..." required />
    </div>

    <div class="p-4">
        <label for="content">Contenu</label> <br />
        <textarea name="content" class="bg-gray-200 p-2" required></textarea>
    </div>

    <div class="p-4">
        <button type="submit" class="bg-gray-800 px-4 py-2 text-white">Envoyer</button>
    </div>

</form>