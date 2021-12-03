<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Ввод данных</title>
</head>
<body>
    <form method="post">
        <p style="font-size:24px"><b>Введите Ваши данные</b></p>
            <?php
            if (isset($_POST["first_name"]) && empty($_POST["first_name"])):?>
            <p class="err">Пожалуйста, заполните Имя<p>
            <?php endif?>
        <input type="input" name="first_name" placeholder="Укажите Имя"><br>
            <?php
                if (isset($_POST["last_name"]) && empty($_POST["last_name"])):?>
                <p class="err">Пожалуйста, заполните Фамилию<p>
                <?php endif?>
        <input type="text" name="last_name" placeholder="Укажите Фамилию"><br>
            <?php
            if (isset($_POST["email"]) && empty($_POST["email"])):?>
            <p class="err">Пожалуйста, заполните E-mail<p>
            <?php endif?>
        <input type="text" name="email" placeholder="Укажите e-mail"><br>
            <?php
            if (isset($_POST["password"]) && empty($_POST["password"])):?>
            <p class="err">Пожалуйста, заполните пароль<p>
            <?php endif?>
        <input type="password" name="password" placeholder="Укажите пароль"><br><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
