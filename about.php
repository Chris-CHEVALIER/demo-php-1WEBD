<?php
require("./header.php");
?>
<h1>À propos</h1>

<?php

if ($_POST) {
    echo "<p>Bienvenue {$_POST["firstName"]} {$_POST["lastName"]}, vous avez créé un compte avec l'adresse e-mail {$_POST["email"]} !</p>";
}

?>

<div class="container">

    <form method="POST">
        <label for="firstName">Prénom</label>
        <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Votre prénom">
        <label for="lastName">Nom</label>
        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Votre nom">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Votre adresse e-mail">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Votre mot de passe">
        <input type="submit" value="Envoyer" class="btn btn-primary">
    </form>
</div>

<?php
require("./footer.php");
?>