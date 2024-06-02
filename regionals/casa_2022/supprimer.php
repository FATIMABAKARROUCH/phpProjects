<?php

 $id = $_GET['id'];

    $pdo = new PDO ('mysql:host=localhost;dbname=location', 'root', 'Yuna123@456');
    $statement= $pdo->prepare('DELETE FROM client WHERE id_client = ?');
    $statement -> execute([$id]);
  
    //var_dump ($results)
    
header('location:listerC.php')
 
 
?> 

