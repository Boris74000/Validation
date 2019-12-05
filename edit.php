<?php

//if (!empty($_POST) && isset($_POST)) {

    $title = "Editer les utilisateurs";
    include "template/header.php";
    include "connection.php";
var_dump($_POST);

    $query = "SELECT * FROM roles WHERE id = :role_id";

    $editRole = $dbConnection->prepare($query);

    $editRole->bindParam(":role_id", $_POST['role_id']);

    $editRole->execute();

    $role = $editRole->fetch();

    //var_dump($role['name']);

    //var_dump($_POST);
    ?>
    <div class="formulaire">
        <form action="update.php" method="POST">
            <div>
                <label for="name"> Nom </label>
                <input type="text" name="name" id="name" required value="<?php echo $role['name'] ?>">
            </div>

            <div>
                <label for="email"> Email </label>
                <input type="email" name="email" id="email" required value="<?php echo $role['email'] ?>">
            </div>

            <div>
                <label for="password"> Mot de passe </label>
                <input type="password" name="password" id="password" required
                       value="<?php echo $role['password'] ?>">
            </div>

            <div>
                <label for="phone"> Téléphone </label>
                <input type="tel" name="phone" id="phone" required value="<?php echo $role['phone'] ?>">
            </div>

            <div class="bouton">
                <input type="submit" value="Créer" class="creer">
                <input type="hidden" name="movie_id" value="<?php echo $role['id']; ?>">
            </div>
        </form>
    </div>
    <?php

//} else {
  //  header('Location:liste.php');
//}
