<?php
namespace application\views\account;
use PDO;
//function queryInsertUser($name,$pass,$bird,$photo){
//    $config = require '../application/config/db.php';
//    $dbshka = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
//    $query = $dbshka->prepare("insert into mvs.user(`name`, `password`, `birth_date`, `photo`) VALUES (?,?,?,?)");
//    $query->bindParam(1, $name);
//    $query->bindParam(2, $pass);
//    $query->bindParam(3, $bird);
//    $query->bindParam(4, $photo);
//    $query->execute();
//}

function queryInsertUser($name,$pass,$bird,$photo){
    $config = require '../application/config/db.php';
    $dbshka = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
    $query = $dbshka->prepare("insert into mvs.user(`name`, password, birth_date, photo) VALUES ('$name','$pass','$bird','$photo')");
    $query->execute();
}

//if (file_exists($_FILES['photo']['tmp_name'])){
//    move_uploaded_file($_FILES['photo']['tmp_name'],'public/photo/'.$_FILES['photo']['name']);
//}

$nameReg = htmlspecialchars($_POST['name']);
$passReg = htmlspecialchars($_POST['pass']);
$birdReg = htmlspecialchars($_POST['bird']);
$photoReg = 'public/photo/'.$_FILES['photo']['name'];

echo $nameReg;
echo $passReg;
echo $birdReg;
echo $photoReg;

$result = queryInsertUser($nameReg,$passReg,$birdReg,$photoReg);

if($result){
    echo 'norm';
}else{
    echo 'ne norm';
}