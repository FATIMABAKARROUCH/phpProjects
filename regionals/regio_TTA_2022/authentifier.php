<?php 
session_start();
require 'connexionBD.php';
$loginError ='';
if(isset($_SERVER['loginError'])){
  $loginError;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color:#00ff5573" >
       AUTHENTIFICATION
    </nav>

      <div class="container d-flex-justify-content-center ">
           <form action="connexion.php" method="POST">
              <div class="row mb-3">
                <div class = "col">
                    <label class ="form-label">Login: </label>
                    <input type ="text" class = "form-control" name = "login"
                        placeholder="login"  style="width:50%">
                </div>       
              <div class="mb-3">  
                <div class = "col">        
                    <label class ="form-label">Password: </label>
                    <input type ="password" class = "form-control" name = "password"
                        placeholder="password" style="width:50%">
                </div>  
              </div>    
                 <button type="submit" class="btn btn-info" name="submit"
                  style="width:50%">Submit</button>
                

               </div>
               
        

           </form>
</body>
</html>






