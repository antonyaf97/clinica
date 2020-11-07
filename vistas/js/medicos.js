/*=============================================
EDITAR MEDICO
=============================================*/
$(".tablas").on("click", ".btnEditarMedico", function(){

  var idMedico = $(this).attr("idMedico");

  var datos = new FormData();
    datos.append("idMedico", idMedico);

    $.ajax({

      url:"ajax/medicos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
         $("#idMedico").val(respuesta["id"]);
         $("#editarNombre").val(respuesta["Nombre"]);
         $("#editarApellido").val(respuesta["Apellido"]);
         $("#editarEspecialidad").val(respuesta["Especialidad"]);
         $("#editarNumeroColegiado").val(respuesta["NumeroColegiado"]);
         $("#editarCargo").val(respuesta["Cargo"]);
         $("#editarObservaciones").val(respuesta["Observaciones"]);
           
    }

    })

})

/*=============================================
ELIMINAR CONSULTA
=============================================*/
$(".tablas").on("click", ".btnEliminarMedico", function(){

  var idMedico = $(this).attr("idMedico");
  
  swal({
        title: '¿Está seguro de borrar el medico?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar medico!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=medicos&idMedico="+idMedico;
        }

  })

})