<?php


function redirectToHome():void{
    header('Location: index.php');

    exit();
}

if (false === isset($_POST['email'], $_POST['title'], $_POST['description'])){
  
    redirectToHome();
}

$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];
$em = $_POST['email'];



$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf('Connection error', mysqli_connect_errno());
    exit;
}

$mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$em', '$title', '$desc', '$category')");

$mysqli->close();

redirectToHome();