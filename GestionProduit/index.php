<?php
$host = 'localhost';
$port = '3307';
$dbName = 'productGestion';
$user = 'root';
$password = 'Yuna123@456';

$dsn = "mysql:host  ={$host}; port = {$port};{$dbName};charset=UTF-8";


try{   
       $pdo = new PDO($dsn , $user , $password);
       $pdo ->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRORMODE_EXCEPTION) ;
       $pdo ->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  

   
   
     echo 'connection succesfuly';

}catch (PDOException $e){
    echo 'unconnected'. $e ->getMessage();

}