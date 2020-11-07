/*=============================================
EDITAR PACIENTE
=============================================*/
$(".tablas").on("click", ".btnEditarPaciente", function(){

	var idPaciente = $(this).attr("idPaciente");

	var datos = new FormData();
    datos.append("idPaciente", idPaciente);

    $.ajax({

      url:"ajax/pacientes.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	 $("#idPaciente").val(respuesta["id"]);
         $("#editarDocumento").val(respuesta["Documento"]);
	       $("#editarPaciente").val(respuesta["Nombre"]);
	       $("#editarApellido").val(respuesta["Apellido"]);
	       $("#editarFechaNacimiento").val(respuesta["Fecha_Nacimiento"]);
	       $("#editarTipodesangre").val(respuesta["Tipo_de_Sangre"]);
	       $("#editarPadecimiento").val(respuesta["Padecimientos_Anteriores"]);
           
	  }

  	})

})

/*=============================================
ELIMINAR PACIENTE
=============================================*/
$(".tablas").on("click", ".btnEliminarPaciente", function(){

	var idPaciente = $(this).attr("idPaciente");
	
	swal({
        title: '¿Está seguro de borrar el paciente?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar paciente!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=pacientes&idPaciente="+idPaciente;
        }

  })

})