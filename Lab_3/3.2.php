<?php
function redirectToHome():void{
    header('Location: index(31).php');
    exit();
}
if (false === isset($_POST['Email'], $_POST['Title'], $_POST['Description'])){
    redirectToHome();
}
$c = $_POST['Category'];
$t = $_POST['Title'];
$des = $_POST['Description'];
$em = $_POST['Email'];
$dir = "categories/{$c}/{$em}";
if (is_dir($dir)){
    $filePath = "categories/{$c}/{$em}/{$t}.txt";
} else{
    $folder = "categories/{$c}/{$em}";
    $res = mkdir($folder); 
    $filePath = "categories/{$c}/{$em}/{$t}.txt";
}
if (false ===  file_put_contents($filePath, $des))
{
    throw new Exception('Something went wrong');
}
chmod($filePath, 0777);
redirectToHome();
