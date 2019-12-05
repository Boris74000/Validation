<?php

$title = 'Les Utilisateurs';
include "template/header.php";
include "connection.php";

// create a query that shows all the movies from our 'movies' tables
$query = 'SELECT * FROM users';

// prepare this query before executing
$preparedQuery = $dbConnection ->prepare($query);

// executing the query
$preparedQuery -> execute();

// permet de recupérer le résultat de la requête execute précédement et de la stocker dans une
// variable $movies
$users = $preparedQuery->fetchAll();

?>

<table border="1">
    <caption> Liste des utilisateurs </caption>
    <thead>
    <tr>
        <th> NOM </th>
        <th> EMAIL </th>
        <th> PASSWORD </th>
        <th> PHONE </th>
        <th> ROLE ID</th>
        <th> MODIFIER</th>
        <th> SUPPRIMER </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user) {
        ?>
        <tr>
            <td> <?php echo $user['name'];?> </td>
            <td> <?php echo $user['email'];?></td>
            <td> <?php echo $user['password']; ?> </td>
            <td> <?php echo $user['phone']; ?> </td>
            <td> <?php echo $user['role_id']; ?> </td>
            <td>
                <form action="edit.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                    <input type="submit" value="Modifier">

                </form>
            </td>
            <td>
                <form action="delete.php" method="POST">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php
    }

    ?>
    </tbody>
</table>


<?php


include "template/footer.php";
