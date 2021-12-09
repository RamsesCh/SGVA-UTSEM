<?php 
  session_start();
      if(@!$_SESSION['idUsuario']){
      header("location:index.php");

  }   require"conexion.php";

  $nombreUsuario = $_SESSION['nombreCompletoUsuario'];
  

 ?>
<body class="hold-transition sidebar-mini">

 <div class="wrapper">

<?php require'plantilla.php'; ?>  
  


    <div class="content-wrapper">
   
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
        </div>
      </div> 
    </section> 

   
    <section class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-md-12">
            <div  class="card card-success" >
              <div class="card-header">
                <h3 class="card-title">Subir imágenes de evidencía de la visita </h3>
              </div>
              <?php

    require("conexion.php");

 if(isset($_POST['input'])){
         
          $idVisita = $_POST['idVisita'];
          echo $idVisita;
        



          if (isset($_FILES["imagenUno"]))
    {
        $licenciaChofer = $_FILES["imagenUno"];
        $nombre = $licenciaChofer["name"];
        $tipo = $licenciaChofer["type"];
        $ruta_provisional = $licenciaChofer["tmp_name"];
        $size = $licenciaChofer["size"];
        $carpeta = "imagenesVisitas/";
        
         if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          // if ($tipo != 'application/pdf')
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
     }
   }

  if (isset($_FILES["imagenDos"]))
    {
        $seguroVehiculoC = $_FILES["imagenDos"];
        $nombre1 = $seguroVehiculoC["name"];
        $tipo1 = $seguroVehiculoC["type"];
        $ruta_provisional1 = $seguroVehiculoC["tmp_name"];
        $size1 = $seguroVehiculoC["size"];
        $carpeta1 = "imagenesVisitas/";
        
        if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
         // if ($tipo1 != 'application/pdf')
        {
          echo "Error, el archivo no es una .pdf"; 
        }
        else if ($size1 > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src1 = $carpeta1.$nombre1;
           @move_uploaded_file($ruta_provisional1, $src1);
        }
      }

  if (isset($_FILES["imagenTres"]))
    {
        $tipoVehiculoC = $_FILES["imagenTres"];
        $nombre2 = $tipoVehiculoC["name"];
        $tipo2 = $tipoVehiculoC["type"];
        $ruta_provisional2 = $tipoVehiculoC["tmp_name"];
        $size2 = $tipoVehiculoC["size"];
        $carpeta2 = "imagenesVisitas/";
        
         if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          // if ($tipo2 != 'application/pdf')
        {
          echo "Error, el archivo no es una .pdf"; 
        }
        else if ($size2 > 1024*1024)
        {
          echo "Error, el tamaño máximo permitido es un 1MB";
        }
        else
        {
            $src2 = $carpeta2.$nombre2;
           @move_uploaded_file($ruta_provisional2, $src2);                          
      
         }
        }
            
            $update = $mysqli->query("
        UPDATE visitas
        
        SET
        imagenes ='$src',
        imagenesDos = '$src1',
        imagenesTres = '$src2'

            
        where idVisita ='$idVisita' ");
   
                 if($update)
                 {
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, imagenes han sido agregadas correctamente. </div>';
                            // header("location:mostrar_visitas.php");
                           echo "<script> window.location= 'mostrar_visitas.php' </script>";


                            
                 }
                 else
                 {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';

                 }

      }
    ?>
 <?php $idVisita = $_GET['idVisita']; ?>

              <form name="form1" id="form1" class="form-horizontal row-fluid" action="subir_evidencia.php" method="POST" enctype="multipart/form-data" >
                <div class="card-body">
                
                  <div class="form-group">
                    <label>Imagen #1</label>
                    <input type="file" class="form-control" name="imagenUno" id="imagenUno" required>
                  </div>
                  <div class="form-group">
                    <label>Imagen #2</label>
                    <input type="file" class="form-control" name="imagenDos" id="imagenDos"  required>
                  </div>
                  <div class="form-group">
                    <label>Imagen #3</label>
                    <input type="file" class="form-control" name="imagenTres" id="imagenTres" required>
                  </div>
                  <input hidden type="text" value="<?php echo $_GET['idVisita']; ?>" name="idVisita" id="idVisita" required>
                   
                    <button class="btn btn-success" type="submit" name="input">Guardar</button>
                </div>
            </form>
        </div>
    </div>
           </div>
        </div>
      </section>
    </div>
</div>

