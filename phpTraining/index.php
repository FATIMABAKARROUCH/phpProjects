

<?php
    echo ' i like pizza <br>';
    echo "it's really good";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action ="index.php" method = "POST"><br>
        <label>Username :</label><br>
        <input type = "text" name = "username"><br>
        <label>password :</label><br>
        <input type = "password" name = "password"><br>
        <input type = "submit" value = logIn>
</body>
</html>

        <?php
        //get-->inscure method+data is appended to the URL
        //post-->secure method+data is packaged inside the body of the http requests
        
        echo $_POST["username"]. "<br>";
        echo $_POST["password"];
        ?>