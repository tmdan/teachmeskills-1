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
    if(!empty($_GET)) {
        $_SESSION['name'] = $_GET['name'];
        $_SESSION['lastname'] = $_GET['lastname'];
        $_SESSION['age'] = $_GET['age'];
    }

