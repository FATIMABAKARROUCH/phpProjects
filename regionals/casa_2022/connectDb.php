<!-- ?php
$host = 'localhost';
$port= 3307;
$dbName='location';
$user = 'root';
$password='Yuna123@456';

$dsn = "mysql:host ={$host}; port ={$port};{$dbName}; charset=UTF-8 ";

try {
    $pdo = new PDO ($dsn, $user,$password);
    echo 'connection succesfuly';
}catch(PDOException $e){
    echo 'unconnected' .$e ->getMessage();
}



?> -->