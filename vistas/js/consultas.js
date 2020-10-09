/*=============================================
EDITAR CONSULTA
=============================================*/
$(".tablas").on("click", ".btnEditarConsulta", function(){

  var idConsulta = $(this).attr("idConsulta");

  var datos = new FormData();
    datos.append("idConsulta", idConsulta);

    $.ajax({

      url:"ajax/consultas.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
         $("#idConsulta").val(respuesta["id"]);
         $("#editarPaciente").val(respuesta["idPaciente"]);
         $("#editarDiagnostico").val(respuesta["Diagnostico"]);
         $("#editarMedicamento").val(respuesta["Medicamento"]);
           
    }

    })

})

/*=============================================
ELIMINAR CONSULTA
=============================================*/
$(".tablas").on("click", ".btnEliminarConsulta", function(){

  var idConsulta = $(this).attr("idConsulta");
  
  swal({
        title: '¿Está seguro de borrar la consulta?',
        text: "¡Si no lo está puede cancelar la acción!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: 'Si, borrar consulta!'
      }).then(function(result){
        if (result.value) {
          
            window.location = "index.php?ruta=consultas&idConsulta="+idConsulta;
        }

  })

})