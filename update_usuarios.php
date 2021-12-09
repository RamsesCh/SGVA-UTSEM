<?php

require 'conexion.php';



    
    $idUsuario = $_POST['idUsuario'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contrasena'];
    $rol= $_POST['rol'];
    $estatusUsuario = $_POST['estatusUsuario'];
    $fechaCreacion = $_POST['fechaCreacion'];
    $creadoPor = $_POST['creadoPor'];
    $fechaModificacion = $_POST['fechaModificacion'];
    $modificadoPor = $_POST['modificadoPor'];
    $comentarios = $_POST['comentarios'];
    $idPermiso = $_POST['idPermiso'];
    $update_usuarios = "Usuarios";
    $Accion = "update";
   


        $update = mysqli_query($mysqli, "UPDATE usuarios SET 
          nombreCompletoUsuario ='$nombreCompleto',
          telefono ='$telefono', 
          correo ='$correo', 
          usuario ='$usuario', 
          contrasena ='$contraseña',
          rol = '$rol',
          estatusUsuario ='$estatusUsuario', 
          fechaCreacion ='$fechaCreacion',
          creadoPor ='$creadoPor', 
          fechaModificacion ='$fechaModificacion',
          modificadoPor ='$modificadoPor', 
          comentarios ='$comentarios',
          idPermiso = '$idPermiso'

       WHERE idUsuario='$idUsuario'");

        if($update){

    // $update = mysqli_query($mysqli, "INSERT INTO `tbl_log`(`idRegistro`, `idUsuario`, `modulo`, `accion`, `fecha`) VALUES ('',$idUsuario,'$update_usuarios','$Accion','$fechaModificacion')");

   echo '<script>alert("El usuaario ha sido actualizado con exito");</script>';

       echo "<script>location.href='mostrar_usuarios.php'</script>"; 
            }else{

    echo "<script>alert('Error, el usuaario no ha sido actualizado con exito');</script>";
    echo "<script>location.href='actualizar_usuario.php?idUsuario=$_POST[idUsuario]'</script>"; 

            }

           
       

  ?>





