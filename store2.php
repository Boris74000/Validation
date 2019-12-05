<?php



include "connection.php";

// var_dump($_POST);die;

// requete sql permettant d'inserer des données dans notre table movies en utilisant des donnees de substitution

$query = "INSERT INTO roles (name, genre_id, producteur, year) VALUES (:name, :email, :password, :phone,)";

$createRole = $dbConnection->prepare($query);

//var_dump($createMovie);


// Remplacement des données de substitution par les données du formulaire reçu
// de PDO 'bindparam()'

$createRole->bindParam(":name", $_POST['name']);
$createRole->bindParam(":email", $_POST['email']);
$createRole->bindParam(":password", $_POST['password']);
$createRole->bindParam(":phone", $_POST['phone']);

$createRole->execute();

// Redirection une fois le film inséré en DB

header('Location: list2.php');


