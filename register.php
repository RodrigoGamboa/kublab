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
 

    
<div class="container-fluid">

<!-- Primera columna -->

<div class="row">
    <div class="col">  
    
      <!-- Se cierra SideNav -->
        
        
    </div>
    
<!-- Segunda columna -->
<div class="col-6">
     <div class="card">
              <div class="card-body">
                <h2 style="text-align: center;">Únete a la comunidad</h2>
                  <br>
                  <button href="#" style="width: 100%; height: 50px;" class="btn btn-primary">Ingresar con Facebook</button> 
                 <br> <br> <hr><br>
                  
                  <h2 style="text-align: center;">Ó:</h2>
                  <p style="text-align: center;">Completa el formulario con tus datos y forma parte de la comunidad Kublab.</p>
                <form class="formu">
              <div class="form-group">
                <p>Tu nombre:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Nombre">
              </div>
                    
              <div class="form-group">
                <p>Tus apellidos:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Apellidos">
              </div>
                    
                    
            <div class="form-group">
                <p>Tu correo electrónico:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Correo electrónico">
                 <label><input style="margin: 10px;" type="radio" name="optradio" >Permito mostrar mi correo para futuros contactos.</label>
              </div>
                    
            <div class="form-group">
                <p>Contraseña:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Contraseña">
              </div>
                    
                      
            <div class="form-group">
                <p>Escuela a la que perteneces:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Escuela a la que perteneces.">
              </div>
                    
            <div class="form-group">
                <p>Municipio al que perteneces:</p><input type="nombre" class="form-project" id="NombreLeccion" aria-describedby="name" placeholder="Municipio al que perteneces:">
              </div>
                    
            <div class="form-group">
                <p>¡Cuéntanos sobre ti!</p><input type="nombre" class="form-project" id="cuentanos" style="height: 100px;" aria-describedby="name" placeholder="Cuéntanos sobre tí en 120 carácteres.">
              </div>
            
                     <a href="index.php" class="btn btn-project">Registrarse</a>
                </div>      
            </form>
        </div>
    
    <div class="card"> 
    <p style="text-align: center;">¿Ya tienes una cuenta?</p><a href="login.php" style="color: #0f4c81; font-weight: 600; font-size: 14pt; text-align: center; display: block;">Ingresa aquí.</a> </div>

    </div>

    
   
    
    
    
<!-- Tercera columna -->

    <div class="col">
      
          

      
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