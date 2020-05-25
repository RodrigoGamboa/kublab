<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
    <link rel="stylesheet" href="fonts">
      
    <link href="style.css" rel="stylesheet">
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

    <title>Kublab</title>
  </head>
    
    
          
   
<!-- Header -->
 
<?php include 'header.php';?>
    
<body>
        
      
      
<body>
 

<div class="container-fluid">

<!-- Primera columna -->

<div class="row">
    <div class="col">
      
        <!-- SideNav -->
  
<?php include 'sidenav.php';?>
    
<body>
      <!-- Se cierra SideNav -->
        
        
    </div>
    
<!-- Segunda columna -->
<div class="col-6">
     <div class="card">
              <div class="card-body">
                <h2 style="text-align: center;">Instrucciones del proyecto</h2>
                 
                <form class="formu">
              <div class="form-group">
                <p style= "text-align: center">Materiales:</p><input type="materials" class="form-project" id="materials" aria-describedby="materials" placeholder="¿Qué se necesita para la lección? ¡Puedes hacer una lista si es necesario!">
              </div>
              
                <h2 style= "text-align: center">Procedimiento</h2>
                  
                    <!-- Paso 1 -->

                  <p style= "text-align: center">Paso 1: Título</p>
                  <input type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Escribe el título del procedimiento del paso 1.">
                  <br>
                  <br>
                  <p style= "text-align: center">Paso 1: Descripción</p>
                  <input style="height: 100px;"type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Explica brevemente en qué consiste el procedimiento del paso 1.">
                    <br>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:32%; margin-right: 32%;"><a>Subir una imagen</a></button>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:25%; margin-right: 25%;"><a>Subir un archivo PDF o DXF</a></button>
           
                       <br>
                
                     <!-- Paso 2 -->
                
                  <p style= "text-align: center">Paso 2: Título</p>
                  <input type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Escribe el título del procedimiento del paso 2.">
                  <br>
                  <br>
                  <p style= "text-align: center">Paso 2: Descripción</p>
                  <input style="height: 100px;"type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Explica brevemente en qué consiste el procedimiento del paso 2.">
                    <br>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:32%; margin-right: 32%;"><a>Subir una imagen</a></button>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:25%; margin-right: 25%;"><a>Subir un archivo PDF o DXF</a></button>
             
                    <br>
                    <br>
                    
                
                     <!-- Paso 3 -->
                
                  <p style= "text-align: center">Paso 3: Título</p>
                  <input type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Escribe el título del procedimiento del paso 3.">
                  <br>
                  <br>
                  <p style= "text-align: center">Paso 3: Descripción</p>
                  <input style="height: 100px;"type="step1" class="form-project" id="step1" aria-describedby="step1" placeholder="Explica brevemente en qué consiste el procedimiento del paso 3.">
                    <br>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:32%; margin-right: 32%;"><a>Subir una imagen</a></button>
                    <br>
                  <button class="btn btn-primary" style="display: block; margin-left:25%; margin-right: 25%;"><a>Subir un archivo PDF o DXF</a></button>
            
                    <br>
                    <button type="submit" href="upload_step1.html" class="btn btn-project"><a>Añadir Paso</a></button>
                      
              
            </form>
              </div>
            </div>
    <button type="submit" class="btn btn-project" style="background-color: darkgray"><a>Guardar borrador</a></button> 
                    <button type="submit" href="index.php" class="btn btn-project"><a>Publicar</a></button>
    
    </div>
    
    
    
<!-- Tercera columna -->

    <div class="col">
      
          

      <!-- SignIn -->
 <?php include 'signin.php';?>
        
                  <!-- Se cierra SignIn -->    
    </div>
   </div>
  </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
    <script>
    function myFunction() {
  var x = document.getElementById("myNavbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
}
    </script>

      <script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
   
</body>
    

    
      <!-- Footer -->

        <?php include 'footer.php';?>

                  <!-- Se cierra Footer -->  
    
</html>