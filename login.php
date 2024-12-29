<?php

require_once "templates/header.php";

?>

<div class="form-signin w-100 m-auto">
    <form method="post">
        <img class="mb-4" src="" alt="logo" width=75" height="55">
        <h1 class="h3 mb-3 fw-normal">Se connecter</h1>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email </label>
        </div>
        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Mot de passe</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Connexion</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2024_2025</p>
    </form>
</div>

<?php
require_once "templates/footer.php";
?>