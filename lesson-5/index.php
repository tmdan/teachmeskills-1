<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- <form action="result.php" method="POST">
    <p>Имя <input name="firstname"></p>
    <p>ЗП  <input name="salary"></p>
    <p><input type="submit"></p>
</form> -->

<?php
    if (empty($_GET)){
?>
        <form action="" method="GET">

            <p>Введите ваше имя</p>
            <p>Имя <input name="firstname2"></p>
            <p><input type="submit"></p>

        </form>
<?php
    }
    else {
      echo "<p>Привет, " . $_GET['firstname2'] . "</p>";
    }
?>

</body>
</html>
