<?php

$title = "Les rôles";

include "template/header.php";
include "connection.php";

// create a query that shows all the movies from our 'movies' tables
$query = 'SELECT * FROM roles';

// prepare this query before executing
$preparedQuery = $dbConnection ->prepare($query);

// executing the query
$preparedQuery -> execute();

// permet de recupérer le résultat de la requête execute précédement et de la stocker dans une
// variable $movies
$roles = $preparedQuery->fetchAll();

?>

<table border="1">
    <caption> Liste des rôles </caption>
    <thead>
    <tr>
        <th> NOM </th>
        <th> MODIFIER </th>
        <th> SUPPRIMER </th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($roles as $role) {
        ?>
        <tr>
            <td> <?php echo $role['name'];?> </td>

            <td>
                <form action="edit2.php" method="POST">
                    <input type="hidden" name="role_id" value="<?php echo $role['id'];?>">
                    <input type="submit" value="Modifier">

                </form>
            </td>
            <td>
                <form action="delete2.php" method="POST">
                    <input type="hidden" name="role_id" value="<?php echo $role['id'];?>">
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
