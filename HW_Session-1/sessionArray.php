<?php session_start()
?>
<form method="get">
    <input type="text" name="name" placeholder="name">
    <input type="text" name="lastname" placeholder="lastname">
    <input type="text" name="salary" placeholder="salary">
    <input type="submit">
    <br>
    <a href="sessionArray2.php">Переход</a>
</form>
<?php
    echo '<br>На одной странице с помощью формы спросите у пользователя имя, возраст, зарплату и еще что-нибудь. Запишите эти данные в одну переменную сессии в виде массива. При заходе на другую страницу переберите сохраненные данные циклом и выведите каждый элемент массива в своем теге li тега ul.<br>';
    if(!empty($_GET)) {
        $_SESSION['nums'] = $_GET;
    }

