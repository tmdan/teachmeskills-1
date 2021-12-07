<?php
session_start();
?>
<form method="get">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="lastname" placeholder="lastname">
    <input type="text" name="age" placeholder="age">
    <input type="submit">
    <br><a href="test2.php">Переход на тест 2(для удобства)</a>
</form>
<?php
    echo '<br>На одной странице с помощью формы спросите у пользователя фамилию, имя и возраст. Запишите эти данные в сессию. При заходе на другую страницу выведите эти данные на экран.<br>';
    if(!empty($_GET)) {
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['lastname'] = $_GET['lastname'];
        $_SESSION['age'] = $_GET['age'];
    }

