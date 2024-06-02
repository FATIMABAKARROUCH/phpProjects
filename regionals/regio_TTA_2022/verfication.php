<?php
session_start();
require 'connexionBD.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $login=$_POST["login"];
    $pwd=$_POST["password"];
}
// if($pwd == "" && $login ==""){
//     echo "you have to enter your informations!!! ";
// }elseif(!isset($_SESSION['nom'])){
//     header('location:login.php');
// }
if(empty($login) || empty($pwd)){
    echo "you have to enter your informations!!! ";
   
}else{     
          
           $statement=$pdo->prepare("SELECT *FROM compteAdministrateur WHERE login=:login AND password=:password");
        $statement->execute([
    ':login' => $login,
    ':password' =>$pwd,
]);


}
?>