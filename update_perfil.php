<?php

require 'conexion.php';


    $idUsuario = $_POST['idUsuario'];
    $nombreCompleto = $_POST['nombreCompleto'];
    // $telefono = $_POST['telefono'];
    // $correo = $_POST['correo'];
    // $usuario = $_POST['usuario'];
    // $contraseña = $_POST['contrasena'];
    // $rol= $_POST['rol'];
  
$usuarioRol = '';
    if (isset($_POST['usuarioRol'])) {
        $usuarioRol = "Activo";
    }else{
       $usuarioRol = "Inactivo";
    }

    $usuarioC = '';
    if (isset($_POST['usuarioC'])) {
        $usuarioC = "Activo";
    }else{
        $usuarioC = "Inactivo";
    }
    
    $usuarioR = '';
    if (isset($_POST['usuarioR'])) {
        $usuarioR = "Activo";
    }else{
        $usuarioR = "Inactivo";
    }

    $usuarioU = '';
    if (isset($_POST['usuarioU'])) {
        $usuarioU = "Activo";
    }else{
        $usuarioU = "Inactivo";
    }
    
    $usuarioD = '';
    if (isset($_POST['usuarioD'])) {
        $usuarioD = "Activo";
    }else{

        $usuarioD = "Inactivo";
    }

    $documentoRol = '';
    if (isset($_POST['documentoRol'])) {
        $documentoRol = "Activo";
    }else{

        $documentoRol ="Inactivo";
    }
    
    $documentoC = '';
    if (isset($_POST['documentoC'])) {
        $documentoC = "Activo";
    }else{

        $documentoC = "Inactivo";
    }

    $documentoA = '';
    if (isset($_POST['documentoA'])) {
        $documentoA = "Activo";
    }else{
        $documentoA = "Inactivo";

    }
     
    $documentoR = '';
    if (isset($_POST['documentoR'])) {
        $documentoR = "Activo";
    }else{
        $documentoR = "Inactivo";
    }
    
    $documentoU = '';
    if (isset($_POST['documentoU'])) {
        $documentoU = "Activo";
    }else{
        $documentoU ="Inactivo";
    }

    $documentoD = '';
    if (isset($_POST['documentoD'])) {
        $documentoD = "Activo";
    }else{

         $documentoD ="Inactivo";
    }
    
    $visitasRol = '';
    if (isset($_POST['visitasRol'])) {
        $visitasRol = "Activo";
    }else{

        $visitasRol ="Inactivo";
    }

    $visitasC = '';
    if (isset($_POST['visitasC'])) {
        $visitasC = "Activo";
    }else{

        $visitasC ="Inactivo";
    }

     $visitasA = '';
    if (isset($_POST['visitasA'])) {
        $visitasA = "Activo";
    }else{

        $visitasA ="Inactivo";
    }

    $visitasR = '';
    if (isset($_POST['visitasR'])) {
        $visitasR = "Activo";
    }else{
        $visitasR ="Inactivo";
    }

    $visitasU = '';
    if (isset($_POST['visitasU'])) {
        $visitasU = "Activo";
    }else{
        $visitasU ="Inactivo";
    }

    $visitasD = '';
    if (isset($_POST['visitasD'])) {
        $visitasD = "Activo";
    }else{
        $visitasD = "Inactivo";
    }
     
    $alumnoRol = '';
    if (isset($_POST['alumnoRol'])) {
        $alumnoRol = "Activo";
    }else{
        $alumnoRol = "Inactivo";
    }
    
    $alumnoC = '';
    if (isset($_POST['alumnoC'])) {
        $alumnoC = "Activo";
    }else{
        $alumnoC ="Inactivo";
    }
    
    $alumnoV = '';
    if (isset($_POST['alumnoV'])) {
        $alumnoV = "Activo";
    }else{
        $alumnoV ="Inactivo";
    }
    
    $alumnoR = '';
    if (isset($_POST['alumnoR'])) {
        $alumnoR = "Activo";
    }else{
        $alumnoR ="Inactivo";
    }

    $alumnoU = '';
    if (isset($_POST['alumnoU'])) {
        $alumnoU = "Activo";
    }else{
        $alumnoU ="Inactivo";
    }

    $alumnoD = '';
    if (isset($_POST['alumnoD'])) {

     
        $alumnoD ="Activo";
    }else{
         
         $alumnoD = 'Inactivo'; 
    }

       $actividadRol = '';
    if (isset($_POST['actividadRol'])) {

        $actividadRol = "Activo";
    }else{
        $actividadRol = "Inactivo";
    }
    
    $actividadC = '';
    if (isset($_POST['actividadC'])) {

        $actividadC = "Activo";
    }else{
        $actividadC ="Inactivo";
    }
    
    $actividadA = '';
    if (isset($_POST['actividadA'])) {
        $actividadA = "Activo";
    }else{
        $actividadA ="Inactivo";
    }
    
    $actividadR = '';
    if (isset($_POST['actividadR'])) {
        $actividadR = "Activo";
    }else{
        $actividadR ="Inactivo";
    }

    $actividadU = '';
    if (isset($_POST['actividadU'])) {
        $actividadU = "Activo";
    }else{
        $actividadU ="Inactivo";
    }

    $actividadD = '';
    if (isset($_POST['actividadD'])) {

     
        $actividadD ="Activo";
    }else{
         
         $actividadD = 'Inactivo'; 
    } 

    $permisoRol = '';
    if (isset($_POST['permisoRol'])) {
        $permisoRol = "Activo";
    }else{
       $permisoRol = "Inactivo";
    }

    $permisoC = '';
    if (isset($_POST['permisoC'])) {
        $permisoC = "Activo";
    }else{
        $permisoC = "Inactivo";
    }
    
    $permisoR = '';
    if (isset($_POST['permisoR'])) {
        $permisoR = "Activo";
    }else{
        $permisoR = "Inactivo";
    }

    $permisoU = '';
    if (isset($_POST['permisoU'])) {
        $permisoU = "Activo";
    }else{
        $permisoU = "Inactivo";
    }
    
    $permisoD = '';
    if (isset($_POST['permisoD'])) {
        $permisoD = "Activo";
    }else{

        $permisoD = "Inactivo";
    }

    
    $fechaCreacion = $_POST['fechaCreacion'];
    $creadoPor = $_POST['creadoPor'];
    $fechaModificacion = $_POST['fechaModificacion'];
    $modificadoPor = $_POST['modificadoPor'];
    $estatusUsuario = $_POST['estatusPermiso'];
    $comentarios = $_POST['comentarios'];

   


        $update = mysqli_query($mysqli, "UPDATE `permisos` SET 
          `nombrePermiso` ='$nombreCompleto', 
          `usuarioRol` ='$usuarioRol', 
          `usuarioC` ='$usuarioC',
          `usuarioR` ='$usuarioR', 
          `usuarioU` ='$usuarioU', 
          `usuarioD` ='$usuarioD',
          `documentosRol` ='$documentoRol', 
          `documentoC` ='$documentoC', 
          `documentoA` ='$documentoA', 
          `documentoR` ='$documentoR', 
          `documentoU` ='$documentoU',
          `documentoD` ='$documentoD', 
          `visitasRol` ='$visitasRol', 
          `visitasC` ='$visitasC',
          `visitasA` ='$visitasA', 
          `visitasR` ='$visitasR', 
          `visitasU` ='$visitasU',
          `visitasD` ='$visitasD', 
          `alumnoRol` ='$alumnoRol',
          `alumnoC` ='$alumnoC', 
          `alumnoV` ='$alumnoV',
          `alumnoR` ='$alumnoR', 
          `alumnoU` ='$alumnoU',
          `alumnoD` ='$alumnoD',
          `actividadRol` ='$actividadRol',
         `actividadC` ='$actividadC', 
          `actividadA` ='$actividadA',
          `actividadR` ='$actividadR', 
          `actividadU` ='$actividadU',
          `actividadD` ='$actividadD',
          `permisoRol` ='$permisoRol', 
          `permisoC` ='$permisoC',
          `permisoR` ='$permisoR', 
          `permisoU` ='$permisoU', 
          `permisoD` ='$permisoD',
          `fechaCreacion` ='$fechaCreacion',
          `creadoPor` ='$creadoPor', 
          `fechaModificacion` ='$fechaModificacion',
          `modificadoPor` ='$modificadoPor', 
          `estatusPermiso` ='$estatusUsuario',
          `comentarios` ='$comentarios'

       WHERE `idPermiso`='$idUsuario'");

        if($update){

   echo '<script>alert("El perfil ha sido actualizado con exito");</script>';
       echo "<script>location.href='mostrar_perfiles.php'</script>"; 
   
            }else{

    echo "<script>alert('Error, el perfil no ha sido actualizado con exito');</script>";
    echo "<script>location.href='actualizar_perfil.php?idUsuario=$_POST[idPermiso]'</script>"; 

            }

            /*




    $usuarioRol = $_POST['usuarioRol'];
    $usuarioC = $_POST['usuarioC'];
    $usuarioR = $_POST['usuarioR'];
    $usuarioU = $_POST['usuarioU'];
    $usuarioD = $_POST['usuarioD'];
    $documentoRol = $_POST['documentoRol'];
    $documentoC = $_POST['documentoC'];
    $documentoA = $_POST['documentoA'];
    $documentoR = $_POST['documentoR'];
    $documentoU = $_POST['documentoU'];
    $documentoD = $_POST['documentoD'];
    $visitasRol = $_POST['visitasRol'];
    $visitasC = $_POST['visitasC'];
    $visitasA = $_POST['visitasA'];
    $visitasR = $_POST['visitasR'];
    $visitasU = $_POST['visitasU'];
    $visitasD = $_POST['visitasD'];
    $alumnoRol = $_POST['alumnoRol'];
    $alumnoC = $_POST['alumnoC'];
    $alumnoV = $_POST['alumnoV'];
    $alumnoR = $_POST['alumnoR'];
    $alumnoU = $_POST['alumnoU'];
    $alumnoD = $_POST['alumnoD'];
    $actividadRol = $_POST['actividadRol'];
    $actividadC = $_POST['actividadC'];
    $actividadA = $_POST['actividadA'];
    $actividadR = $_POST['actividadR'];
    $actividadU = $_POST['actividadU'];
    $actividadD = $_POST['actividadD'];*/
       

  ?>





