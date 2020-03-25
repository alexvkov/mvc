<?php
namespace application\views\account;
use PDO;

function queryInsertUser($name,$pass,$bird,$photo){
    $config = require '../application/config/db.php';
    $dbshka = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
    $query = $dbshka->prepare("insert into user(`name`, password, birth_date, photo) VALUES ('$name','$pass','$bird','$photo')");
    $query->execute();
}

if (file_exists($_FILES['photo']['tmp_name'])){
    move_uploaded_file($_FILES['photo']['tmp_name'],__DIR__.'/photo/'.$_FILES['photo']['name']);
}

$nameReg = htmlspecialchars($_POST['name']);
$passReg = htmlspecialchars($_POST['pass']);
$birdReg = htmlspecialchars($_POST['bird']);
$photoReg = 'public/photo/'.$_FILES['photo']['name'];

$result = queryInsertUser($nameReg,$passReg,$birdReg,$photoReg);

if($result){
    echo 'ne norm';
}else{
    echo 'norm';
}