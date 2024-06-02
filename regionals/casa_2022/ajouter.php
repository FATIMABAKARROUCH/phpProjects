<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <?php
       if (isset($_POST["save"])){
            $cin = $_POST['cin'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if (!empty($cin) && !empty( $nom) && !empty($prenom)&& !empty($email) && !empty($password)){
                //insertion
                $pdo = new PDO ('mysql:host=localhost;dbname=location', 'root', 'Yuna123@456');
                $statement= $pdo->prepare('INSERT INTO client(id_client,cin,nom,prenom,login,mdps) VALUES(NULL,:cin,:nom,:prenom,:email,:password)');
                $statement -> execute([
                    ":cin" => $cin,
                    ":nom" => $nom,
                    ":prenom" => $prenom,
                    ":email" => $email,
                    ":password" => $password,
                ]);

                header('location:listerC.php');

            }else{
                echo "tous les champs sont requis";
            }
       }
      
    
    ?>
    <form  method = "POST">
        

      <div class="container d-flex-justify-content-center ">
           
                <div class="row mb-3">
                <div class = "col">
                    <label class ="form-label">CIN: </label>
                    <input type ="text" class = "form-control" name = "cin"
                        placeholder="CIN"  style="width:50%">
                </div>       

              <div class="mb-3">  
                <div class = "col">        
                    <label class ="form-label">nom: </label>
                    <input type ="text" class = "form-control" name = "nom"
                        placeholder="nom" style="width:50%">
            
                </div>  
              </div>    
              <div class="mb-3">  
                <div class = "col">        
                    <label class ="form-label">prenom: </label>
                    <input type ="text" class = "form-control" name = "prenom"
                        placeholder="prenom" style="width:50%">
            
                </div>  
              </div>    
              <div class="mb-3">  
                <div class = "col">        
                    <label class ="form-label">email: </label>
                    <input type ="text" class = "form-control" name = "email"
                        placeholder="email" style="width:50%">
            
                </div>  
              </div>    
              <div class="mb-3">  
                <div class = "col">        
                    <label class ="form-label">password: </label>
                    <input type ="password" class = "form-control" name = "password"
                        placeholder="password" style="width:50%">
            
                </div>  
              </div>    
                 <button  type ='submit'class="btn btn-info" name="save"
                  style="width:50%" >Save</button>
                

               </div>
               
        

           </form>
</body>
</html>







</body>
</html>