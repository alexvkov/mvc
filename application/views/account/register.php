<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title?></title>
</head>
<body>

<h3><?php echo $title?></h3>
<form action="../../../public/form.php" method="post" enctype="multipart/form-data" id="register_form">
    <p>Логин</p>
    <input type="text" name="name" class="regName">
    <p>Пароль</p>
    <input type="text" name="pass" class="regPass">
    <p>Дата рождения</p>
    <input type="date" name="bird" class="regBird"  value="2000-01-01">
    <p>Фото</p>
    <input type="file" name="photo" class="regPhoto">
    <br><br>
    <button type="submit" name="enter" class="regBtn">Регистрация</button>
</form>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="/public/form.js"></script>
</body>
</html>
