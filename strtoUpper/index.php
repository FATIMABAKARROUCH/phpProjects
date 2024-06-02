<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label>Filiere: </label>
        <input type="text" name="f" value="<?php echo $_POST['f'];?>"/>
        <button type="submit">verifier</button>
    </form>
          
</body>
</html>