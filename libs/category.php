<?php
//Fonction pour récupérer la liste des catégories dans la base de données
function getCategories(PDO $pdo)
{
    $sql = "SELECT * FROM category";
    $query = $pdo->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
