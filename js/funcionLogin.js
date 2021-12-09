function Login(){
	var Username = document.getElementById('correo').value;
    var Password = document.getElementById('contrasena').value;
    var TipoUsuario = document.getElementById('tipo_usuario').value;

    var datos = "User="+Username+"&Pass="+Password+"&TipUsu="+TipoUsuario;
     console.log(datos);
    $.ajax({
    	url:'usuarioalta.php',
    	type:'POST',
    	data: datos
    })

    .done(function(res){
    	$('#respuesta').html(res);
    })

}



function tabLaPhp(matricula, nombre, apaterno, amaterno, sexo , desc_carrera, mail, desc_grado){

    var Datos = "Matricula="+matricula+"&Nombre="+nombre+"&Apaterno="+apaterno+"&Amaterno="+amaterno+"&Sexo="+sexo+"&Desc_carera="+desc_carrera+"&Email="+mail+"&Desc_grado="+desc_grado;
    $.ajax({
        url: 'agregar_alumnosUno.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP2').html(res);        
    })
}

// $("#imagen").change(function(){
//     $("button").prop("disabled", this.files.length == 0);
// });


// function Cargar(nombre,idDocumento,idAlumno){

//  var ejemplo = [];
 
//      var file = document.forms['formImg']['imagen'].files[0];
 
     
    
//   var imgName =file.name;
     
//      var Datos = "Nombre="+nombre+"&IdDocumento="+idDocumento+"&IdAlumno="+idAlumno+"&ImgName="+imgName;

//      console.log(Datos);
// $.ajax({
//         url: 'cargarImgAlumno.php',
//         type: 'POST',
//         data: Datos,
//     })
//     .done(function(res){
//         $('#respuesta').html(res);        
//     })

//  }

function Cargar(id){


let parametros = new FormData($("#formImg"+id)[0]);



console.log(parametros);



$.ajax({
        url: 'cargarImgAlumno.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(response){


          $('#respuesta').html(response);

         // location.reload();

          // document.getElementById("formImg").reset();
         
        }

      });

 }

 function visitaCargar(){


let parametros = new FormData($("#visita")[0]);



console.log(parametros);



$.ajax({
        url: 'form_visitas.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(response){


          $('#respuesta').html(response);

         // location.reload();

          // document.getElementById("formImg").reset();
         
        }

      });

 }



 function save_form_vist(){


let parametros = new FormData($("#visita")[0]);



console.log(parametros);



$.ajax({
        url: 'save_form_vist.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(response){


          $('#respuesta').html(response);

         // location.reload();

          // document.getElementById("formImg").reset();
         
        }

      });

 }

 function Comentar(id){


let parametros = new FormData($("#formImg"+id)[0]);


$.ajax({
        url: 'comentarios.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(response){


          $('#respuesta').html(response);

          location.reload();

          // document.getElementById("formImg").reset();
         
        }

      });

 }

 function CargarDoc(){
let parametros = new FormData($("#formImg")[0]);

console.log(parametros);



$.ajax({
        url: 'cargarImgAlumnos.php',
        type: 'POST',
        data: parametros,
        contentType: false,
        processData: false,
        beforesend: function(){

        },
        success: function(response){


          $('#respuesta').html(response);
         
        }

      });

 }



          // $.each(parametros,function(indice,id) {
          //   console.log('Indice es ' + indice + ' y id es: ' + id);
          //   var fila = $("#id" + id).remove(); //Oculto las filas eliminadas
          //   console.log(fila);
          // });

 // 
// ejemplo.push(
     //      {

     //        Nombre: nombre,
     //        IdDocumento:  idDocumento,
     //        IdAlumno:  idAlumno

     //      }
     //                 );
     //console.log(ejemplo);
        
        // var datos = {datos:ejemplo};

        // console.log(ejemplo);
     
     //var datos = new FormData();

    // console.log(datos.append('file',$("input[name=imagen]")[0].files[0]));
    //  console.log(datos.append('Nombre', nombre));
    //  console.log(datos.append('IdDocumento', idDocumento));
    //  console.log(datos.append('IdAlumno', idAlumno));

     //console.log(datos);
// //file.name == "photo.png"
// //file.type == "image/png"
// //file.size == 300821
    
function actDes(idArchivo, estatusArchivo){



    var Datos = "idArchivo="+idArchivo+"&estatusArchivo="+estatusArchivo;

    $.ajax({
        url: 'archivar_Desarchivar.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){

  location.reload();
     

        $('#respu').html(res);        
    })
}


function actualizarDoc(id){

    var Datos = "idDocumento="+id;
    $.ajax({
        url: 'actualizar_formilario_documentos.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){

        $('#respuestaPHP3').html(res);        
    })
}

function ArchivarDoc(id){

    var Datos = "idDocumento="+id;
    $.ajax({
        url: 'archivar_formulario_documentos.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP4').html(res);        
    })
}

function DesarchivarDoc(id){

    var Datos = "idDocumento="+id;
    $.ajax({
        url: 'desarchivar_formulario_documentos.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP5').html(res);        
    })
}


function ArchivarVst(id){
alert("hola a todos los feos");
    var Datos = "idVisita="+id;
    $.ajax({
        url: 'archivar_formulario_visitas.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP9').html(res);        
    })
}

function DesarchivarVst(id){

    var Datos = "idVisita="+id;
    $.ajax({
        url: 'desarchivar_formulario_visitas.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP10').html(res);        
    })
}


function ArchivarAct(id){

    var Datos = "idActividad="+id;
    $.ajax({
        url: 'archivar_formulario_Act.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP6').html(res);        
    })
}

function DesarchivarAct(id){

    var Datos = "idActividad="+id;
    $.ajax({
        url: 'desarchivar_formulario_Act.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(res){
        $('#respuestaPHP7').html(res);        
    })
}


function ActualizarUsuario(){
          var idUsuario = document.getElementById('idUsuario');
          
          var nombreCompleto = document.getElementById('nombreCompleto').value;
          var telefono = document.getElementById('telefono').value;
          var correo = document.getElementById('correo').value;
          var usuario = document.getElementById('usuario').value;
          var contrasena = document.getElementById('contrasena').value;
          var rol = document.getElementById('rol').value; 
          var usuarioRol = document.getElementById('usuarioRol');
          console.log(usuarioRol.checked);
          var usuarioC = document.getElementById('usuarioC').value;
          var usuarioR = document.getElementById('usuarioR').value;
          var usuarioU = document.getElementById('usuarioU').value;
          var usuarioD = document.getElementById('usuarioD').value;
          var documentoRol = document.getElementById('documentoRol').value; 
          var documentoC = document.getElementById('documentoC').value;
          var documentoA = document.getElementById('documentoA').value; 
          var documentoR = document.getElementById('documentoR').value; 
          var documentoU = document.getElementById('documentoU').value;
          var documentoD = document.getElementById('documentoD').value; 
          var visitasRol = document.getElementById('visitasRol').value;
          var visitasC = document.getElementById('visitasC').value;
          var visitasR = document.getElementById('visitasR').value;
          var visitasU = document.getElementById('visitasU').value;
          var visitasD = document.getElementById('visitasD').value;
          var alumnoRol = document.getElementById('alumnoRol').value;
          var alumnoC = document.getElementById('alumnoC').value;
          var alumnoV= document.getElementById('alumnoV').value;
          var alumnoR = document.getElementById('alumnoR').value; 
          var alumnoU = document.getElementById('alumnoU').value;
          var alumnoD = document.getElementById('alumnoD').value;
          var actividadRol = document.getElementById('actividadRol').value;
          var actividadC = document.getElementById('actividadC').value;
          var actividadA = document.getElementById('actividadA').value;
          var actividadR = document.getElementById('actividadR').value; 
          var actividadU = document.getElementById('actividadU').value;
          var actividadD = document.getElementById('actividadD').value;

    var datos = "idUsuario="+idUsuario+"&nombreCompleto="+nombreCompleto+"&telefono="+telefono+"&correo="+correo+"&usuario="+usuario+"&contrasena="+contrasena+"&rol="+rol+"&usuarioRol="+usuarioRol+"&usuarioC="+usuarioC+"&usuarioR="+usuarioR+"&usuarioU="+usuarioU+"&usuarioD="+usuarioD+"&documentoRol="+documentoRol+"&documentoC="+documentoC+"&documentoA="+documentoA+"&documentoR="+documentoR+"&documentoU="+documentoU+"&documentoD="+documentoD+"&visitasRol="+visitasRol+"&visitasC="+visitasC+"&visitasR="+visitasR+"&visitasU="+visitasU+"&visitasD="+visitasD+"&alumnoRol="+alumnoRol+"&alumnoC="+alumnoC+"&alumnoV="+alumnoV+"&alumnoR="+alumnoR+"&alumnoU="+alumnoU+"&alumnoD="+alumnoD+"&actividadRol="+actividadRol+"&actividadC="+actividadC+"&actividadA="+actividadA+"&actividadR="+actividadR+"&actividadU="+actividadU+"&actividadD="+actividadD;
     console.log(datos);
    $.ajax({
        url:'update_usuarios.php',
        type:'POST',
        data: datos
    })

    .done(function(res){
    console.log(res);
       // $('#respuesta').html(res);
       if (res == "OK") {
        console.log("hola");
           // MostrarAlerta("Éxito!", "Datos actualizados con éxito", "success");
        } else {
            console.log("adios");
           // MostrarAlerta("Error!", res, "error");
        }
    })

}


function MostrarAlerta(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta
    );
}

function crear_actividad(){


  var nombreActividad = document.getElementById('nombreActividad').value;
    var idUsuario = document.getElementById('idUsuario').value;
     var estatusActividad = document.getElementById('estatusActividad').value;
    var fechaCreacionA = document.getElementById('fechaCreacionA').value;
    var input = document.getElementById('input').value;

    var datos = "nombreActividad="+nombreActividad+"&idUsuario="+idUsuario+"&estatusActividad="+estatusActividad+"&fechaCreacionA="+fechaCreacionA+"&input="+input;
     console.log(datos);
    $.ajax({
      url:'save_form_act.php',
      type:'POST',
      data: datos
    })

    .done(function(res){
      $('#res10').html(res);
    })


}

 
function actualizarAct(id){

  var Datos = "idActividad="+id;
    $.ajax({
        url: 'actualizar_formulario_Actividades.php',
        type: 'POST',
        data: Datos,
    })
    .done(function(respuest){
        $('#respuest').html(respuest);        
    })

}

 //$('#settings').each(function(link) { 

  //settings.onclick = function(){

   //window.open("actualizar_formulario_Actividades.php",'New Window'); 

 //  return false; }; });


 //function paginaActualizarAct() {
  //.ajax({
 //   url: 'actualizar_formulario_Actividades.php' 
 // })

 // .done(function(res){
 //  $('#respuesta').html(res);
 // })
//}