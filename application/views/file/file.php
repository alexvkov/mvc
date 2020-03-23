<?php require_once 'application/lib/Dev.php'?>
<h3><?php echo $title;?></h3>

<?php
foreach ($file as $value){
    if(calculate_age($value['birth_date'])>=18){
        echo '<p> Файл  = '.$value['photo'].'- Совершеннолетний</p>';
        echo '<hr>';
    }else{
        echo '<p> Файл  = '.$value['photo'].'- Несовершеннолетний</p>';
        echo '<hr>';
    }

}

?>
