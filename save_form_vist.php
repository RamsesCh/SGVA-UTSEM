             <?php 

require 'conexion.php';

  if(isset($_POST['input'])){
    
          $tipoVisita = $_POST["tipoVisita"];
          $areaResponsable = $_POST["areaResponsable"];
          $objetivoVisita = $_POST["objetivoVisita"];
          $fechaVisita = $_POST["fechaVisita"]; 
          $docenteAcargo= $_POST["docenteAcargo"];
          $Materia = $_POST["Materia"];
          $lugar = $_POST["lugar"];
          $descripcionActividad = $_POST["descripcionActividad"];
          $carrera =$_POST["carrera"];
          $grupo =$_POST["grupo"];
          $cuatrimestre =$_POST["cuatrimestre"];
          $nombreChofer =$_POST["nombreChofer"];
          $sexoChofer =$_POST["sexoChofer"];
          $numTelefonoC =$_POST["numTelefonoC"];
          $alumnos =$_POST["alumnos"];
          $estatusVisita =$_POST["estatusVisita"];
  
          $fechaCreacion =$_POST["fechaCreacion"];
          $creadoPor=$_POST["creadoPor"];
          $fechaModificacion =$_POST["fechaModificacion"];
          $modificadoPor =$_POST["modificadoPor"];
          $comentarios=$_POST["comentarios"];

          $imagenes='';  


          if (isset($_FILES["licenciaChofer"]))
    {
        $licenciaChofer = $_FILES["licenciaChofer"];
        $nombre = $licenciaChofer["name"];
        $tipo = $licenciaChofer["type"];
        $ruta_provisional = $licenciaChofer["tmp_name"];
        $size = $licenciaChofer["size"];
        $carpeta = "imagenesVisitas/";
        
        // if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          if ($tipo != 'application/pdf')
        {
          echo "Error, el archivo no es una .pdf"; 
        }
        else if ($size > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src = $carpeta.$nombre;
           @move_uploaded_file($ruta_provisional, $src);

  if (isset($_FILES["seguroVehiculoC"]))
    {
        $seguroVehiculoC = $_FILES["seguroVehiculoC"];
        $nombre = $seguroVehiculoC["name"];
        $tipo = $seguroVehiculoC["type"];
        $ruta_provisional = $seguroVehiculoC["tmp_name"];
        $size = $seguroVehiculoC["size"];
        $carpeta = "imagenesVisitas/";
        
        // if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          if ($tipo != 'application/pdf')
        {
          echo "Error, el archivo no es una .pdf"; 
        }
        else if ($size > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src = $carpeta.$nombre;
           @move_uploaded_file($ruta_provisional, $src);


  if (isset($_FILES["tipoVehiculoC"]))
    {
        $tipoVehiculoC = $_FILES["tipoVehiculoC"];
        $nombre = $tipoVehiculoC["name"];
        $tipo = $tipoVehiculoC["type"];
        $ruta_provisional = $tipoVehiculoC["tmp_name"];
        $size = $tipoVehiculoC["size"];
        $carpeta = "imagenesVisitas/";
        
        // if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          if ($tipo != 'application/pdf')
        {
          echo "Error, el archivo no es una .pdf"; 
        }
        else if ($size > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src = $carpeta.$nombre;
           @move_uploaded_file($ruta_provisional, $src);                          
      

                            $insertar =$mysqli->query("INSERT INTO visitas VALUES('',
                                               '$tipoVisita',
                                               '$areaResponsable',
                                               '$objetivoVisita',
                                               '$fechaVisita', 
                                               '$docenteAcargo',
                                               '$Materia',
                                               '$lugar',
                                               '$descripcionActividad',
                                                '$carrera',
                                                '$grupo',
                                                '$cuatrimestre',
                                               '$nombreChofer',
                                               '$sexoChofer',
                                               '$numTelefonoC',
                                                '$licenciaChofer',
                                                '$seguroVehiculoC',
                                                '$tipoVehiculoC',
                                                '$alumnos',
                                                '$estatusVisita',
                                                '$imagenes1',
                                                '$fechaCreacion',
                                                '$creadoPor',
                                                '$fechaModificacion',
                                                '$modificadoPor',
                                                '$comentarios')");
   
                 if($insertar)
                 {
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente. </div>';
                            //header("location:formulario_visita_academica.php");


                            
                 }
                 else
                 {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';

                 }

                  }


?>

<!-- 
/*

//      if(isset($_FILES["imagenes"])) {

    

//       //$ruta = "imagenesVisitas/anonymous.png";
//     foreach ($_FILES['imagenes']['name'] as $key => $name){

//       $newFilename = time() . "_" . $name;
//       move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], 'imagenesVisitas/' . $newFilename);
//       $location = 'imagenesVisitas/' . $newFilename;
    
//         $imagenes=$imagenes."-".$location;

       
// }
 
//   $imagenes1 = substr($imagenes, 1);

// }
 //$newFilename = time() . "_" . $name;
 //   move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], 'imagenes/' . $newFilename);
  //  $location = 'imagenes/' . $newFilename;
    
  //  mysqli_query($conn,"insert into photo (location) values ('$location')");
  
//  header('location:index.php');



 

    // }

  $imagenes1 = substr($imagenes, 1);
 print_r($imagenes1);

 $extraer = explode("-", $imagenes1);

 print_r($extraer);

 foreach ($extraer as $key => $value) {
   echo "<img width='50px' height='50px' src='$value'><br>";
 }           

                 } */


                <div class="step" id="step-5">
                    <div class="step__header">
                        <h2 class="step__title">Evidencia Imágenes</h2>
                    </div>
                    <div class="step__body">
                    
                     

                      <link rel="stylesheet" href="Preview-Images-master/css/styles.css">
                       <link rel="stylesheet" href="Preview-Images-master/css/icons.css">    
                 
                      <div style="background-color: #07A882" class="col-sm-12">
                        <br>
                        <h3 style="color: white" class="card-title">Selecciona tres imágenes como evidencia </h3>

                        
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
                            <input class="step__input" type="file" multiple id="add-new-photo" name="imagenes[]" >
                        </div>
                    </div>

                
            </section>
        </div>
    </main>

            <script src="Preview-Images-master/js/modal.js"></script>
            <script src="Preview-Images-master/js/functions.js"></script>
            <script src="Preview-Images-master/js/scripts.js"></script>

</div>
                    <div class="row">
                    <br>
                    <select name="estatusVisita" id="estatusVisita" class="step__input" required>
                            <option selected reardonly style="display:none;">Estatus visita</option>
                            <option value="En proceso">En proceso</option>
                            <option value="Realizadas">Realizadas</option>
                            <option value="No realizadas">No realizadas</option>
                            <option value="Archivadas">Archivadas</option>
                        </select>
                    <textarea name="comentarios" id="comentarios" rows="4" cols="80" placeholder="Comentarios" class="step__input"></textarea>
                     <input name="alumnos" id="alumnos" value="Todos" type="hidden" class="step__input">
                     <?php $idUsuario = $_SESSION["idUsuario"]; 
                     $fecha_actual= date("Y-m-d");
                     ?>
                     
                     <input name="fechaCreacion" id="fechaCreacion" value="<?php echo $fecha_actual?>" type="hidden" class="step__input">
                     <input name="creadoPor" id="creadoPor" value="<?php echo $nombreUsuario?>" type="hidden" class="step__input">
                     <input name="fechaModificacion" id="fechaModificacion" value="0000-00-00" type="hidden" class="step__input">
                     <input name="modificadoPor" id="modificadoPor" value="Nadie" type="hidden" class="step__input">


                    </div>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="4" data-step="5">Regresar</button>
                        <button class="step__button" type="submit" name="input">Guardar</button>
                    </div>
                </div>
 -->
 