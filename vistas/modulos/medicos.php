<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Medicos
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Medicos</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarMedico">
          
          Agregar Medico

        </button>
      

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Apellido</th>
           <th>Especialidad</th>
           <th>Numero Colegiado</th>
           <th>Cargo</th>
           <th>Observaciones</th>
           <th>Acciones</th>
           

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $medicos = ControladorMedico::ctrMostrarMedico($item, $valor);

          foreach ($medicos as $key => $value) {
            

            echo '<tr>

                    <td>'.($key+1).'</td>

                    <td>'.$value["Nombre"].'</td>

                    <td>'.$value["Apellido"].'</td>
                    
                    <td>'.$value["Especialidad"].'</td>

                    <td>'.$value["NumeroColegiado"].'</td>

                    <td>'.$value["Cargo"].'</td>

                    <td>'.$value["Observaciones"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarMedico" data-toggle="modal" data-target="#modalEditarMedico" idMedico="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                        <button class="btn btn-danger btnEliminarMedico" idMedico="'.$value["id"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR MEDICO
======================================-->

<div id="modalAgregarMedico" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">
 

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Medico</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar Nombre" required>

              </div>

            </div>

           <!-- ENTRADA PARA EL APELLIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoApellido" placeholder="Ingresar Apellido" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA ESPECIALIDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoEspecialidad" placeholder="Ingresar Especialidad" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL NUMERO COLEGIADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                 <input type="number" min="0" class="form-control input-lg" name="nuevoNumeroColegiado" placeholder="Ingresar Numero Colegiado" required>

              </div>

            </div>
  
  <!-- ENTRADA PARA EL CARGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCargo" placeholder="Ingresar Cargo" required>

              </div>

            </div>

             <!-- ENTRADA PARA LAS OBSERVACIONES-->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoObservaciones" placeholder="Ingresar Observaciones" required>

              </div>

            </div>
  
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Medico</button>

        </div>

      </form>

      <?php

        $CrearMedico = new ControladorMedico();
        $CrearMedico -> ctrCrearMedico();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR MEDICO
======================================-->

<div id="modalEditarMedico" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Medico</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">
                  
            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre" required>
                <input type="hidden" id="idMedico" name="idMedico">
              </div>

            </div>

              <!-- ENTRADA PARA EL APELLIDO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarApellido" id="editarApellido" required>
                <input type="hidden" id="idMedico" name="idMedico">
              </div>

            </div>
             <!-- ENTRADA PARA LA ESPECIALIDAD -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarEspecialidad" id="editarEspecialidad" required>
                <input type="hidden" id="idMedico" name="idMedico">
              </div>

            </div>

                <!-- ENTRADA PARA EL NUMERO COLEGIADO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="editarNumeroColegiado" id="editarNumeroColegiado" required>

              </div>

            </div>
             <!-- ENTRADA PARA EL CARGO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editaCargo" id="editarCargo" required>
                <input type="hidden" id="idMedico" name="idMedico">
              </div>

            </div>
             <!-- ENTRADA PARA OBSERVACIONES -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="editarObservaciones" id="editarObservaciones" required>
                <input type="hidden" id="idMedico" name="idMedico">
              </div>

            </div>
             
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Medico</button>

        </div>

      </form>

      <?php

        $EditarMedico = new ControladorMedico();
        $EditarMedico -> ctrEditarMedico();

      ?>

    </div>

  </div>

</div>

    


<?php

  $EliminarMedico = new ControladorMedico();
  $EliminarMedico -> ctrEliminarMedico();

?>

