<?php

if (!empty($_POST) && isset($_POST)) {

    include 'connection.php';

    var_dump($_POST);

    $query = "UPDATE users SET
    name = :name,
    email = :email,
    password = :password,
    phone = :phone
WHERE 
    id = :user_id;";

    $updateUser = $dbConnection->prepare($query);

//var_dump($updateMovie);

    $updateUser->bindParam(":name", $_POST['name']);
    $updateUser->bindParam(":email", $_POST['email']);
    $updateUser->bindParam(":password", $_POST['password']);
    $updateUser->bindParam(":phone", $_POST['phone']);
    $updateUser->bindParam(":user_id", $_POST['user_id']);

    $updateUser->execute();

    header('Location:list.php');


} else {
    header('Location:list.php');
}



//var_dump($movie['genre_id']);

