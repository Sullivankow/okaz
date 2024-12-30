<?php
require_once "templates/header.php";
require_once "libs/pdo.php";

require_once "libs/listing.php";


$listings = getListings($pdo);

?>


<div class="row">
    <h1>Les annonces</h1>
</div>


<div class="row ">
    <div class="col-md-3">
        <form action="" method="get">
            <h2>Filtrer</h2>
            <div class="p-3 border-bottom">
                <input type="text" name="search" id="search" class="form-control" placeholder="Recherhcer">
            </div>
            <div class="p-3 border-bottom">
                <label for="price">Prix</label>
                <div class="input-group">
                    <input type="number" name="min-price" id="min-price" class="form-control" placeholder="Prix minimum">
                    <span class="input-group-text">€</span>

                </div>
                <div class="input-group">
                    <input type="number" name="max-price" id="max-price" class="form-control" placeholder="Prix maximum">
                    <span class="input-group-text">€</span>

                </div>

            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary w-100">Filtrer</button>

            </div>
        </form>

    </div>


    <div class="col-md-9">


        <div class="row">
            <?php foreach ($listings as $key => $listing) {
                require "templates/listing_part.php";
            } ?>

        </div>

    </div>

</div>









<?php
require_once "templates/footer.php";
?>