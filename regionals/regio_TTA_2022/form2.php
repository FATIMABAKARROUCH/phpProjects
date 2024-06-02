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
                <div class="col">
                    <label class ="form-label">date naissance: </label>
                    <input type ="date" class = "form-control" name = "DateNai"
                            >
                </div>
                
                    
                </div>
                <div class="col">
                  <label class ="form-label">password : </label>
                  <input type="password"  class="form-control" name = "password">
                </div> 
                <div class="col">
                    <label class ="form-label" name ="filiere">Filiere : </label>
                    <select class=" form-select">
                        <option>DD<option>
                        <option>ID<option>
                        <option>DESIGN<option>
                    </select>

                </div> 
                   

             </div><br>
             <div>
                    <button type="submit" class="btn btn-success" name="submit" style ="position:relative; left:200px;width:100px">Save</button>
                    <a href ="index.php" class="btn btn-danger" style ="position:relative; left:200px;width:100px">Cancel</a>

             </div>
               
        

           </form>
        </div>


    
</body>
</html>