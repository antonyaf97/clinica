<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Consultas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Consultas</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarConsulta">
          
          Agregar Consulta

        </button>
      

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>idPaciente</th>
           <th>Diagnostico</th>
           <th>Medicamento</th>
           <th>Acciones</th>
           

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $consultas = ControladorConsulta::ctrMostrarConsulta($item, $valor);

          foreach ($consultas as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>
                    <td>'.$value["idPaciente"].'</td>

                    <td>'.$value["Diagnostico"].'</td>

                    <td>'.$value["Medicamento"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarConsulta" data-toggle="modal" data-target="#modalEditarConsulta" idConsulta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarConsulta" idConsulta="'.$value["id"].'"><i class="fa fa-times"></i></button>

                      </div>  

                    </td>

                  </tr>';
          
            }

        ?>
   
        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CONSULTA
======================================-->

<div id="modalAgregarConsulta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">
 

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Consulta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumento" placeholder="Ingresar idPaciente" required>

              </div>

            </div>

           <!-- ENTRADA PARA EL DIAGNOSTICO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoDiagnostico" placeholder="Ingresar Diagnostico" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL MEDICAMENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoMedicamento" placeholder="Ingresar Medicamento" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Consulta</button>

        </div>

      </form>

      <?php

        $CrearConsulta = new ControladorConsulta();
        $CrearConsulta -> ctrCrearConsulta();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CONSULTA
======================================-->

<div id="modalEditarConsulta" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Consulta</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
                      <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="editarDocumento" id="editarDocumento" required>

              </div>

            </div>
            <!-- ENTRADA PARA EL DIAGNOSTICO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarDiagnostico" id="editarDiagnostico" required>
                <input type="hidden" id="idConsulta" name="idConsulta">
              </div>

            </div>

              <!-- ENTRADA PARA EL MEDICAMENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarMedicamento" id="editarMedicamento" required>
                <input type="hidden" id="idConsulta" name="idConsulta">
              </div>

            </div>
             
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Consulta</button>

        </div>

      </form>

      <?php

        $EditarConsulta = new ControladorConsulta();
        $EditarConsulta -> ctrEditarConsulta();

      ?>

    </div>

  </div>

</div>

    


<?php

  $EliminarConsulta = new ControladorConsulta();
  $EliminarConsulta -> ctrEliminarConsulta();

?>

