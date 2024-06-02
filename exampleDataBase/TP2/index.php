<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tab</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
    <nav class= "navbar navbar-light justify-content-center fs-3 mb-5" style = "background-color:#00ff5573" >
        Table creation
    </nav>
    <form action ="" method = "POST" style = "width:50vw; min-width:300px ;">
    <div class="row mb-3">
        <div class = "col">
            <label class ="form-label">rows number: </label>
            <input type = "number"  class = "form-control"  name = ' lines'>
        </div>        
        <div class = "col">        
            <label class ="form-label"> cols number: </label>
            <input type = "number"  class = "form-control"  name = ' col'>
            
        </div> 
        <div class = "col">        
           <input type="submit"  class="btn btn-info" name="submit" style="position:relative; top:30px;">   
        </div> 


      
             
      
                

    </div>
    <?php
      
      echo "<table class=table table-hover table-bordered w-75 ms-5>";

        for ($i= 1; $i<(int)$_POST['lines'] ; $i++){
            echo "<tr>";
        
        for ($j= 1; $j<(int)$_POST['col'] ; $j++)
            echo "<td>" . $i*$j. "</td>";
            echo "</tr>";
        }
      echo"</table>"  


    ?>

              
                
    

           
           
          

    </form>
</body>
</html>