let form = document.querySelector('.form-register');
let progressOptions = document.querySelectorAll('.progressbar__option');

form.addEventListener('click', function(e) {
    let element = e.target;
    let isButtonNext = element.classList.contains('step__button--next');
    let isButtonBack = element.classList.contains('step__button--back');
    if (isButtonNext || isButtonBack) {
        let currentStep = document.getElementById('step-' + element.dataset.step);
        let jumpStep = document.getElementById('step-' + element.dataset.to_step);
        currentStep.addEventListener('animationend', function callback() {
            currentStep.classList.remove('active');
            jumpStep.classList.add('active');
            if (isButtonNext) {
                currentStep.classList.add('to-left');
                progressOptions[element.dataset.to_step - 1].classList.add('active');
            } else {
                jumpStep.classList.remove('to-left');
                progressOptions[element.dataset.step - 1].classList.remove('active');
            }
            currentStep.removeEventListener('animationend', callback);
        });
        currentStep.classList.add('inactive');
        jumpStep.classList.remove('inactive');
    }
});


var url = "formulario/controlador/visita.controlador.php";

function Guardar() {
    $.ajax({
        url: url,
        data: retornarDatos("GUARDAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        if (response == "OK") {
            MostrarAlerta("Éxito!", "Datos guardados con éxito", "success");
        } else {
            MostrarAlerta("Error!", response, "error");
        }
        //Limpiar();
    }).fail(function(response) {
        console.log(response);
    });
}

function retornarDatos(accion) {
    return {
        
           "accion": accion,
           //"idVisita": document.getElementById("idVisita").value,
           "tipoVisita": document.getElementById('tipoVisita').value,
           "areaResponsable": document.getElementById('areaResponsable').value,
           "objetivoVisita": document.getElementById('objetivoVisita').value,
           "fechaVisita": document.getElementById('fechaVisita').value,
           "docenteAcargo": document.getElementById('docenteAcargo').value,
           "Materia": document.getElementById('Materia').value,
           "lugar": document.getElementById('lugar').value,
           "descripcionActividad": document.getElementById('descripcionActividad').value,
           "carrera": document.getElementById('carrera').value,
           "grupo": document.getElementById('grupo').value,
           "cuatrimestre": document.getElementById('cuatrimestre').value,
           "nombreChofer": document.getElementById('nombreChofer').value,
           "sexoChofer": document.getElementById('sexoChofer').value,
           "numTelefonoC": document.getElementById('numTelefonoC').value,
           "licenciaChofer": document.getElementById('licenciaChofer').value,
           "seguroVehiculoC": document.getElementById('seguroVehiculoC').value,
           "tipoVehiculoC": document.getElementById('tipoVehiculoC').value,
           "alumnos": document.getElementById('alumnos').value,
           "estatusVisita": document.getElementById('estatusVisita').value,
           "imagenes": document.getElementById('add-new-photo').files[0], 
           "fechaCreacion": document.getElementById('fechaCreacion').value,
           "creadoPor": document.getElementById('creadoPor').value,
           "fechaModificacion": document.getElementById('fechaModificacion').value,
           "modificadoPor": document.getElementById('modificadoPor').value,
           "comentarios": document.getElementById('comentarios').value
    };
}

function Limpiar() {

     document.getElementById('tipoVisita').value = "";
     document.getElementById('areaResponsable').value = "";
     document.getElementById('objetivoVisita').value = "";
     document.getElementById('fechaVisita').value = "";     
     document.getElementById('docenteAcargo').value = "";
     document.getElementById('Materia').value = "";
     document.getElementById('lugar').value = "";
     document.getElementById('descripcionActividad').value = "";
     document.getElementById('carrera').value = "";
     document.getElementById('grupo').value = "";
     document.getElementById('cuatrimestre').value = "";
      document.getElementById('nombreChofer').value = "";
      document.getElementById('sexoChofer').value = "";
      document.getElementById('numTelefonoC').value = "";
      document.getElementById('licenciaChofer').value = "";
      document.getElementById('seguroVehiculoC').value = "";
      document.getElementById('tipoVehiculoC').value = "";
      document.getElementById('alumnos').value = "";
      document.getElementById('estatusVisita').value = "";
      document.getElementById('add-new-photo').value = "";
      document.getElementById('fechaCreacion').value = "";
      document.getElementById('creadoPor').value = "";      
      document.getElementById('fechaModificacion').value = ""; 
      document.getElementById('modificadoPor').value = "";
      document.getElementById('comentarios').value = "";
    //BloquearBotones(true);
}

function BloquearBotones(guardar) {
    if (guardar) {
        document.getElementById('guardar').disabled = false;
        document.getElementById('modificar').disabled = true;
    } else {
        document.getElementById('guardar').disabled = true;
        document.getElementById('modificar').disabled = false;
    }
}

function MostrarAlerta(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta
    );
}