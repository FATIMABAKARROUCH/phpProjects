<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>form1</title>
</head>
<body>
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color:#00ff5573" >
        first form using database
    </nav>
    <div class="container d-flex-justify-content-center ">
           <form action="affichageDesDonnees.php" method="POST" style = "width:50vw; min-width:300px ;">
              <div class="row mb-3">
                <div class = "col">
                    <label class ="form-label">First Name</label>
                    <input type ="text" class = "form-control" name = "firstname"
                        placeholder="Fatema">
                    </div>        
                    <div class = "col">        
                    <label class ="form-label">Last Name</label>
                    <input type ="text" class = "form-control" name = "lastname"
                        placeholder="bakarrouch">
                    </div>    
                

              </div>
              <div class="mb-3">
                
                    <label class ="form-label">Email</label>
                    <input type ="email" class = "form-control" name = "email"
                        placeholder="yuna@example.com">
               </div>
               <div class= "form-group-mb-3">
                  <label>Gender : </label>
                  <input type="radio"  class="form-check-input" name = "gender"
                   id= "female" value="female">
                   <label for ="female">Female</label> 
                   <input type="radio"  class="form-check-input" name = "gender"
                   id= "male" value="male">
                   <label for ="male">Male</label> 

               </div><br>
               <div>
                 <button type="submit" class="btn btn-success" name="submit">Save</button>
                 <a href ="index.php" class="btn btn-danger">Cancel</a>

               </div>
               
        

           </form>
        </div>


    
</body>
</html>