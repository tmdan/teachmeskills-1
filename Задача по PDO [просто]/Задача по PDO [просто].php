<?php
function createBd($nameBd): void
{
  try {
    $conn = new PDO("mysql:host=localhost", "root");
    $sql = "CREATE DATABASE $nameBd";
    $conn->exec($sql);
    echo "Database has been created";
  } catch (PDOException $e) {
    echo "Database error: " . $e->getMessage() . '</br>';
  }
}

function addTable($nameBd, $name_table): void
{
  try {
    $conn = new PDO("mysql:host=localhost;dbname=$nameBd", "root");
    $sql = "create table $name_table (id int unsigned auto_increment primary key,firstname varchar(30), 
            lastname varchar(30),age int unsigned, phone int unsigned, country varchar(30), city varchar(30));";
    $conn->exec($sql);
    echo "Table Users has been created";
  } catch (PDOException $e) {
    echo "Database have table: " . $e->getMessage() . '</br>';
  }

}

function addUser($nameBd, $name_table)
{
  $arrays = ['firstname', 'lastname', 'age', 'phone', 'country', 'city'];
  if (isset($_POST["firstname"]) && isset($_POST["lastname"]) && isset($_POST["age"])
    && isset($_POST["phone"]) && isset($_POST["country"]) && isset($_POST["city"])) {
    try {
      $conn = new PDO("mysql:host=localhost;dbname=$nameBd", "root");
      $sql = "INSERT INTO $name_table (firstname,lastname,age,phone,country,city) 
                VALUES (:firstname,:lastname,:age,:phone,:country,:city)";
      $stmt = $conn->prepare($sql);
      foreach ($arrays as $arr) {
        $stmt->bindParam(":$arr", $_POST["$arr"]);
      }
      $affectedRowsNumber = $stmt->execute();
      if ($affectedRowsNumber > 0) {
        echo "Data successfully added;";
      }
    } catch (PDOException $e) {
      echo "Database error" . $e->getMessage();
    }
  }
}

function registration():string
{
  return '<div class="registration">
              <div class="title">Registration</div>
              <form action="#" method="post" class="form_registration">
                <div class="block_registration">
                  <label for="firstname"></label>
                  <input type="text" name="firstname" value="Firstname" class="firstname">
                 
                  <label for="lastname"></label>
                  <input type="text" name="lastname" value="Lastname" class="lastname">
                  
                  <label for="age"></label>
                  <input type="text" name="age" value="Age" class="age">
                  
                  <label for="phone"></label>
                  <input type="tel" name="phone" value="Phone" class="phone">    
                  
                  <label for="country"></label>
                  <input type="text" name="country" value="Country" class="country">
                  
                  <label for="city"></label>
                  <input type="text" name="city" value="City" class="city">
                  
                  <input type="submit" value="Add in BD" class="sign_in">
              
            </div> 
    ';
}

function output($nameBd, $name_table):string
{
  $conn = new PDO("mysql:host=localhost;dbname=$nameBd", "root");
  $sql = "SELECT * FROM $name_table";
  $results = $conn->query($sql);
  $res = '';
  while ($result = $results->fetch()) {
    $res .= '' . $result['firstname'] . ',' . $result['lastname'] . ',' . $result['age'] . ',
    ' . $result['phone'] . ',' . $result['country'] . ',' . $result['city'] . '</br>';
  }
  return $res;
}

echo registration();
createBd('users');
addTable('users', 'user');
addUser('users', 'user');
echo output('users', 'user');