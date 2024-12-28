<?php
require_once "templates/header.php";
require_once "libs/category.php";

$categories = getCategories();
?>

<div class="form-listing w-100 m-auto">

    <h1>Ajouter une annonce</h1>

    <div class="mb-3">
        <form action="" method="" post>
            <label class=form-label" for="title">Titre de l'annonce</label>
            <input class="form-control" type="text" name="title" id="title">
    </div>
    <div classe="mb-3">
        <form action="" method="" post>
            <label class=form-label" for="username">Prix</label>
            <input class="form-control" type="number" name="price" id="price">
    </div>

    <div classe="mb-3">
        <form action="" method="" post>
            <label class=form-label" for="username">Description</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label class=form-label" for="category">Catégories</label>
        <select name="category" id="category" class="form-select">

            <?php foreach ($categories as $key => $category) { ?>
                <option value="<?= $key ?>"><?= $category["name"] ?></option>

            <?php } ?>

        </select>

    </div>


    <input class="btn btn-primary" type="submit" value="Enregistrer">
    </form>
</div>








<?php
require_once "templates/footer.php";

?>