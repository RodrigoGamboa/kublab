   <!-- SideNav -->

<div class="sidenav">

  <button type="button" class="btn-popup" data-toggle="modal" data-target="#myModal" style="background-color: transparent; border: none;">
      <a style="padding: 6px 8px 6px 8px;"><img class="icon-sidenav" src="images/iniciarsesion.png">  Mi Perfil</a></button>
                                                     
                                                     
  <a href="comunity.php">
      <img class="icon-sidenav" src="images/comunidad.png">  Comunidad</a>
    
<hr>    
  <button class="dropdown-btn">
      <p><img class="icon-sidenav" src="images/nivelescolar.png"> Nivel Escolar</p><i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a class="dropdown-item" href="#primaria">Primaria</a>
    <a class="dropdown-item" href="#secundaria">Secundaria</a>
    <a class="dropdown-item" href="#preparatoria">Preparatoria</a>
  </div>
    
 <button class="dropdown-btn">
      <p><img class="icon-sidenav" src="images/herramientas.png"> Herramientas</p><i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a class="dropdown-item" href="#kitdestorytelling">Kit de Storytelling</a>
    <a class="dropdown-item" href="#soldadura">Soldadura</a>
    <a class="dropdown-item" href="#robotica">Robótica</a>
        <a class="dropdown-item" href="#electronica">Electrónica</a>
        <a class="dropdown-item" href="#sensores">Sensores</a>
        <a class="dropdown-item" href="#cortadoradevinil">Cortadora de Vinil</a>
  </div>
    
<button class="dropdown-btn">
      <p><img class="icon-sidenav" src="images/modeloeducativo.png"> Disciplinas</p><i class="fa fa-caret-down"></i></button>
    <div class="dropdown-container">
    <a class="dropdown-item" href="#artes">Artes</a>
    <a class="dropdown-item" href="#ingenieria">Ingeniería</a>
    <a class="dropdown-item" href="#tecnologia">Tecnología</a>
        <a class="dropdown-item" href="#ciencias">Ciencia</a>
        <a class="dropdown-item" href="#matematicas">Matemáticas</a>
        <a class="dropdown-item" href="#sociales">Sociales</a>
    </div>
    <br>
    <button class="btn btn-primary"><a href="upload_step1.php" style="color: aliceblue">Subir Proyecto</a></button>
 </div>
    
      <!-- Se cierra SideNav -->


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: Transparent; border:none; width: 100%;">
        <div class="card">
      <div class="modal-body">
       <a style="background-color: transparent; border: none; width: 100%;" href="editprofile.php"><img style="width: 20%;" src="images/edit_profile.png"></a>
        <div class="panel panel-default">
          <div class="panel-heading">Tu Nombre</div>
          <div class="panel-body"><h2>Juan Pérez</h2></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">¿A qué escuela perteneces?</div>
          <div class="panel-body"><h2>Escuela Benito Juárez</h2></div>
        </div>
          <div class="panel panel-default">
          <div class="panel-heading">¿A qué municipio perteneces?</div>
          <div class="panel-body"><h2>Tizimín, Yucatán</h2></div>
          </div>
        <div class="panel panel-default">
          <div class="panel-heading">Escribe una breve biografía</div>
          <div class="panel-body"><h2>¡Hola! Soy maestro apasionado de la programación, ciencia, historia y tecnología. Doy talleres de historia y tengo 2 premios CHEVRON.</h2></div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">Tu correo electrónico:</div>
          <div class="panel-body"><h2>juanperez@mail.com</h2></div>
        </div>
          
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
      </div>
  </div>
</div>
  