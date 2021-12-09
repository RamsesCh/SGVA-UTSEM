<?php
  session_start();
require("conexion.php");

require_once('./lib/nusoap.php');

$correo=$_POST['User'];
$contraseña=$_POST['Pass'];
$tipo_usuario=$_POST['TipUsu'];

if ($tipo_usuario =='Alumno') {
   $client = new nusoap_client("http://www.mi-escuelamx.com/ws/wsUTSEM/Datos.asmx?wsdl", 'wsdl', '', '', '', '');
    $err = $client->getError();
    if ($err) {
        echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    }
    $params = array(
        'lsMatricula' => $correo,
        'lsPassword'  => $contraseña
    );
    $result = $client->call('Login', $params);
   
    if ($result) {
        $data = $result['LoginResult']['diffgram'];
          
     
   
   if ($data==false) {
       
         echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, usuario o contrasela imcorrecta.</div>';
        
        
   } else{
      

       foreach ($data as $key => $value) {
       
       foreach ($value as $key => $value1) {
           
        $matricula = $value1['matricula'];
        $contrasena = $value1['contrasena'];
        
      
       if ($correo == $matricula) {
                    
          $_SESSION['idUsuario'] = $value1['matricula'];
          
           
            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos son correctos. </div>';

            //echo "<script>location.href='inicioUsuario.php'</script>";
            echo "<script>location.href='subir_doc_alumno.php'</script>";
                 
      
        
       }
       


       }

     }

   }
    
  
}

 }else if($tipo_usuario=='Docente'){

$consultar=$mysqli->query("SELECT * FROM usuarios INNER JOIN permisos  ON usuarios.idUsuario =permisos.idPermiso   WHERE usuario='$correo'");
if($dato=$consultar->fetch_array())
{
   if ($contraseña == $dato['contrasena'])
    {
            $_SESSION['idUsuario'] = $dato['idUsuario']; 
            $_SESSION['idPermiso'] = $dato['idPermiso'];
            $_SESSION['nombrePermiso'] = $dato['nombrePermiso'];
            $_SESSION['nombreCompletoUsuario'] = $dato['nombreCompletoUsuario'];
            $_SESSION['telefono'] = $dato['telefono'];
            $_SESSION['correo'] = $dato['correo']; 
            $_SESSION['contrasena'] = $dato['contrasena'];
            $_SESSION['rol'] = $dato['rol'];
            $_SESSION['usuarioRol'] = $dato['usuarioRol'];
            $_SESSION['usuarioC'] = $dato['usuarioC'];
            $_SESSION['usuarioR'] = $dato['usuarioR'];
            $_SESSION['usuarioU'] = $dato['usuarioU'];
            $_SESSION['usuarioD'] = $dato['usuarioD'];
            $_SESSION['documentosRol'] = $dato['documentosRol'];
            $_SESSION['documentoC'] = $dato['documentoC'];
            $_SESSION['documentoA'] = $dato['documentoA'];
            $_SESSION['documentoR'] = $dato['documentoR'];
            $_SESSION['documentoU'] = $dato['documentoU'];
            $_SESSION['documentoD'] = $dato['documentoD'];
            $_SESSION['visitasRol'] = $dato['visitasRol'];
            $_SESSION['visitasC'] = $dato['visitasC'];
            $_SESSION['visitasA'] = $dato['visitasA'];
            $_SESSION['visitasR'] = $dato['visitasR'];
            $_SESSION['visitasU'] = $dato['visitasU'];
            $_SESSION['visitasD'] = $dato['visitasD'];
            $_SESSION['alumnoRol'] = $dato['alumnoRol'];
            $_SESSION['alumnoC'] = $dato['alumnoC'];
            $_SESSION['alumnoV']= $dato['alumnoV'];
            $_SESSION['alumnoR'] = $dato['alumnoR'];
            $_SESSION['alumnoU'] = $dato['alumnoU'];
            $_SESSION['alumnoD'] = $dato['alumnoD'];
            $_SESSION['actividadRol'] = $dato['actividadRol'];
            $_SESSION['actividadC'] = $dato['actividadC'];
            $_SESSION['actividadA']= $dato['actividadA'];
            $_SESSION['actividadR'] = $dato['actividadR'];
            $_SESSION['actividadU'] = $dato['actividadU'];
            $_SESSION['actividadD'] = $dato['actividadD'];
            $_SESSION['permisoRol'] = $dato['permisoRol'];
            $_SESSION['permisoC'] = $dato['permisoC'];
            $_SESSION['permisoR']= $dato['permisoR'];
            $_SESSION['permisoU'] = $dato['permisoU'];
            $_SESSION['permisoD'] = $dato['permisoD'];
            // $_SESSION['actividadD'] = $dato['actividadD'];

            

       if ($dato['rol']=="Docente") 
        {

          echo "<script>location.href='inicio.php'</script>";
        }

        else
        {
      
         echo "<script>location.href='index.php'</script>";
        }

    }

    else
    {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, usuario o contrasela imcorrecta.</div>';
        echo "<script>location.href='index.php'</script>";
    }
}
else
{
         echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, usuario o contrasela imcorrecta.</div>';
        echo "<script>location.href='index.php'</script>";
        
}

}


?>
