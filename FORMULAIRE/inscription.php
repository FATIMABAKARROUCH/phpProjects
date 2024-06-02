
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action ="index.php" method = "POST" id = "myForm">
        <label for = "id">id:</label><br>
        <input type = "text" name = "id" id = "id" ><br>

        <label for = "nom">Nom:</label><br>
        <input type = "text" name = "nom" id = "nom" ><br>
        
        <label for = "prenom" >Prenom:</label><br>
        <input type = "text"  name = "prenom" id="prenom" ><br><br>
        

        <button name = 'submit' type='submit' id="sub" ><a href="afficher.php">Submit
           
        </a></button>
        
    </form>    
</body>
</html>
