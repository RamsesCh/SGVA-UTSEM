<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <!-- Booststrap 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <!--  /Booststrap -->

    <link rel="stylesheet" href="Preview-Imagenes-master/css/icons.css">
    <link rel="stylesheet" href="Preview-Imagenes-master/css/grid.css">
    <link rel="stylesheet" href="Preview-Imagenes-master/css/modal.css">
    <link rel="stylesheet" href="Preview-Imagenes-master/css/styles.css">
    <title>Vista previa de imágenes</title>
</head>
<?php require 'plantilla.php'; ?>
<body>


    <div class="modal">
      <div class="modal-main">
        <div class="row">
          <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
          <div class="c-6-lg c-6-md c-10-sm c-12-xs close-modal">
            <div class="modal-card" id="loading">
              <div class="preloader"></div>
              <span class="tag">Cargando...</span>
            </div>
            <div class="modal-card" id="Message">
              <span class="tag"></span>
            </div>
          </div>
          <div class="c-3-lg c-3-md c-1-sm close-modal"></div>
        </div>
      </div>
    </div>


    <header></header>


    <main>
        <div class="container">
            <section id="Images" class="images-cards">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-xs-12" id="add-photo-container">
                            <div class="add-new-photo first" id="add-photo">
                                <span><i class="icon-camera"></i></span>
                            </div>
                            <input type="file" multiple id="add-new-photo" name="images[]">

                            <?php
 $path = "files/".$id;
    if (file_exists ($path)) {
        $directorio = opendir ($path);                 
        while ($archivo = readdir ($directorio)){

            if (!is_dir ($archivo)){
                echo "<div data='".$path."/".$archivo.
                "'><a href='". $path."/". $archivo."
                title='Ver Archivo Adjunto'><span
                class='glyphicon
                glyphicon-picture'></span></a>";
                echo "$archivo <a href='#' class='delete'
                title='Ver Archivo Adjunto' ><span
                class='glyphicon glyphicon-trash'
                aria-hidden='true'></span></a></div>";
                echo "<img src='files/$id/$archivo'
                width='300' />";

                ?>
                        </div>
                    </div>
                </form> 
            </section>
        </div>
    </main>


    
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
     <!--  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>  Bootstrap y jQuery -->
    
    <!--  /Bootstrap y jQuery -->


    <script src="Preview-Imagenes-master/js/modal.js"></script>
    <script src="Preview-Imagenes-master/js/functions.js"></script>
    <script src="Preview-Imagenes-master/js/scripts.js"></script>
</body>
</html>