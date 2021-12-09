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
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         <!--   <div class="col-sm-6">
            <h1>Tabla usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>-->
        </div>
      </div> 
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div  class="card card-success" >
              <div class="card-header">
                <h3 class="card-title">Crear rol usuario</h3>
              </div>
              <!-- /.card-header -->
              <?php

    require("conexion.php");

    if(isset($_POST['input'])){

    //$id = $_POST['id'];
    //$idUsuario = $_POST['idUsuario'];
    $nombreCompleto = $_POST['nombreCompleto'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $rol= $_POST['rol'];
    // $usuarioRol = $_POST['usuarioRol'];
    // $usuarioC = $_POST['usuarioC'];
    // $usuarioR = $_POST['usuarioR'];
    // $usuarioU = $_POST['usuarioU'];
    // $usuarioD = $_POST['usuarioD'];
    // $documentoRol = $_POST['documentoRol'];
    // $documentoC = $_POST['documentoC'];
    // $documentoA = $_POST['documentoA'];
    // $documentoR = $_POST['documentoR'];
    // $documentoU = $_POST['documentoU'];
    // $documentoD = $_POST['documentoD'];
    // $visitasRol = $_POST['visitasRol'];
    // $visitasC = $_POST['visitasC'];
    // $visitasR = $_POST['visitasR'];
    // $visitasA = $_POST['visitasA'];
    // $visitasU = $_POST['visitasU'];
    // $visitasD = $_POST['visitasD'];
    // $alumnoRol = $_POST['alumnoRol'];
    // $alumnoC = $_POST['alumnoC'];
    // $alumnoV = $_POST['alumnoV'];
    // $alumnoR = $_POST['alumnoR'];
    // $alumnoU = $_POST['alumnoU'];
    // $alumnoD = $_POST['alumnoD'];
    // $actividadRol = $_POST['actividadRol'];
    // $actividadC = $_POST['actividadC'];
    // $actividadA = $_POST['actividadA'];
    // $actividadR = $_POST['actividadR'];
    // $actividadU = $_POST['actividadU'];
    // $actividadD = $_POST['actividadD'];
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
    $fechaCreacion = $_POST['fechaCreacion'];
    $creadoPor = $_POST['creadoPor'];
    $fechaModificacion = $_POST['fechaModificacion'];
    $modificadoPor = $_POST['modificadoPor'];
    $estatusUsuario = $_POST['estatusUsuario'];
    $comentarios = $_POST['comentarios'];



    $insertar =$mysqli->query("INSERT INTO usuarios VALUES('','$nombreCompleto','$telefono','$correo','$usuario', '$contraseña', '$rol', '$usuarioRol', '$usuarioC', '$usuarioR', '$usuarioU', '$usuarioD', '$documentoRol', '$documentoC', '$documentoA', '$documentoR', '$documentoU', '$documentoD', '$visitasRol', '$visitasC', '$visitasA', '$visitasR', '$visitasU', '$visitasD', '$alumnoRol', '$alumnoC', '$alumnoV', '$alumnoR', '$alumnoU', '$alumnoD', '$actividadRol', '$actividadC', '$actividadA', '$actividadR', '$actividadU', '$actividadD', '$fechaCreacion', '$creadoPor', '$fechaModificacion', '$modificadoPor', '$estatusUsuario', '$comentarios' )");
   
   if($insertar){
                            echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Bien hecho, los datos han sido agregados correctamente. </div>';
                            echo "<script>location.href='mostrar_usuarios.php'</script>"; 

                            
                        }else{
                            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Error, no se pudo registrar los datos.</div>';

                            

                        }
    

}
    ?>
            
            
              <form name="form1" id="form1" class="form-horizontal row-fluid" action="crear_usuario.php" method="POST" >
                <div class="card-body">
                 <!--
                  <div class="form-group">
                      <label   for="idUsuario">Cliente</label>
                      <div class="controls">
                        <select style="text-transform:uppercase;" name="idUsuario" id="idUsuario" required>
                                    <?php
                                         $insertar =$mysqli->query("SELECT idUsuario, nombreUsuario FROM usuarios");
                                        while($personal = mysqli_fetch_array($insertar))
                                        {
                                    ?>
                                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                                    <option value="<?php echo $personal['idUsuario']?>"><?php echo $personal['nombreUsuario']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                      </div>
                    </div>

                      -->
                  <div class="form-group">
                    <label for="nombreCompleto">Nombre completo Usuario</label>
                    <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" required>
                  </div>
                  <div class="form-group">
                      <label class="control-label" for="telefono">Número telefónico</label>
                      <div class="controls">
                        <input style="text-transform:uppercase;" name="telefono" id="telefono" class="form-control span8 tip" type="number"   required />
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="mail" class="form-control" name="correo" id="correo"  required>
                  </div>
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" required>
                  </div>
                   
                  
                 <div class="form-group">
                    <label for="contraseña">Contraseña</label> 
                      <div class="input-group mb-3">
                           <input type="password" class="form-control" name="contraseña" id="contraseña"  required>
                            <div type="button" class="input-group-append" onclick="verpassword()">
                             <span class="input-group-text"><i class="fas fa-eye"></i></span>
                             </div>
                     </div>
                 </div>
              
                   <div class="form-group">
                    <label for="estatusUsuario">Estatus usuario</label>
                        <select class="form-control" name="estatusUsuario" id="estatusUsuario" required>
                            <option selected readonly  style="display:none;"></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option> 
                        </select>
                   </div>
                    <div class="form-group">
                      <label for="comentarios">Comentarios</label>
                        <textarea name="comentarios" id="comentarios" rows="4" cols="80"  class="form-control" required></textarea>
                    </div>

              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Permisos usuario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"><!-- checkbox -->
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioRol" id="usuarioRol" value="Activo">
                          <label for="usuarioRol" class="custom-control-label">Usuarios</label>
                        </div><hr>
                      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioC" id="usuarioC" value="Activo">
                          <label for="usuarioC" class="custom-control-label">Crear usuarios</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioR" id="usuarioR" value="Activo">
                          <label for="usuarioR" class="custom-control-label">Ver usuarios</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioU" id="usuarioU" value="Activo">
                          <label for="usuarioU" class="custom-control-label">Modificar usuarios</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioD" id="usuarioD" value="Activo">
                          <label for="usuarioD" class="custom-control-label">Eliminar usuarios</label>
                        </div> 

                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoRol" id="documentoRol" value="Activo">
                          <label for="documentoRol" class="custom-control-label">Documentos a solicitar</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoC" id="documentoC" value="Activo">
                          <label for="documentoC" class="custom-control-label">Crear documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoA" id="documentoA" value="Activo">
                          <label for="documentoA" class="custom-control-label">Archivar documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoR" id="documentoR" value="Activo">
                          <label for="documentoR" class="custom-control-label">Ver documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoU" id="documentoU" value="Activo">
                          <label for="documentoU" class="custom-control-label">Modificar documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoD" id="documentoD" value="Activo">
                          <label for="documentoD" class="custom-control-label">Eliminar documentos</label>
                        </div>

                      </div>
                    </div>
                  </div><hr>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <!-- checkbox -->
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasRol" id="visitasRol" value="Activo">
                          <label for="visitasRol" class="custom-control-label">Formularios visitas académicas</label>
                        </div><hr>
                      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasC" id="visitasC" value="Activo">
                          <label for="visitasC" class="custom-control-label">Crear visitas académicas</label>
                        </div>
                         <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasA" id="visitasA" value="Activo">
                          <label for="visitasA" class="custom-control-label">Archivar visitas académicas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasR" id="visitasR" value="Activo">
                          <label for="visitasR" class="custom-control-label">Ver visitas académicas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasU" id="visitasU" value="Activo">
                          <label for="visitasU" class="custom-control-label">Modificar visitas académicas</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasD" id="visitasD" value="Activo">
                          <label for="visitasD" class="custom-control-label">Eliminar visitas académicas</label>
                        </div>

                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoRol" id="alumnoRol" value="Activo">
                          <label for="alumnoRol" class="custom-control-label">Alumnos</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoC" id="alumnoC" value="Activo">
                          <label for="alumnoC" class="custom-control-label">Agregar alumnos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoV" id="alumnoV" value="Activo">
                          <label for="alumnoV" class="custom-control-label">Validar documentacion alumno</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoR" id="alumnoR" value="Activo">
                          <label for="alumnoR" class="custom-control-label">Ver alumnos activos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoU" id="alumnoU" value="Activo">
                          <label for="alumnoU" class="custom-control-label">Modificar alumnos activos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoD" id="alumnoD" value="Activo">
                          <label for="alumnoD" class="custom-control-label">Eliminar alumnos</label>
                        </div>

                      </div>
                    </div>
                  </div><hr>



                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"><!-- checkbox -->
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadRol" id="actividadRol" value="Activo">
                          <label for="actividadRol" class="custom-control-label">Actividades</label>
                        </div><hr>
                      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadC" id="actividadC" value="Activo">
                          <label for="actividadC" class="custom-control-label">Crear actividades</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadA" id="actividadA" value="Activo">
                          <label for="actividadA" class="custom-control-label">Archivar actividad</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadR" id="actividadR" value="Activo">
                          <label for="actividadR" class="custom-control-label">Ver actividades</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadU" id="actividadU" value="Activo">
                          <label for="actividadU" class="custom-control-label">Modificar actividades</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadD" id="actividadD" value="Activo">
                          <label for="actividadD" class="custom-control-label">Eliminar actividades</label>
                        </div> 

                        
                      </div>
                    </div>
                    <!-- <div class="col-sm-6">
                      
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoRol" id="documentoRol" value="Activo">
                          <label for="documentoRol" class="custom-control-label">Documentos a solicitar</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoC" id="documentoC" value="Activo">
                          <label for="documentoC" class="custom-control-label">Crear documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoA" id="documentoA" value="Activo">
                          <label for="documentoA" class="custom-control-label">Archivar</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoR" id="documentoR" value="Activo">
                          <label for="documentoR" class="custom-control-label">Ver documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoU" id="documentoU" value="Activo">
                          <label for="documentoU" class="custom-control-label">Modificar documentos</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoD" id="documentoD" value="Activo">
                          <label for="documentoD" class="custom-control-label">Eliminar documentos</label>
                        </div>

                      </div>
                    </div> -->
                  </div><hr>



               

              </div>
              <!-- /.card-body -->
            </div>


                 
                  <input type="text" class="form-control" name="rol" id="rol" value="Docente" hidden>
                  <?php
                  $fecha_actual= date("Y-m-d");
                  
                   ?>
                  <input type="date" class="form-control" name="fechaCreacion" id="fechaCreacion" value="<?php echo $fecha_actual?>" hidden>
                  <input type="text" class="form-control" name="creadoPor" id="creadoPor" value="<?php echo $nombreUsuario ?>" hidden>
                   <input type="text" class="form-control" name="modificadoPor" id="modificadoPor" value="" value="sin modificar" hidden>
                   <input type="date" class="form-control" name="fechaModificacion" id="fechaModificacion" value="0000-00-00" hidden>

              


                
                </div>
                <!-- /.card-body -->

               <div class="card-footer">
                      
                        <button type="submit" name="input" id="input" class="btn btn-sm btn-success">Crear</button>
                                               <a href="inicio.php" class="btn btn-sm btn-danger">Cancelar</a>
                    
                    </div>
              </form>
            </div>
            <!-- /.card -->
    <!-- /.content -->
        </div>
  <!-- /.content-wrapper -->
      </div>
   </div>
</section>
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  </div>
</div>
<!-- ./wrapper -->

<script>
  function verpassword(){
      var tipo = document.getElementById("contraseña");
      if(tipo.type == "password")
    {
          tipo.type = "text";
      }
    else
    {
          tipo.type = "password";
      }
  }
  </script>

  ...........................................................................................
  <?php 
  session_start();
  $nombreUsuario = $_SESSION['nombreCompletoUsuario'];

      if(@!$_SESSION['idUsuario']){
      header("location:index.php");

  }   require"conexion.php";
  

 ?>
<body class="hold-transition sidebar-mini">

 <div class="wrapper">

<?php require'plantilla.php'; 
require("conexion.php");

?>  
  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         <!--   <div class="col-sm-6">
            <h1>Tabla usuarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.php">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div>-->
        </div>
      </div> 
    </section> 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div  class="card card-success" >
              <div class="card-header">
                <h3 class="card-title">Crear rol usuario</h3>
              </div>








   <?php

      $id1 = intval($_GET['idUsuario']);
      $sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE idUsuario='$id1'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: mostrar_usuarios.php");
      }else{

        $row = mysqli_fetch_assoc($sql);

    $usuarioRol =  $row['usuarioRol'] ;
    $usuarioC =   $row['usuarioC'] ;
    $usuarioR =   $row['usuarioR'] ;
    $usuarioU =  $row['usuarioU'] ;
    $usuarioD =   $row['usuarioD'] ;
    $documentoRol = $row['documentosRol'] ;
    $documentoC =  $row['documentoC'] ;
    $documentoA =  $row['documentoA'] ;
    $documentoR =   $row['documentoR'] ;
    $documentoU =   $row['documentoU'] ;
    $documentoD =   $row['documentoD'] ;
    $visitasRol =  $row['visitasRol'] ;
    $visitasC =   $row['visitasC'] ;
    $visitasA =   $row['visitasA'] ;
    $visitasR =   $row['visitasR'] ;
    $visitasU =   $row['visitasU'] ;
    $visitasD =   $row['visitasD'] ;
    $alumnoRol =   $row['alumnoRol'] ;
    $alumnoC =   $row['alumnoC'] ;
    $alumnoV =  $row['alumnoV'] ;
    $alumnoR =   $row['alumnoR'] ;
    $alumnoU =   $row['alumnoU'] ;
    $alumnoD =  $row['alumnoD'] ;
    $actividadRol =   $row['actividadRol'] ;
    $actividadC =   $row['actividadC'] ;
    $actividadA =  $row['actividadA'] ;
    $actividadR =   $row['actividadR'] ;
    $actividadU =   $row['actividadU'] ;
    $actividadD =  $row['actividadD'] ;

      } 
      ?>   

     <!--name="form1" id="form1" class="form-horizontal row-fluid" action="update_usuarios.php" method="POST"
-->
           <form name="form1" id="form1" class="form-horizontal row-fluid" action="update_usuarios.php" method="POST">
                <div class="card-body">
                 <!--
                  <div class="form-group">
                      <label   for="idUsuario">Cliente</label>
                      <div class="controls">
                        <select style="text-transform:uppercase;" name="idUsuario" id="idUsuario" required>
                                    <?php
                                         $insertar =$mysqli->query("SELECT idUsuario, nombreUsuario FROM usuarios");
                                        while($personal = mysqli_fetch_array($insertar))
                                        {
                                    ?>
                                    <option value="0" style="display:none;"><label>Seleccionar</label></option>
                                    <option value="<?php echo $personal['idUsuario']?>"><?php echo $personal['nombreUsuario']?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                      </div>
                    </div>

                      -->
                  <div class="form-group">
                    <label for="nombreCompleto">Nombre completo Usuario</label>
                    <input type="text" class="form-control" name="nombreCompleto" id="nombreCompleto" value="<?php echo $row['nombreCompletoUsuario']; ?>"required>
                  </div>
                  <div class="control-group">
                      <label class="control-label" for="telefono">Número telefónico</label>
                      <div class="controls">
                        <input  name="telefono" id="telefono" class="form-control span8 tip" type="number"  value="<?php echo $row['telefono']; ?>" required />
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="mail" class="form-control" name="correo" id="correo" value="<?php echo $row['correo']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $row['usuario']; ?>"required>
                  </div>
                   
                  
                 <div class="form-group">
                    <label for="contrasena">Contraseña</label> 
                      <div class="input-group mb-3">
                           <input type="password" class="form-control" name="contrasena" id="contrasena"  value="<?php echo $row['contrasena']; ?>" required>
                            <div type="button" class="input-group-append" onclick="verpassword()">
                             <span class="input-group-text"><i class="fas fa-eye"></i></span>
                             </div>
                     </div>
                 </div>
               
                   <div class="form-group">
                    <label for="estatusUsuario">Estatus usuario</label>
                        <select class="form-control" name="estatusUsuario" id="estatusUsuario" required>
                            <option value="<?php echo $row['estatusUsuario']; ?>"><?php echo $row['estatusUsuario']; ?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option> 
                        </select>
                   </div>
                    <div class="form-group">
                      <label for="comentarios">Comentarios</label>
                        <textarea name="comentarios" id="comentarios" rows="4" cols="80"  class="form-control"  required><?php echo $row['comentarios']; ?></textarea>
                    </div> 
                           


              <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Permisos usuario</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        
                        <div class="custom-control custom-checkbox">
                           <input class="custom-control-input" type="checkbox" name="usuarioRol" id="usuarioRol" <?php if ($usuarioRol=="Activo") echo "checked"; ?> value="Activo" >
                          <label for="usuarioRol" class="custom-control-label">Usuarios</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioC" id="usuarioC" <?php if ($usuarioC=="Activo") echo "checked"; ?>  value="Activo">
                          <label for="usuarioC" class="custom-control-label">Crear usuarios</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioR" id="usuarioR" <?php if ($usuarioR=="Activo") echo "checked"; ?>  value="Activo">

                          <label for="usuarioR" class="custom-control-label">Ver usuarios</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioU" id="usuarioU" <?php if ($usuarioU=="Activo") echo "checked"; ?>  value="Activo">

                          <label for="usuarioU" class="custom-control-label">Modificar usuarios</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="usuarioD" id="usuarioD" <?php if ($usuarioD=="Activo") echo "checked"; ?>  value="Activo">

                          <label for="usuarioD" class="custom-control-label">Eliminar usuarios</label>
                        </div> 

                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoRol" id="documentoRol" <?php if ($documentoRol=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoRol" class="custom-control-label">Documentos a solicitar</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoC" id="documentoC" <?php if ($documentoC=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoC" class="custom-control-label">Crear documentos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoA" id="documentoA" <?php if ($documentoA=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoA" class="custom-control-label">Archivar</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoR" id="documentoR" <?php if ($documentoR=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoR" class="custom-control-label">Ver documentos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoU" id="documentoU" <?php if ($documentoU=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoU" class="custom-control-label">Modificar documentos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="documentoD" id="documentoD" <?php if ($documentoD=="Activo") echo "checked"; ?> value="Activo">

                          <label for="documentoD" class="custom-control-label">Eliminar documentos</label>
                        </div>

                      </div>
                    </div>
                  </div><hr>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <!-- checkbox -->
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasRol" id="visitasRol" <?php if ($visitasRol=="Activo") echo "checked"; ?> value="Activo">

                          <label for="visitasRol" class="custom-control-label">Formularios visitas académicas</label>
                        </div><hr>
                      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasC" id="visitasC" <?php if ($visitasC=="Activo") echo "checked"; ?> value="Activo">

                          <label for="visitasC" class="custom-control-label">Crear visitas académicas</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasA" id="visitasA" <?php if ($visitasA=="Activo") echo "checked"; ?> value="Activo">

                          <label for="visitasA" class="custom-control-label">Archivar visitas académicas</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasR" id="visitasR" <?php if ($visitasR=="Activo") echo "checked"; ?> value="Activo">

                          <label for="visitasR" class="custom-control-label">Ver visitas académicas</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasU" id="visitasU" <?php if ($visitasU=="Activo") echo "checked"; ?> value="Activo">
                          
                          <label for="visitasU" class="custom-control-label">Modificar visitas académicas</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="visitasD" id="visitasD" <?php if ($visitasD=="Activo") echo "checked"; ?> value="Activo">

                          <label for="visitasD" class="custom-control-label">Eliminar visitas académicas</label>
                        </div>

                        
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoRol" id="alumnoRol" <?php if ($alumnoRol=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoRol" class="custom-control-label">Alumnos</label>
                        </div><hr>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoC" id="alumnoC" <?php if ($alumnoC=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoC" class="custom-control-label">Agregar alumnos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoV" id="alumnoV" <?php if ($alumnoV=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoV" class="custom-control-label">Validar documentacion alumno</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoR" id="alumnoR" <?php if ($alumnoR=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoR" class="custom-control-label">Ver alumnos activos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoU" id="alumnoU" <?php if ($alumnoU=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoU" class="custom-control-label">Modificar alumnos activos</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="alumnoD" id="alumnoD" <?php if ($alumnoD=="Activo") echo "checked"; ?> value="Activo">

                          <label for="alumnoD" class="custom-control-label">Eliminar alumnos</label>
                        </div>

                      </div>
                    </div>
                  </div>
                 
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group"><!-- checkbox -->
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadRol" id="actividadRol" <?php if ($actividadRol=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadRol" class="custom-control-label">Actividades</label>
                        </div><hr>
                      
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadC" id="actividadC" <?php if ($actividadC=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadC" class="custom-control-label">Crear actividades</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadA" id="actividadA" <?php if ($actividadA=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadA" class="custom-control-label">Archivar actividad</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadR" id="actividadR" <?php if ($actividadR=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadR" class="custom-control-label">Ver actividades</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadU" id="actividadU" <?php if ($actividadU=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadU" class="custom-control-label">Modificar actividades</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" name="actividadD" id="actividadD" <?php if ($actividadD=="Activo") echo "checked"; ?> value="Activo">
                          <label for="actividadD" class="custom-control-label">Eliminar actividades</label>
                        </div> 

                        
                      </div>
                    </div>
                          


               

              </div>
              <!-- /.card-body -->
            </div>

                  
                  

                  <input type="text" class="form-control" name="rol" id="rol" value="Docente" hidden>
                  <?php
                  $fecha_actual= date("Y-m-d");
                   ?>
                  <input type="date" class="form-control" name="fechaCreacion" id="fechaCreacion" value="<?php echo $row['fechaCreacion']; ?>"  hidden>
                  <input type="text" class="form-control" name="idUsuario" id="idUsuario" value="<?php echo $id1 ?>" hidden>
                  <input type="text" class="form-control" name="modificadoPor" id="modificadoPor" value="<?php echo $nombreUsuario ?>" hidden>
                   <input type="text" class="form-control" name="creadoPor" id="creadoPor" value="<?php echo $row['creadoPor']; ?>" hidden>
                   <input type="date" class="form-control" name="fechaModificacion" id="fechaModificacion" value="<?php echo $fecha_actual?>" hidden>



                
                </div>
                <!-- /.card-body onclick="ActualizarUsuario();" -->

               <div class="card-footer">
                      
                        <div class="control-group">
                      <div class="controls">
                        <button type="submit" name="input" id="input" class="btn btn-sm btn-success" >Actualizar</button>

                                               <a href="mostrar_usuarios.php" class="btn btn-sm btn-warning">Cancelar</a>
                                               <a href="mostrar_usuarios.php" class="btn btn-sm btn-danger">Salir</a>
                      </div>
                    </div>
                    
                    </div>
              </form>
            </div>
            <!-- /.card -->
    <!-- /.content -->
        </div>
  <!-- /.content-wrapper -->
      </div>
   </div>
</section>
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  
  </div>
</div>
<!-- ./wrapper -->

<script>
  function verpassword(){
      var tipo = document.getElementById("contraseña");
      if(tipo.type == "password")
    {
          tipo.type = "text";
      }
    else
    {
          tipo.type = "password";
      }
  }
  </script>