<?php

    require '../modelo/visita.modelo.php';


    if($_POST){
        $visita = new Visita();

        switch($_POST["accion"]){
            case "CONSULTAR":
                echo json_encode($visita->ConsultarTodo());
            break;
            case "CONSULTAR_ID":
                echo json_encode($visita->ConsultarPorId($_POST["idPersona"]));
            break;
            case "GUARDAR":
               alert("hola a todos");
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
          $licenciaChofer =$_POST["licenciaChofer"];
          $seguroVehiculoC =$_POST["seguroVehiculoC"];
          $tipoVehiculoC =$_POST["tipoVehiculoC"];
          $alumnos =$_POST["alumnos"];
          $estatusVisita =$_POST["estatusVisita"];
          $imagenes =$_POST["imagenes"];
          $fechaCreacion =$_POST["fechaCreacion"];
          $creadoPor=$_POST["creadoPor"];
          $fechaModificacion =$_POST["fechaModificacion"];
          $modificadoPor =$_POST["modificadoPor"];
          $comentarios=$_POST["comentarios"];

                if($tipoVisita == ""){
                    echo json_encode("Debe ingresar los datos de la visita");
                    return;
                }

                if($areaResponsable == ""){
                    echo json_encode("Debe ingresar la area responsable de la visita");
                    return;
                }

                if($objetivoVisita == ""){
                    echo json_encode("Debe ingresar objetivo de la visita");
                    return;
                }

                if($fechaVisita == ""){
                    echo json_encode("Debe ingresar la fecha de la visita");
                    return;
                }

                if($docenteAcargo == ""){
                    echo json_encode("Debe ingresar el docente acargo de la visita");
                    return;
                }

                if($Materia == ""){
                    echo json_encode("Debe ingresar la materia de la visita");
                    return;
                }

                if($lugar == ""){
                    echo json_encode("Debe ingresar el lugar de la visita");
                    return;
                }

                if($descripcionActividad == ""){
                    echo json_encode("Debe ingresar la descripcion de la visita");
                    return;
                }

                if($carrera == ""){
                    echo json_encode("Debe ingresar la carrera de los alumnos que asistiran a la visita");
                    return;
                }

                if($grupo == ""){
                    echo json_encode("Debe ingresar el grupo de los alumnos que asistiran a la visita");
                    return;
                }

               if($cuatrimestre == ""){
                    echo json_encode("Debe ingresar los datos de la visita");
                    return;
                }

                if($nombreChofer == ""){
                    echo json_encode("Debe ingresar la area responsable de la visita");
                    return;
                }

                if($sexoChofer == ""){
                    echo json_encode("Debe ingresar objetivo de la visita");
                    return;
                }

                if($numTelefonoC == ""){
                    echo json_encode("Debe ingresar la fecha de la visita");
                    return;
                }

                if($licenciaChofer == ""){
                    echo json_encode("Debe ingresar el docente acargo de la visita");
                    return;
                }

                if($seguroVehiculoC == ""){
                    echo json_encode("Debe ingresar la materia de la visita");
                    return;
                }

                if($tipoVehiculoC == ""){
                    echo json_encode("Debe ingresar el lugar de la visita");
                    return;
                }

                if($alumnos == ""){
                    echo json_encode("Debe ingresar la descripcion de la visita");
                    return;
                }

                if($estatusVisita == ""){
                    echo json_encode("Debe ingresar la carrera de los alumnos que asistiran a la visita");
                    return;
                }

                if($imagenes == ""){
                    echo json_encode("Debe ingresar imagenes a la visita");
                    return;
                }



                $respuesta = $visita->Guardar($tipoVisita, $areaResponsable, $objetivoVisita, $fechaVisita, $docenteAcargo, $Materia, $lugar, $descripcionActividad, $carrera, $grupo, $cuatrimestre, $nombreChofer, $sexoChofer, $numTelefonoC, $licenciaChofer, $seguroVehiculoC, $tipoVehiculoC, $alumnos, $estatusVisita, $imagenes, $fechaCreacion, $creadoPor, $fechaModificacion, $modificadoPor, $comentarios);
                echo json_encode($respuesta);
            break;
            case "MODIFICAR":
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
          $licenciaChofer =$_POST["licenciaChofer"];
          $seguroVehiculoC =$_POST["seguroVehiculoC"];
          $tipoVehiculoC =$_POST["tipoVehiculoC"];
          $alumnos =$_POST["alumnos"];
          $estatusVisita =$_POST["estatusVisita"];
          $imagenes =$_POST["imagenes"];
          $fechaCreacion =$_POST["fechaCreacion"];
          $creadoPor=$_POST["creadoPor"];
          $fechaModificacion =$_POST["fechaModificacion"];
          $modificadoPor =$_POST["modificadoPor"];
          $comentarios=$_POST["comentarios"];
          $idVisita = $_POST["idVisita"];

                if($nombres == ""){
                    echo json_encode("Debe ingresar los nombres de la visita");
                    return;
                }

                if($apellidos == ""){
                    echo json_encode("Debe ingresar los apellidos de la visita");
                    return;
                }

                if($fechaNacimiento == ""){
                    echo json_encode("Debe ingresar la Fecha Nacimiento de la visita");
                    return;
                }

                if($direccion == ""){
                    echo json_encode("Debe ingresar la dirección de la visita");
                    return;
                }

                if($telefono == ""){
                    echo json_encode("Debe ingresar el teléfono de la visita");
                    return;
                }

                $respuesta = $visita->Modificar($idPersona, $nombres, $apellidos, $fechaNacimiento, $direccion, $telefono);
                echo json_encode($respuesta);
            break;
            case "ELIMINAR":
                $idPersona = $_POST["idPersona"];
                $respuesta = $visita->Eliminar($idPersona);
                echo json_encode($respuesta);
            break;
        }
    }

?>