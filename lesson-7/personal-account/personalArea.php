<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital@1&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
$data_users = array_merge($_COOKIE, $_SESSION);
?>
    <main>
        <div class="wrapper">
            <h1 class="header">Личный кабинет</h1>
            <div class="personal-area-wrapper">
                <div>
                    <img src='<?php echo $data_users['uploadfile'];?>' alt = 'foto' width='200px' height='auto'>
                </div>

                <div>
                    <div class="name-wrapper">
                        <div>
                            <p class="personal-area-data-subtitle">Имя</p>
                            <p class='user-date'>  <?php
                                if (isset($data_users['first_name'])){
                                    echo $data_users['first_name'];}?></p>
                        </div>
                        <div>
                            <p class="personal-area-data-subtitle">Фамилия</p>
                            <p class='user-date'>  <?php
                                if (isset($data_users['last_name'])){
                                    echo $data_users['last_name'];} ?></p>
                        </div>
                    </div>

                    <p class="personal-area-data-subtitle">Логин</p>
                    <p class='user-date'> <?php
                        if (isset($data_users['login'])){
                            echo $data_users['login'];}?></p>
                    <p class="personal-area-data-subtitle">Пароль</p>
                    <p class='user-date'> <?php
                        if (isset($data_users['password'])){
                            echo $data_users['password'];}?></p>
                    <p class="personal-area-data-subtitle">email</p>
                    <p class='user-date'> <?php
                        if (isset($data_users['email'])){
                            echo $data_users['email'];}?></p>

                    <form method="post">
                        <input class="button-log-off" type="submit" name="log_off" value="Выйти">
                    </form>

                </div>
            </div>
        </div>
    </main>
</body>
</html>

<?php
if (array_key_exists('log_off', $_POST) || empty($_SESSION['login'] && $_SESSION['password']) ){

    unlink($_SESSION['uploadfile']);
    session_destroy();
    header("Location: login.php");

}