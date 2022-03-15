<!DOCTYPE html>
<html>
<head>
  <title>PDO HW</title>
  <meta charset="utf-8"/>
</head>
<body>
<?php
include_once 'fetchClass.php';
if (isset($_POST["LastName"]) && isset($_POST["FirstName"])) {
  try {
    $db = new PDO('mysql:host=localhost; dbname=PDO_HW', "root", "rootroot");
    // Создаем таблицу

    // $createSql = "CREATE TABLE Users (
    // Id int NOT NULL AUTO_INCREMENT,
    // LastName varchar(255) NOT NULL,
    // FirstName varchar(255),
    // Age int,
    // Phone bigint,
    // PRIMARY KEY (Id)
    // );";
    // $db->query($createSql);
    // Заносим данные

    $sqlInset = "INSERT INTO Users (LastName, FirstName, Age, Phone) VALUES (:LastName, :FirstName, :Age, :Phone)";
    $stmt = $db->prepare($sqlInset);
    $usersValue = [":LastName" => $_POST['LastName'], ":FirstName" => $_POST['FirstName'], ":Age" => $_POST['Age'], ":Phone" => $_POST['Phone']];
    $rowsNumber = $stmt->execute($usersValue);
    if ($rowsNumber > 0) {
      echo 'done';
    };
  } catch (PDOException $e) {
    echo 'DB error ' . $e->getMessage();
  };

// Получаем данные разными способами

  $sql = "SELECT * FROM Users";
  $result = $db->query($sql);
// FETCH_ASSOC
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo '<p>' . $row['FirstName'] . ' ' . $row['LastName'];
  }
// FETCH_NUM
  while ($row = $result->fetch(PDO::FETCH_NUM)) {
    echo '<p>' . $row['1'];
  }
// FETCH_OBJ
  while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo $row->FirstName;
  }
// FETCH_CLASS
  $result->setFetchMode(PDO::FETCH_CLASS, 'fetchClass');
  while ($row = $result->fetch()) {
    echo '<p>' . $row->getFirstName() . ' ' . $row->getLastName();
  }
}
?>
<h3>Create a new User</h3>
<form method="post">
  <p>User LastName:
    <input type="text" name="LastName"/></p>
  <p>User FirstName:
    <input type="text" name="FirstName"/></p>
  <p>Age</p>
  <input type="number" name="Age"/></p>
  <p>Phone</p>
  <input type="number" name="Phone"/></p>
  <input type="submit" value="Enter">
</form>
</body>
</html>
