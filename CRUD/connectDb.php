<?php 
$servername = "localhost";
$username = "root";
$password = "Yuna123@456";
$dbname = "tutorial";



$conn = mysqli_connect($servername , $username, $password,$dbname);

if (!$conn){
    die ("connection failed". mysqli_connect_error());

}
    // echo 'connected succesfully';


