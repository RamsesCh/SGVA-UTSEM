<?php
session_start();
    require("conexion.php");

  

  
   $nombreActividad = $_POST['nombreActividad'];
    $estatusActividad = $_POST['estatusActividad'];
    $fechaCreacionA = $_POST['fechaCreacionA'];
    $idUsuario = $_POST['idUsuario'];
  

    $insertar =$mysqli->query("INSERT INTO `actividades` (`idActividad`, `nombreActividad`, `fechaCreacionA`, `estatusActividad`, `idUsuario`) VALUES('', '$nombreActividad', '$fechaCreacionA', '$estatusActividad','$idUsuario')");
   
   if($insertar){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, la actividad ha sido agregada correctamente. </div>';
                                 

                            
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, la actividad no ha sido agregada correctamente.s.</div>';

                            

                        }
    


    ?>