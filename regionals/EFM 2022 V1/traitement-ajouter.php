<?php
require 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_POST['cin']) || empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['password'])) {
        echo '<script>alert("Veuillez remplir tous les champs.")</script>';
    }else{
        $cin = $_POST['cin'];
        $nom = $_POST['nom'];
        $prenom = $_POST["prenom"];
        $email = $_POST["email"];
        $password = $_POST["password"];
    
        $statement = $pdo -> prepare("INSERT INTO clients (cin,nom,prenom,email,password) VALUES
        (:cin, :nom, :prenom, :email ,:password)");
        $statement -> execute([
            ':cin' => $cin,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $password
    
        ]);
        header("Location:listerC.php");
        exit;
    }
}