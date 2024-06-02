<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5" 
    style = "background-color:#00ff5573">
        Affichage des donnees
    </nav>
    <table class="table table-hover table-bordered w-75 ms-5">
        <tr>
            <td>First name:</td> <td><?php echo $_POST['firstname'] ?></td>
        </tr>
        <tr>
            <td>Last name:</td> <td><?php echo $_POST['lastname']?></td>
        </tr>
        <tr>
            <td>Email:</td> <td><?php echo $_POST['email']?></td>
        </tr>
        <tr>
            <td>sex :</td> <td><?php echo $_POST['gender']?></td>
        </tr>

        

    </table>
</body>
</html>