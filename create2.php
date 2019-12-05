<?php

$title = "Enregistrement d'un rôle";

include "template/header.php";

?>

    <div class="formulaire">
        <form action="store2.php" method="POST">
            <div>
                <label for="name"> Rôle </label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="bouton">
                <input type="submit" value="Créer" class="creer" >
            </div>
        </form>
    </div>

<?php




include "template/footer.php";

