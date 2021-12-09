<?php 
  session_start();
      if(@!$_SESSION['idUsuario']){
      header("location:index.php");
  }  
  $id = $_SESSION['idUsuario'];

require 'conexion.php';
?>
<body class="hold-transition sidebar-mini">
<?php require'plantilla1.php'; ?> 

   
  <section   class="content-header">
    <div class="container-fluid"> 
      <div style="background-color: white;" class="content-wrapper">
 <?php 

$query = mysqli_query($mysqli, "SELECT * FROM actividades W INNER JOIN documentos D ON W.idActividad = D.idActividad INNER JOIN alumnos A ON W.idActividad = A.idActividad WHERE A.matricula = '$id'");
$query1 = mysqli_query($mysqli, "SELECT * FROM actividades W INNER JOIN documentos D ON W.idActividad = D.idActividad INNER JOIN archivos F ON D.idDocumento = F.idDocumento INNER JOIN alumnos A ON F.id_alumno = A.id_alumno WHERE A.matricula = '$id'");

$query9 = mysqli_query($mysqli, "SELECT * FROM actividades W INNER JOIN documentos D ON W.idActividad = D.idActividad INNER JOIN archivos F ON D.idDocumento = F.idDocumento INNER JOIN alumnos A ON F.id_alumno = A.id_alumno WHERE A.matricula = '$id' AND f.estatusArchivo = 'Activo'");

   $query1 = (mysqli_num_rows($query1));
   $query = (mysqli_num_rows($query));
       $query9 = (mysqli_num_rows($query9));


   if ($query == $query9 ) {

    $estatus = "Validado";

    $update = $mysqli->query("
    UPDATE alumnos
    
    SET
    estatus_alumno ='$estatus'
      
    where matricula ='$id' ");

    
   }else{
    
    $estatus = "Pendiente";

    $update = $mysqli->query("
    UPDATE alumnos
    
    SET
    estatus_alumno ='$estatus'
      
    where matricula ='$id' ");

   }
  ?>   
 
    <?php
             if(isset($_GET['action']) == 'delete'){
        $id_delete = intval($_GET['idDocumento']);
        $query = mysqli_query($mysqli, "SELECT * FROM documentos WHERE idDocumento='$id_delete'");
        if(mysqli_num_rows($query) == 0){
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
        }else{
          $delete = mysqli_query($mysqli, "DELETE FROM documentos WHERE idDocumento='$id_delete'");
          if($delete){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  Bien hecho, los documentos han sido eliminados correctamente.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los documentos.</div>';
          }
        }
      }
      $nombre='';
      $carrera='';
      $sql8="SELECT * from alumnos WHERE matricula = '$id'";
         $result8=mysqli_query($mysqli,$sql8);
      

          while($mostrar8=mysqli_fetch_array($result8)){
            $actividad = $mostrar8['idActividad'];
            $idAlumno = $mostrar8['id_alumno'];
           $carrera =  $mostrar8['desc_carrera'];
           $estatusAlumno =  $mostrar8['estatus_alumno'];
           $nombre = $mostrar8['nombre'].' '.$mostrar8['amaterno'].' '.$mostrar8['apaterno'];
          
                   }  
      
      ?> 
            <div id="respuesta"></div>
<div class="content-header">
  <div class="row">
    <div class="col-xs-12 col-sm-4"></div>
  <div class="col-xs-12 col-sm-4">

      <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="dist/img/default-150x150.png"
                       alt="User profile picture">
                </div>
              <?php

                 if($result8 = (mysqli_num_rows($result8))>0){
                  ?>
                 
                <h3 class="profile-username text-center"><?php  echo $nombre;  ?></h3>

                <p class="text-muted text-center"><?php echo $carrera; ?></p>
               <?php
                    $estatusAlumno ='';
               if ($estatusAlumno == "Validado") {
                            
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los documentos han sido validados. </div>';
          
                            
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pendiente de validación</div>'; 

                        }
                   }
                ?>

              </div>
              <!-- /.card-body -->
            </div>
       </div>     
      <div class="col-xs-12 col-sm-4"></div>
  </div>
  <div style="background-color: #55C4A9" class="card">
    <div>
  <h2 style="color: white;">&nbsp;Anexa tu documentación requerida </h2>
</div>
</div>
</div>

            

          

<?php
// $query1 ==0 AND $query1 != $query   ----- $query1 ==0 || $query1 != $query
if($query1 == 0 || $query1 != $query){
?>


   <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre documento</th>
                    <th>Nombre actividad</th>
                    <th>Cargar archivos</th>
                    <th>Acción</th>
                  </tr>
                  </thead>      
                  <tbody>

  <?php   

   $sql1="SELECT * from alumnos WHERE matricula = '$id'";
         $result1=mysqli_query($mysqli,$sql1);
          while($mostrar2=mysqli_fetch_array($result1)){
            $actividad = $mostrar2['idActividad'];
            $idAlumno = $mostrar2['id_alumno'];
         } 

  // SELECT DISTINCT(D.nombreDocumento), V.tituloActividad FROM documentos D INNER JOIN actividades A ON D.idActividad = A.idActividad INNER JOIN visitas V ON A.idActividad = V.idActividad INNER JOIN alumnos C ON V.idActividad= C.idActividad WHERE C.idActividad = 7 
 $sql="SELECT * FROM actividades W INNER JOIN documentos D ON W.idActividad = D.idActividad INNER JOIN alumnos A ON W.idActividad = A.idActividad WHERE A.matricula = '$id' ";
    $result=mysqli_query($mysqli,$sql);


           while($mostrar=mysqli_fetch_array($result)){
  $idDocumentonuvo = $mostrar['idDocumento'];

  $sql6 = mysqli_query($mysqli, "SELECT * FROM actividades W INNER JOIN documentos D ON W.idActividad = D.idActividad INNER JOIN archivos F ON D.idDocumento = F.idDocumento INNER JOIN alumnos A ON F.id_alumno = A.id_alumno WHERE A.matricula = '$id' AND D.idDocumento = '$idDocumentonuvo'");

 ?> <form method="POST" id="formImg<?php echo $mostrar['idDocumento'] ?>" enctype="multipart/form-data">

           <tr>
          <td><?php echo $mostrar['nombreDocumento']?></td>
          <td><?php echo $mostrar['nombreActividad']?></td>

          <td><input  type="file" name="imagen" id="imagen"></td>

          <td hidden><input  value="<?php echo $mostrar['nombreDocumento'] ?>" name="nombreDocumento" id="nombreDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['idDocumento'] ?>" name="idDocumento" id="idDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['id_alumno'] ?>" name="idAlumno" id="idAlumno"></td>
          <td hidden><input  value="<?php echo $mostrar['nombreActividad']?>" name="nombreActividad" id="nombreActividad"></td>
          <td hidden><input  value="<?php echo $mostrar['matricula'] ?>" name="matricula" id="matricula"></td>
             <?php
        if ($sql6->num_rows===0) {
          ?>
            <td><button  type="button"  onclick="Cargar(<?php echo $mostrar['idDocumento'] ?>);" class="btn btn-success">Subir</button></td>
         <?php   
            
          }else{
?>
            <td><button  type="button"  class="btn btn-danger">Subido</button></td>
       <?php      
          }  
         ?>
        </tr>

      </form>

<?php
 }
?>


 </tbody>         
                  <tfoot>
                  <tr>
                    <th>Nombre documento</th>
                    <th>Nombre actividad</th>
                    <th>Cargar archivos</th>
                    <th>Acción</th>
                  </tr>
                  </tfoot>
                </table>
  <?php
  }else if($query1 == $query){

    ?>
         <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nombre documento</th>
                    <th>Nombre actividad</th>
                    <th>Comentarios</th>
                    <th>Estatus archivo</th>
                    <th>Cargar archivos</th>
                    <th>Acción</th>
                  </tr>
                  </thead>      
                  <tbody>
  <?php

    $sql1="SELECT * from alumnos WHERE matricula = '$id'";
         $result1=mysqli_query($mysqli,$sql1);
          while($mostrar2=mysqli_fetch_array($result1)){
            $actividad = $mostrar2['idActividad'];
            $idAlumno = $mostrar2['id_alumno'];
         } 
         $sql2="SELECT * FROM actividades N INNER JOIN documentos D ON N.idActividad = D.idActividad INNER JOIN archivos A ON D.idDocumento = A.idDocumento INNER JOIN alumnos S ON A.id_alumno = S.id_alumno WHERE S.matricula ='$id'";
 $result2=mysqli_query($mysqli,$sql2);
 while($mostrar=mysqli_fetch_array($result2)){ 

           $estatusA = $mostrar['estatusArchivo'];

  if ($estatusA == "Activo" || $estatusA == "Pendiente") {    
?>
       <form method="POST" id="formImg" enctype="multipart/form-data">
        <tr>
                    
          <td><?php echo $mostrar['nombreDocumento']?></td>
          <td><?php echo $mostrar['nombreActividad']?></td>
          <td><?php echo $mostrar['comentariosArchivo']?></td>
          <td><?php echo $mostrar['estatusArchivo']?></td>
          <td><input  type="file" name="imagen" id="imagen"></td>
           <td hidden><input  value="<?php echo $mostrar['nombreDocumento'] ?>" name="nombreDocumento" id="nombreDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['idDocumento'] ?>" name="idDocumento" id="idDocumento"></td> 
          <td hidden><input  value="<?php echo $idAlumno ?>" name="idAlumno" id="idAlumno"></td>
          <td><input type="button" value="Subido" class="btn btn-danger"></input>
          </td>
        </tr>
      </form>
        <?php 
         
          }else{
          ?>
          <form method="POST" id="formImg" enctype="multipart/form-data">

           <tr>
          <td><?php echo $mostrar['nombreDocumento']?></td>
          <td><?php echo $mostrar['nombreActividad']?></td>
          <td><?php echo $mostrar['comentariosArchivo']?></td>
          <td><?php echo $mostrar['estatusArchivo']?></td>
          <td><input  type="file" name="imagen" id="imagen"></td>
          <td hidden><input  value="<?php echo $mostrar['nombreDocumento'] ?>" name="nombreDocumento" id="nombreDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['idDocumento'] ?>" name="idDocumento" id="idDocumento"></td>
          <td hidden><input  value="<?php echo $idAlumno ?>" name="idAlumno" id="idAlumno"></td>
            
          <td><button  value="<?php echo $mostrar['nombreDocumento'].'-'.$mostrar['idDocumento'].'-'.$idAlumno ?>" type="button" onclick="Cargar('<?php echo $mostrar['nombreDocumento']; ?>','<?php echo $mostrar['idDocumento']; ?>','<?php echo $idAlumno; ?>');" class="btn btn-success">Subir</button>
          </td>
        </tr>
      </form>
       <?php     

     }

  }
?>
   </tbody>         
                  <tfoot>
                  <tr>
                    <th>Nombre documento</th>
                    <th>Nombre actividad</th>
                    <th>Comentarios</th>
                    <th>Estatus archivo</th>
                    <th>Cargar archivos</th>
                    <th>Acción</th>
                  </tr>
                  </tfoot>
                </table>
<?php
}

 ?>

          </div>
        
        </div>
<script type="text/javascript" src="js/funcionLogin.js"></script> 
  </section>
 

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  }); 
</script> 
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
   
  }); 
</script>
 

<!-- <?php
require 'footer.php';
?> -->