<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Peliculas</title>
</head>

<body>
    <div class="container">
        <h2 class="titulo">Agregar películas</h2>
        <form action="peliculas.php" method="POST">
          <!-- Campo título -->
         <div class="form-group">
         <label for="titulo">Titulo</label>
         <input type="text" class="form-
control" placeholder="Escribe el título" id="titulo" name="titulo" required>
         </div>

         <!-- Campo año -->
         <div class="form-group">
         <label for="agno">Año de aparición</label>
         <select class="form-control" id="agno" name="agno" required>
            <?php
               for($i=1930;$i<2020;$i++){
                   echo "<option>$i</option>";
               }
         ?>
     </select>
  </div>

  <!-- Campo género -->
  <div class="form-group">
  <label for="genero">Género</label>
  <select class="form-control" id="genero" name="genero" required>
  <option>Acción</option>
  <option>Comedia</option>
  <option>Drama</option>
  <option>Infantil</option>
  <option>Terror</option>
  <option>Documental</option>
  <option>Anime</option>
  <option>Si-Fi</option>
</select>
</div>

<!-- Campo clasificación -->
<div class="form-group">
   <label for="clasificacion">Clasificación</label>
   <select class="form-
control" id="clasificacion" name="clasificacion" required>
                     <option>A</option>
                     <option>AA</option>
                     <option>B</option>
                     <option>B15</option>
                     <option>R</option><<
                </select>
            </div>

           <!-- botón -->
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>
 </di<v>

 <!-- Las librerías de javascript deben ir aquí, justo antes de cerrar el body -->
 <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></sc
ript>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min
.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"><
/script>
</body>

</html>
