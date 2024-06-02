<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css" />
    <title>PHP CRUD</title>
 </head>
 <body>
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color:#00ff5573" >
        PHP cpmplete CRUD application
    </nav>
    <div class="container">
         <a href = "add_new.php" class="btn btn-dark">Add New</a>
         <table class= "table table-hover text-center">
            <thead class ="table-dark">
             <tr>
                <th scope ="col">ID</th>
                <th scope ="col">First Name</th>
                <th scope ="col">Last Name</th>
                <th scope ="col">Email</th>
                <th scope ="col">Gender</th>
                <th scope ="col">Action</th>
             </tr>
            </thead> 
            <tbody>
                <tr>
                    <th scope = "row">1</th>
                    <td>Mark</td>
                    <td>otto</td>
                    <td>@mdo</td>
                    <td>otto</td>
                    <td>
                    <button type="submit" class="btn btn-dark" name="submit" href ="">Edit</button>
                    <button type="submit" class="btn btn-dark" name="submit" href ="">delete</button>
                    </td>
    </div>
 </body>
</html>
