<?php

include 'connection.php';

var_dump($_POST);

$query = "DELETE FROM roles WHERE id = :role_id";

$deleteRole = $dbConnection->prepare($query);

$deleteRole->bindParam(':role_id', $_POST['role_id']);

$deleteRole->execute();

header('Location:list2.php');