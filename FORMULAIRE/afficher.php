<?php
session_start();
$_SESSION['user'] ='ADMIN USER';
echo $_SESSION['user']."<br>";
setcookie('groupe' , 'dd105', time()+60,'/');
setcookie('nom' , 'phati', time()+60,'/');
echo "you belong to  :". $_COOKIE['groupe'];
require "database.php";
$statement = $pdo ->prepare ("USE formulaire ");
$statement1 = $pdo ->prepare ("SELECT *FROM student");
$statement ->execute();
$statement1 ->execute();
$results = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach  ($results as $item):?>
<div>
    <p>ID :<?php echo $item["id"] ?></p>
    <p>nom :<?php echo $item["nom"] ?></p>
    <p>prenom :<?php echo $item["prenom"] ?></p>
    <form>
        
    </form>
</div>
<?php endforeach?>

