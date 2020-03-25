<?php
namespace application\views\account;
use PDO;

function querySelecttUser($name,$pass){
    $config = require '../application/config/db.php';
    $dbshka = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
    $query = $dbshka->prepare("select name,password from user where name='$name'");
    $query->execute();
    $userName = $query->fetch(PDO::FETCH_ASSOC)['name'];
    $userPass = $query->fetch(PDO::FETCH_ASSOC)['password'];

    if($userName==$name && $userPass==$pass){
        echo 'norm';
    }else{
        echo 'ne norm';
    }
}

$nameAut = htmlspecialchars($_POST['name']);
$passAut = htmlspecialchars($_POST['pass']);


querySelecttUser($nameAut,$passAut);
