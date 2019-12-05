<?php

$title = "Enregistrement d'un utilisateur";

include "template/header.php";

?>

<div class="formulaire">
    <form action="store.php" method="POST">
        <div>
            <label for="name"> Nom </label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="email"> Email </label>
            <input type="email" name="email" id="email" required>
        </div>

        <div>
            <label for="password"> Mot de passe </label>
            <input type="password" name="password" id="password" required>
        </div>

        <div>
            <label for="phone"> Téléphone </label>
            <input type="tel" name="phone" id="phone" required>
        </div>

        <div>
            <label for="role_id"> ID du Rôle </label>
            <input type="text" name="role_id" id="role_id" required>
        </div>

        <div class="bouton">
            <input type="submit" value="Créer" class="creer" >
        </div>
    </form>
</div>

<?php




include "template/footer.php";
