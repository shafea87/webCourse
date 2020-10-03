<?php
$titel = $_POST['titel'];
$body = $_POST['content'];
$dsn = "mysql:host=localhost;dbmane=test_1";
$dbuser = "";
$dbname = "";

try{
  $pdo = new PDO($dsn,$dbuser,$dbname);
  echo "conection dan";

}catch(PDOException $e){
  echo "conection error";
  // echo $e;
}


echo $titel;
echo $body;