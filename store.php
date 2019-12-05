<?php

include "connection.php";

var_dump($_POST);

$query = "INSERT INTO users (name, email, password, phone, role_id) VALUES (:name, :email, :password, :phone, :role_id)";

$createUser = $dbConnection->prepare($query);


$createUser->bindParam(":name", $_POST['name']);
$createUser->bindParam(":email", $_POST['email']);
$createUser->bindParam(":password", $_POST['password']);
$createUser->bindParam(":phone", $_POST['phone']);
$createUser->bindParam(":role_id", $_POST['role_id']);


$createUser->execute();

var_dump($createUser);

//header('Location: list.php');


