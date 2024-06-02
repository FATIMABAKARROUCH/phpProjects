
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
        $pdo = new PDO ('mysql:host=localhost;dbname=location', 'root', 'Yuna123@456');
        $statement= $pdo->prepare('SELECT * FROM client');
        $statement -> execute();
        $results = $statement->fetchALL(PDO::FETCH_ASSOC);
        //var_dump ($results)
        

        
        
    ?> 
      </pre>
      <a  href='ajouter.php'>ajouter</a><br>
      <table width ="100%" border ="1">
        <thead>
            <tr>
                <th>id_client</th>
                <th>CIN</th>
                <th>nom</th>
                <th>prenom</th>
                <th>email</th>
                <th>password</th>
            </tr> 
            <?php
                foreach($results as $result){?>
                    <tr>
                        <td><?php echo $result ['id_client']?></td>
                        <td><?php echo $result ['cin']?></td>
                        <td><?php echo $result ['prenom']?></td>
                        <td><?php echo $result ['nom']?></td>
                        <td><?php echo $result ['login']?></td>
                        <td><?php echo $result ['mdps']?></td>
                        <td><a   id ="delLink" onclick = "return confirm('are u sure u wanna delete it')" href='supprimer.php?id=<?php echo $result['id_client']?>'>delete</a></td>
                        
                    </tr>
                    <?php
                }  
            ?>    
        </thead>

      </table>
      
        
</body>
</html>
