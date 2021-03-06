
   <div class="content-wrapper">

    <section class="content-header">

      <h1>

        Administar Personal



      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Administar Personal</li>

      </ol>

    </section>


    <section class="content">


      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

            Agregar Usuario
            
          </button>

        </div>

        <div class="box-body">
  
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
            
            <thead>
              
              <tr>
                
                <th style="width:10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Estado</th>
                <th>Ultimo Login</th>
                <th>Acciones</th>
              </tr>

            </thead>

            <tbody>
              
              <?php 

                  $item = null;
                  $valor = null;
                  $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                  foreach ($usuarios as $key => $value) {

                echo '     <tr>
                          <td>'.($key+1).'</td>
                          <td>'.$value["Nombre"].'</td>
                          <td>'.$value["Usuario"].'</td>';

  
                          

                        if($value["Estado"] !=0){

                          echo'<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                        }else{

                          echo'<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'"estadoUsuario="1">Desactivado</button></td>';

                        }


                      echo '<td>'.$value["Ultimo_Login"].'</td>

                           <td>
                                
                            <div>
                                  
                               <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>
                               
                               <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["Foto"].'" usuario="'.$value["Usuario"].'"><i class="fa fa-times"></i></button>

                              

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

<!--=====================================================
  Modal Agreagar Usuario
  ====================================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

<!--=====================================================
  Cabeza del Modal
  ====================================================-->



      <div class="modal-header" style="background: #3c8dbc; color:white">

        <button type="button" class="close" data-dismiss="modal">&times;</button>

        <h4 class="modal-title">Agregar Usuario</h4>

      </div>
<!--=====================================================
  Cuerpo del Modal
  ====================================================-->

      <div class="modal-body">

       <div class="box-body">

<!--=====================================================
  Entrada para Nombre
  ====================================================-->
         
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-user"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" required>

            </div>

          </div>

<!--=====================================================
  Entrada para Usuario
  ====================================================-->
         
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-key"></i></span>

              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" id="nuevoUsuario" required>

            </div>

          </div>

<!--=====================================================
  Entrada para Contraseña
  ====================================================-->
         
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>

              <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar Contraseña" required>

            </div>

          </div>

<!--=====================================================
  Entrada para Seleccionar Perfil
  ====================================================-->
         
          <div class="form-group">
            
            <div class="input-group">
              
              <span class="input-group-addon"><i class="fa fa-users"></i></span>

              <select class="form-control input-lg" name="nuevoPerfil">
                
                  <option value="">Seleccionar Perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Medico</option>

                  <option value="Vendedor">Enfermero</option>

              </select>

            </div>

          </div>


      </div>

<!--=====================================================
  Pie de Pagina del Modal
  ====================================================-->

      <div class="modal-footer">

        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

        <button type="submit" class="btn btn-primary">Guardar Usuario</button>

      </div>

      <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

      ?>


    </form>

    </div>


  </div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar usuario</h4>

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

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario" value="" readonly>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña">

                <input type="hidden" id="passwordActual" name="passwordActual">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarPerfil">
                  
                  <option value="" id="editarPerfil"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Medico</option>

                  <option value="Vendedor">Enfermero</option>

                </select>

              </div>

            </div>

          

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 
  
