<?php

    require 'conexion.php';

    class Visita{
 alert("hola aqui2");
        public function ConsultarTodo(){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM persona");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function ConsultarPorId($idPersona){
            $conexion = new Conexion();
            $stmt = $conexion->prepare("SELECT * FROM persona where idPersona = :idPersona");
            $stmt->bindValue(":idPersona", $idPersona, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function Guardar($tipoVisita, $areaResponsable, $objetivoVisita, $fechaVisita, $docenteAcargo, $Materia, $lugar, $descripcionActividad, $carrera, $grupo, $cuatrimestre, $nombreChofer, $sexoChofer, $numTelefonoC, $licenciaChofer, $seguroVehiculoC, $tipoVehiculoC, $alumnos, $estatusVisita, $imagenes, $fechaCreacion, $creadoPor, $fechaModificacion, $modificadoPor, $comentarios){
              
            $conexion = new Conexion();
           
            $stmt = $conexion->prepare("INSERT INTO `visitas`
                                                (`tipoVisita`,
                                                `areaResponsable`,
                                                `objetivoVisita`,
                                                `fechaVisita`, 
                                                `docenteAcargo`,
                                                `Materia`,
                                                `lugar`,
                                                `descripcionActividad`,
                                                `carrera`,
                                                `grupo`,
                                                `cuatrimestre`,
                                                `nombreChofer`,
                                                `sexoChofer`,
                                                `numTelefonoC`,
                                                `licenciaChofer`,
                                                `seguroVehiculoC`,
                                                `tipoVehiculoC`,
                                                `alumnos`,
                                                `estatusVisita`,
                                                `imagenes`,
                                                `fechaCreacion`,
                                                `creadoPor`,
                                                `fechaModificacion`,
                                                `modificadoPor`,
                                                `comentarios`)
                                    VALUES (:tipoVisita,
                                            :areaResponsable,
                                            :objetivoVisita,
                                            :fechaVisita,
                                            :docenteAcargo,
                                            :Materia,
                                            :lugar,
                                            :descripcionActividad,
                                            :carrera,
                                            :grupo,
                                            :cuatrimestre,
                                            :nombreChofer,
                                            :sexoChofer,
                                            :numTelefonoC,
                                            :licenciaChofer,
                                            :seguroVehiculoC,
                                            :tipoVehiculoC,
                                            :alumnos,
                                            :estatusVisita,
                                            :imagenes,
                                            :fechaCreacion,
                                            :creadoPor,
                                            :fechaModificacion,
                                            :modificadoPor,
                                            :comentarios);");
            $stmt->bindValue(":tipoVisita", $tipoVisita, PDO::PARAM_STR);
            $stmt->bindValue(":areaResponsable", $areaResponsable, PDO::PARAM_STR);
            $stmt->bindValue(":objetivoVisita", $objetivoVisita, PDO::PARAM_STR);
            $stmt->bindValue(":fechaVisita", $fechaVisita, PDO::PARAM_STR);
            $stmt->bindValue(":docenteAcargo", $docenteAcargo, PDO::PARAM_STR);
            $stmt->bindValue(":Materia", $Materia, PDO::PARAM_STR);
            $stmt->bindValue(":lugar", $lugar, PDO::PARAM_STR);
            $stmt->bindValue(":descripcionActividad", $descripcionActividad, PDO::PARAM_STR);
            $stmt->bindValue(":carrera", $carrera, PDO::PARAM_STR);
            $stmt->bindValue(":grupo", $grupo, PDO::PARAM_STR);
            $stmt->bindValue(":cuatrimestre", $cuatrimestre, PDO::PARAM_STR);
            $stmt->bindValue(":nombreChofer", $nombreChofer, PDO::PARAM_STR);
            $stmt->bindValue(":sexoChofer", $sexoChofer, PDO::PARAM_STR);
            $stmt->bindValue(":numTelefonoC", $numTelefonoC, PDO::PARAM_STR);
            $stmt->bindValue(":licenciaChofer", $licenciaChofer, PDO::PARAM_STR);
            $stmt->bindValue(":seguroVehiculoC", $seguroVehiculoC, PDO::PARAM_STR);
            $stmt->bindValue(":tipoVehiculoC", $tipoVehiculoC, PDO::PARAM_STR);
            $stmt->bindValue(":alumnos", $alumnos, PDO::PARAM_STR);
            $stmt->bindValue(":estatusVisita", $estatusVisita, PDO::PARAM_STR);
            $stmt->bindValue(":imagenes", $imagenes, PDO::PARAM_STR);
            $stmt->bindValue(":fechaCreacion", $fechaCreacion, PDO::PARAM_STR);
            $stmt->bindValue(":creadoPor", $creadoPor, PDO::PARAM_STR);
            $stmt->bindValue(":fechaModificacion", $fechaModificacion, PDO::PARAM_STR);
            $stmt->bindValue(":modificadoPor", $modificadoPor, PDO::PARAM_STR);
            $stmt->bindValue(":comentarios", $comentarios, PDO::PARAM_STR);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al guardar la información";
            }

        }

        public function Modificar($idVisita, $tipoVisita, $areaResponsable, $objetivoVisita, $fechaVisita, $docenteAcargo, $Materia, $lugar, $descripcionActividad, $carrera, $grupo, $cuatrimestre, $nombreChofer, $sexoChofer, $numTelefonoC, $licenciaChofer, $seguroVehiculoC, $tipoVehiculoC, $alumnos, $estatusVisita, $imagenes, $fechaCreacion, $creadoPor, $fechaModificacion, $modificadoPor, $comentarios){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("UPDATE `visitas`
                                        SET `tipoVisita` = :tipoVisita,
                                        `areaResponsable` = :areaResponsable,
                                        `objetivoVisita` = :objetivoVisita,
                                        `fechaVisita` = :fechaVisita,
                                        `docenteAcargo` = :docenteAcargo
                                        WHERE `idPersona` = :idPersona;");
            $stmt->bindValue(":tipoVisita", $tipoVisita, PDO::PARAM_STR);
            $stmt->bindValue(":areaResponsable", $areaResponsable, PDO::PARAM_STR);
            $stmt->bindValue(":objetivoVisita", $objetivoVisita, PDO::PARAM_STR);
            $stmt->bindValue(":fechaVisita", $fechaVisita, PDO::PARAM_STR);
            $stmt->bindValue(":docenteAcargo", $docenteAcargo, PDO::PARAM_STR);
            $stmt->bindValue(":idVisita", $idVisita, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al modificar la información";
            }

        }

        public function Eliminar($idPersona){

            $conexion = new Conexion();
            $stmt = $conexion->prepare("DELETE FROM persona WHERE idPersona = :idPersona");
            $stmt->bindValue(":idPersona", $idPersona, PDO::PARAM_INT);

            if($stmt->execute()){
                return "OK";
            }else{
                return "Error: se ha generado un error al eliminar la información";
            }

        }

    }

?>