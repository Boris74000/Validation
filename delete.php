<?php

include 'connection.php';

//var_dump($_POST);

$query = "DELETE FROM users WHERE id = :user_id";

$deleteUser = $dbConnection->prepare($query);

$deleteUser->bindParam(':user_id', $_POST['user_id']);

$deleteUser->execute();

header('Location:list.php');

