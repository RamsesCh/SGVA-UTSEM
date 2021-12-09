   <?php 

require 'conexion.php';


         // $input = $_POST["input"];
          $idVisita = $_POST['idVisita'];
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
          $estatusVisita =$_POST["estatusVisita"];
          $fechaCreacion =$_POST["fechaCreacion"];
          $creadoPor=$_POST["creadoPor"];
          $fechaModificacion =$_POST["fechaModificacion"];
          $modificadoPor =$_POST["modificadoPor"];
          $comentarios=$_POST["comentarios"];
           $imagenes1='';
          $imagenes2='';
          $imagenes3='';
          $alumnos='';

      $sql1="SELECT * from alumnos WHERE desc_carrera = '$carrera' AND idActividad ='$tipoVisita'AND estatus_alumno = 'Validado' ";
         $result=mysqli_query($mysqli,$sql1);               
        
     while($mostrar=mysqli_fetch_array($result)){

         $alumnos = $alumnos.($mostrar['nombre'].' '.$mostrar['apaterno'].' '.$mostrar['apaterno']); 
          
          // $alumnos= implode('-' $alumnos);
     }    
    
   
           


          if (isset($_FILES["licenciaChofer"]))
    {
        $licenciaChofer = $_FILES["licenciaChofer"];
        $nombre = $licenciaChofer["name"];
        $nombre =str_replace(' ', '-', $nombre);
     
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
     }
   }else{
     
     $src = $_POST["licenciaChofer1"];
     $src =str_replace(' ', '-', $src);

   }

  if (isset($_FILES["seguroVehiculoC"]))
    {
        $seguroVehiculoC = $_FILES["seguroVehiculoC"];
        $nombre1 = $seguroVehiculoC["name"];
        $nombre1 =str_replace(' ', '-', $nombre1);
 
        $tipo1 = $seguroVehiculoC["type"];
        $ruta_provisional1 = $seguroVehiculoC["tmp_name"];
        $size1 = $seguroVehiculoC["size"];
        $carpeta1 = "imagenesVisitas/";
        
        // if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          if ($tipo1 != 'application/pdf')
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
      }else{
        
        $src1 = $_POST["seguroVehiculoC1"];
        $src1 =str_replace(' ', '-', $src1);

      }

  if (isset($_FILES["tipoVehiculoC"]))
    {
        $tipoVehiculoC = $_FILES["tipoVehiculoC"];
        $nombre2 = $tipoVehiculoC["name"];
        $nombre2 =str_replace(' ', '-', $nombre2);

        $tipo2 = $tipoVehiculoC["type"];
        $ruta_provisional2 = $tipoVehiculoC["tmp_name"];
        $size2 = $tipoVehiculoC["size"];
        $carpeta2 = "imagenesVisitas/";
        
        // if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
          if ($tipo2 != 'application/pdf')
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
        }else{
        
         $src2 = $_POST["tipoVehiculoC1"];
         $src2 =str_replace(' ', '-', $src2);

        }

    
    echo($src);
    echo($src1);
    echo($src2);


  $update = $mysqli->query("
    UPDATE visitas
    
    SET
  
   idActividad ='$tipoVisita',
   areaResponsable ='$areaResponsable',
   objetivoVisita ='$objetivoVisita',
   fechaVisita ='$fechaVisita', 
   docenteAcargo ='$docenteAcargo',
   Materia ='$Materia',
   lugar ='$lugar',
   descripcionActividad ='$descripcionActividad',
   carrera = '$carrera',
   grupo = '$grupo',
   cuatrimestre = '$cuatrimestre',
   nombreChofer ='$nombreChofer',
   sexoChofer ='$sexoChofer',
   numTelefonoC ='$numTelefonoC',
   licenciaChofer = '$src',
   seguroVehiculoC = '$src1',
   tipoVehiculoC ='$src2',
   alumnos ='$alumnos',
   estatusVisita ='$estatusVisita',
   imagenes ='$imagenes1',
   imagenesDos ='$imagenes2',
   imagenesTres ='$imagenes3',
   fechaCreacion ='$fechaCreacion',
   creadoPor ='$creadoPor',
   fechaModificacion ='$fechaModificacion',
   modificadoPor ='$modificadoPor',
   comentarios ='$comentarios'
    WHERE idVisita='$idVisita'");
   
                 if($update)
                 {
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente. </div>';
                            //header("location:mostrar_visitas.php");
                            echo "<script>location.href='mostrar_visitas.php'</script>";


                            
                 }
                 else
                 {
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';

                 }

                  

// if(isset($_POST['input'])){
//           $idVisita = $_POST['idVisita'];
//           $tipoVisita = $_POST["tipoVisita"];
//           $areaResponsable = $_POST["areaResponsable"];
//           $objetivoVisita = $_POST["objetivoVisita"];
//           $fechaVisita = $_POST["fechaVisita"]; 
//           $docenteAcargo= $_POST["docenteAcargo"];
//           $Materia = $_POST["Materia"];
//           $lugar = $_POST["lugar"];
//           $descripcionActividad = $_POST["descripcionActividad"];
//           $carrera =$_POST["carrera"];
//           $grupo =$_POST["grupo"];
//           $cuatrimestre =$_POST["cuatrimestre"];
//           $nombreChofer =$_POST["nombreChofer"];
//           $sexoChofer =$_POST["sexoChofer"];
//           $numTelefonoC =$_POST["numTelefonoC"];
//           $licenciaChofer =$_POST["licenciaChofer"];
//           $seguroVehiculoC =$_POST["seguroVehiculoC"];
//           $tipoVehiculoC =$_POST["tipoVehiculoC"];
//           $alumnos =$_POST["alumnos"];
//           $estatusVisita =$_POST["estatusVisita"];
//           $fechaCreacion =$_POST["fechaCreacion"];
//           $creadoPor=$_POST["creadoPor"];
//           $fechaModificacion =$_POST["fechaModificacion"];
//           $modificadoPor =$_POST["modificadoPor"];
//           $comentarios=$_POST["comentarios"];

          
         
//  if(isset($_POST["photo"])) {

//    $photo =$_POST["photo"];

//      if(isset($_FILES["imagenes"])) {

//       $img = $_FILES["imagenes"];
//       //print_r($img);

//       //$ruta = "imagenesVisitas/anonymous.png";
//     foreach ($_FILES['imagenes']['name'] as $key => $name){

//       $newFilename = time() . "_" . $name;
//       move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], 'imagenesVisitas/' . $newFilename);
//       $location = 'imagenesVisitas/' . $newFilename;
    
//         $imagenes=$imagenes."-".$location;

       
// }
 
//   $imagenes1 = substr($imagenes, 1);

//   $imagenes1 = $imagenes1."-".$photo;

//   echo($imagenes1);

// }else{

//   $imagenes = '';

//   $imagenes1 = $imagenes;
// }
// }else{

//   $photo = '';
// }
//  //$newFilename = time() . "_" . $name;
//  //   move_uploaded_file($_FILES['imagenes']['tmp_name'][$key], 'imagenes/' . $newFilename);
//   //  $location = 'imagenes/' . $newFilename;
    
//   //  mysqli_query($conn,"insert into photo (location) values ('$location')");
  
// //  header('location:index.php');



 

//     // }                                          
      



// $update = mysqli_query($mysqli, "UPDATE visitas SET 
          
          
//           tipoVisita ='$tipoVisita',
//           areaResponsable ='$areaResponsable',
//           objetivoVisita ='$objetivoVisita',
//           fechaVisita ='$fechaVisita', 
//           docenteAcargo ='$docenteAcargo',
//           Materia ='$Materia',
//           lugar ='$lugar',
//           descripcionActividad ='$descripcionActividad',
//           carrera ='$carrera',
//           grupo ='$grupo',
//           cuatrimestre ='$cuatrimestre',
//           nombreChofer='$nombreChofer',
//           sexoChofer='$sexoChofer',
//           numTelefonoC='$numTelefonoC',
//           licenciaChofer='$licenciaChofer',
//           seguroVehiculoC='$seguroVehiculoC',
//           tipoVehiculoC='$tipoVehiculoC',
//           alumnos='$alumnos',
//           estatusVisita='$estatusVisita',
//           imagenes ='$imagenes1',
//           fechaCreacion='$fechaCreacion',
//           creadoPor='$creadoPor',
//           fechaModificacion='$fechaModificacion',
//           modificadoPor='$modificadoPor',
//           comentarios='$comentarios'

//              WHERE idVisita='$idVisita'");
   
//                  if($update)
//                  {
//                             echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente. </div>';
//                             header("location:mostrar_visitas.php");


                            
//                  }
//                  else
//                  {
//                             echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';

//                  }

// /*

//   $imagenes1 = substr($imagenes, 1);
//  print_r($imagenes1);

//  $extraer = explode("-", $imagenes1);

//  print_r($extraer);

//  foreach ($extraer as $key => $value) {
//    echo "<img width='50px' height='50px' src='$value'><br>";
//  }           

//                  } */

//   }


?>