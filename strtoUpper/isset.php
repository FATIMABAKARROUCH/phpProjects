<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>choisir 3 language maximum</h3>
    <form method = "post">
        <label>PHP</label>
        <input type="checkbox" name="l[]" value = "php"><br>
        <label>PYTHON</label>
        <input type="checkbox"  name="l[]" value = "py"><br>
        <label>JS</label>
        <input type="checkbox"  name="l[]" value = "js"><br>
        <label>C#</label>
        <input type="checkbox"  name="l[]" value = "c#"><br>
        <label>C++</label>
        <input type="checkbox"  name="l[]" value = "c++"><br>
        <input type = "submit"  name="tester" value = "tester">
    </form>    
     <?php
     function selectionner($t){
        echo "<ul>";
        foreach($t as $l){
            echo "<li>".$l. "</li>";
        }
        echo "</ul>";
     }
     function verifier($t){
        if(count($t)>0 and count($t) <=3){
            selectionner($t);
        }
        else
        echo "Vous devez choisir 3 language au maximum!!";
     }
     if(isset($_POST["tester"])){
        if(isset($_POST['l'])){
         verifier($_POST['l']);
         echo "le nombre de languages choisis : " .count($_POST['l']) ;
        }
    
     }
     else 
     echo  "vous ne connaissez aucun langage parmi la liste !!"
     
     ?>

</body>
</html>