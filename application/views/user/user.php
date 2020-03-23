<h3><?php echo $title?></h3>

<?php
foreach ($user as $value){


            echo '<p> Имя = '.$value['name'].'</p>';
            echo '<p> Пароль = '.$value['password'].'</p>';
            echo '<p> Дата рождения = '.$value['birth_date'].'</p>';
            echo '<img src='.$value['photo'].' style="width:100px;height:auto;display:block;">';
            echo '<hr>';
        }

?>
