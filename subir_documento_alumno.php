<?php
require 'head.php';
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
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Subir documentación</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Documentos a subir</label>
                        <select class="form-control" name="tipo_visita" id="" required>
                            <option value="0" style="display:none;"><label>Seleccionar</label></option>
                            <option value="local">Local</option>
                            <option value="externa">Externa</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nombre del documento a solicitar</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tipo de visita</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
  <!-- // BOTON MODAL AGREGAR USUARIO --> 


    <div class="modal  fullscreen-modal fade" id="modalAgregarUsuario" role="dialog">

      <div class="modal-dialog">

        <div class="modal-content">


<!--  // CABECERA MODAL -->  
        <form role="form" method="post"  enctype="multipart/form-data">  

      
          <div class="modal-header" style="background: #3c8dbc; color: white;">

            <h4 class="modal-title">Agregar usuario</h4>

            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>

        <!--  //Modal body  -->
          <div class="modal-body">
           
              <div class="box-body">

       <!--     //nombre -->
                <div class="form-group">
                  
                   <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                    <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>
                     

                   </div>

                </div>

              <!--  //next -->
                 <div class="form-group">
                  
                   <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="text" class="form-control input-lg"  name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" required>
                     

                   </div>

                </div>
             
                 <div class="form-group">
                  
                   <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>

                    <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" required>
                     

                   </div>

                </div>
                
                 <div class="form-group">
                  
                   <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                   <select  class="form-control input-lg" name="nuevoPerfil">
                     
                        <option value="">Selecionar perfil</option>

                        <option value="Administrador">Administrador</option>

                        <option value="Especial">Especial</option>

                        <option value="Vendedor">Vendedor</option>

                   </select>
                     

                   </div>

                </div>
                
                <!--<div class="form-group">

                  <div class="panel">Subir foto</div>

                  <input type="file"  class="nuevaFoto" name="nuevaFoto">

                  <p class="help-block">Peso maximo dela foto 200 MB</p>

                  <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="100px" >
                  
                   
                </div>-->
             
              </div>

          </div>

         <!-- //Modal footer -->
          <div class="modal-footer">

            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary pull-right">Agregar usuario</button>

          </div>

          </form>

        </div>

      </div>

    </div>
</div>
<!-- ./wrapper -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  }); 
</script> 

<?php
require 'footer.php';
?>