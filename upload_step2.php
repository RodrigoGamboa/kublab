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
      
         <!-- SideNav -->
  
<?php include 'sidenav.php';?>
    
<body>
      <!-- Se cierra SideNav -->
        
        
    </div>
    
<!-- Segunda columna -->
<div class="col-6">
     <div class="card">
              <div class="card-body">
                <h2 style="text-align: center;">Detalles de la lección</h2>
                  <p style="text-align: center;">* Puedes seleccionar más de una opción</p>
                <form class="formu">
                <h3>Nivel Escolar</h3>
                    
                    
               <div class="nivelescolar">
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Primaria </label>
                    <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Secundaria </label>
                    <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" class="checkbox" type="radio" name="optradio"> Preparatoria </label>
                </div>
                    
                    <h3>Herramientas</h3>
                    
                 <div style= "padding-left: 25%; padding-right: 25%;">
                     <div class="radio">
                      <label><input style="margin: 5px;" type="radio" name="optradio" >Estación de soldadura</label>
                    </div>
                    <div class="radio">
                      <label><input style="margin: 5px;" type="radio" name="optradio">Kits de robótica educativa</label>
                    </div>
                    <div class="radio">
                      <label><input style="margin: 5px;" type="radio" name="optradio" >Tarjetas electrónicas</label>
                    </div>
                     <div class="radio">
                      <label><input style="margin: 5px;" type="radio" name="optradio" >Sensores</label>
                    </div>
                    <div class="radio">
                      <label><input style="margin: 5px;" type="radio" name="optradio">Componentes de electrónica</label>
                    </div>
                    <div class="radio disabled">
                      <label><input style="margin: 5px;" type="radio" name="optradio" >Cortadora de vinil</label>
                    </div>
                </div>
                 <br>
              <h3>Disciplinas</h3>
                    
                    
               <div class="disciplinas">
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Artes </label>
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Ingeniería </label>
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" class="checkbox" type="radio" name="optradio"> Tecnología </label>
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Ciencia </label>
                   <label style="padding: 0px 15px 10px 17px;" class="radio-inline"><input style="margin: 5px;" type="radio" name="optradio"> Matemáticas </label>
                   <label style="padding: 0px 35px 10px 35px;" class="radio-inline"><input style="margin: 5px;" class="checkbox" type="radio" name="optradio"> Sociales </label>
                </div>
                    
            </form>
                  
                
                

              </div>
            </div>
    
    <button type="submit" class="btn btn-project" style="background-color: darkgray"><a>Guardar borrador</a></button> <a href="upload_step3.php" class="btn btn-project">Siguiente paso</a>
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