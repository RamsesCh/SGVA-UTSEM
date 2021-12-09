<?php 
  session_start();
      if(@!$_SESSION['idUsuario']){
      header("location:index.php");

  }  

  $id = $_SESSION['idUsuario'];

require 'conexion.php';

 ?>

<body class="hold-transition sidebar-mini">
<?php require'plantilla.php'; ?> 
<!-- <section class="content">
 <div class="wrapper">
  -->
   
  <section   class="content-header">
    <div class="content"> 
      <div style="background-color: white;" class="content-wrapper">

    <?php
             if(isset($_GET['action']) == 'delete'){
        $id_delete = intval($_GET['idArchivo']);
        $query = mysqli_query($mysqli, "SELECT * FROM archivos WHERE idArchivo='$id_delete'");
        if(mysqli_num_rows($query) == 0){
          echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> No se encontraron datos.</div>';
        }else{
          $delete = mysqli_query($mysqli, "DELETE FROM archivos WHERE idArchivo='$id_delete'");
          if($delete){
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>  Bien hecho, los archivos han sido eliminados correctamente.</div>';
          }else{
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Error, no se pudo eliminar los archivos.</div>';
          }
        }
      }
    ?>       
            <div id="respuesta"></div>
            
            <div class="card">
              <div class="card-header"  style="background-color: #55C4A9" >
                <h3 class="card-title"style="color: white">Validar alumnos</h3>
              </div>
              
              
             
                 <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                  <tr>
                    <th>Nombre alumno</th>
                    <th>Nombre documento</th>
                    <th>Visita</th>
                    <th>Visualizar</th>
                    <th>Estatus visita</th>
                    <th>comentarios u observaciones</th>
                    <th>Asignar comentarios u observaciones</th>
                    <th>Activar/Desactivar</th>
                    <th>Observaciones</th>
                    <th>Eliminar documento</th>   
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


         $sql2="SELECT * FROM actividades N INNER JOIN documentos D ON N.idActividad = D.idActividad INNER JOIN archivos A ON D.idDocumento = A.idDocumento INNER JOIN alumnos S ON A.id_alumno = S.id_alumno";
 $result2=mysqli_query($mysqli,$sql2);
 while($mostrar=mysqli_fetch_array($result2)){ 

  // if ($mostrar['estatusArchivo'] == "Pendiente") {
   
      
          ?>
          <form method="POST" id="formImg<?php echo $mostrar['idDocumento']; ?>" enctype="multipart/form-data">

           <tr id="id<?php echo $mostrar['idDocumento']; ?>">
          <td><?php echo $mostrar['nombre'].' '.$mostrar['apaterno'].' '.$mostrar['amaterno']?></td>  
          <td><?php echo $mostrar['nombreDocumento']?></td>
          <td><?php echo $mostrar['nombreActividad']?></td>
          <td><a href="<?php echo $mostrar['directorio']?>" target="_blank"><?php echo $mostrar['directorio']?></a></td>
          <td><?php echo $mostrar['estatusDocumento']?></td>
          <td><?php echo $mostrar['comentariosArchivo']?></td>
          <td><input type="text" name="comentarios" id="comentarios"></td>
          <td hidden><input  value="<?php echo $mostrar['nombreDocumento'] ?>" name="nombreDocumento" id="nombreDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['idDocumento'] ?>" name="idDocumento" id="idDocumento"></td>
          <td hidden><input  value="<?php echo $mostrar['id_alumno'] ?>" name="id_alumno" id="id_alumno"></td>
          <?php 

            if ($mostrar['estatusArchivo'] == "Pendiente") { 
            ?>

           <td><input   type="button" onclick="actDes(<?php echo $mostrar['idArchivo']; ?>,'<?php echo $mostrar['estatusArchivo'] ?>' );" class="btn btn-danger" value="Pendiente"></input>
          </td>

          <?php    
            }else{

           ?>

           <td><input   type="button" onclick="actDes(<?php echo $mostrar['idArchivo']; ?>,'<?php echo $mostrar['estatusArchivo'] ?>' );" class="btn btn-success" value="Validado"></input>
          </td>
          <?php
        }
        ?>
          
          <td><button type="button" onclick="Comentar('<?php echo $mostrar['idDocumento'] ?>');" class="btn btn-success">Observaciones</button>
          </td>
            <?php   

//  if(isset($_SESSION['visitasD']) && $_SESSION['visitasD'] == "Activo"){
           echo "<td><button class='btn btn-sm btn-danger'><a href='mostrar_visitas.php?action=delete&idVisita=$mostrar[idArchivo]' data-toggle='tooltip' title='Eliminar'><img src='plantilla/borra.jpg' width='50px' height='50px'></a></button>
                    </td>";

  //      }
    ?> 

          
        </tr>
      </form>
       <?php     
           }
        ?>
      </tbody>         
                  <tfoot>
                  <tr>
                    <th>Nombre alumno</th>
                    <th>Nombre documento</th>
                    <th>Visita</th>
                    <th>Visualizar</th>
                    <th>Estatus visita</th>
                    <th>comentarios u observaciones</th>
                    <th>Asignar comentarios u observaciones</th>
                    <th>Activar/Desactivar</th>
                    <th>Observaciones</th>
                    <th>Eliminar documento</th>

                    
                  </tr>
                  </tfoot>
                </table>
                 </div>
              </div>
</section>

<aside class="control-sidebar control-sidebar-dark">
  
  </aside>

  </section>
 
<script type="text/javascript" src="js/funcionLogin.js"></script> 
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": false, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  }); 
</script> 

 <?php
require 'footer.php';
?>