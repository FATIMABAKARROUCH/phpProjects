<?php
require 'database.php';
    $statement = $pdo->prepare("SELECT * FROM clients");
    $statement->execute();
    $clients = $statement ->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach($client as $clients) :?>
    <tr>
    <td><?php echo $clients('cin');?></td>
    <td><?php echo $clients('nom');?></td>
    <td><?php echo $clients('prenom');?></td>
    <td><?php echo $clients('email');?></td>
    <td>
        <form action ="" method="POST" id="form-supprimer" onsubmit="confirmSuppression(event)">
             <input type="hidden" name="id" value=">">
             <input type="hidden" name="_method" value=">">
             <input type="submit"value="Supprimer">
        </form>

    </td>
    </tr>
<?php endforeach ?>

