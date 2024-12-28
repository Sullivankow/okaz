<?php


#Fonction pour récupérer la liste dans le tableau pour simuler 
function getListings()
{
    return [
        ["title" => "Rocket league ps4", "price" => 30, "image" => "rocket-league.jpg", "description" => "test description"],
        ["title" => "test2", "price" => 25, "image" => "rocket-league.jpg", "description", "test description"],
        ["title" => "test3", "price" => 35, "image" => "rocket-league.jpg"],
    ];
}




#Récupère les listings avec l'index et non l'id, c'est une simulation
function getListingById(int $id): array
{
    $listings = getListings();
    return $listings[$id];
}
