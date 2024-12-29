<?php



function addUser(PDO $pdo, string $username, string $email, string $password): bool
{

    $query = $pdo->prepare("INSERT INTO user (username, email, password) VALUES (:username, :email, :password)");

    $password = password_hash($password, PASSWORD_DEFAULT) .
        $query->bindValue(':username', $username);
    $query->bindValue(':email', $email);
    $query->bindValue(':password', $password);

    return $query->execute();
}




//Vérifie si user a bien été envoyé 
function verifyUser($user): array|bool
{


    $errors = [];
    if (isset($user["username"])) {
        if ($user["username"] === "") { //Si le champ user est vide on retourne un message d'erreur, lemmesage est sotcké dans un tableau associatif
            $errors["username"] = "Le champ username est obligatoire";
        }
    } else {
        $errors["username"] = "Le champ username n'a pas été envoyé";
    }
    if (count($errors)) {
        return $errors;
    } else
        return true;
}
