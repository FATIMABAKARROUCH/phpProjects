<?php
           
           require 'database.php';
           $statement1 = $pdo -> prepare('USE formulaire') ;
           $statement1 -> execute() ;

            $statement = $pdo ->prepare('INSERT INTO student(id,nom,prenom)VALUES(:id, :nom, :prenom)');

            //Exectuter la requete
            $statement -> execute([
              ':id'=> $_POST['id'],
              ':nom'=> $_POST['nom'],
              ':prenom'=> $_POST['prenom']
            ]);


          
?>
