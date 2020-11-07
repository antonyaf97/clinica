
  <div class="content-wrapper">

    <section class="content-header">

      <h1>

        Administar Usuarios



      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

        <li class="active">Administar Usuarios</li>

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
  
          <table class="table table-bordered table-striped dt-responsive tablas">
            
            <thead>
              
              <tr>
                
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Foto</th>
                <th>Rol</th>
                <th>Estado</th>
                <th>Ultimo Login</th>
                <th>Acciones</th>
              </tr>

            </thead>

            <tbody>
              
              <tr>
                <td>1</td>
                <td>Usuario Administrador</td>
                <td>admin</td>
                <td><img src="vistas/img/usuarios/default/user2.png" class="img-thumbnail" width="40px"></td>
                <td>Administrador</td>
                <td><button class="btn btn-success btn-xs">Activado</button></td>
                <td>30-07-2020 23:16:10</td>
                <td>
                  
                  <div>
                    
                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>

                </td>
                

              </tr>

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

              <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar Usuario" required>

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

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

              </select>

            </div>

          </div>

<!--=====================================================
  Entrada para subir foto
  ====================================================-->
         <div class="form-group">
            
            <div class="panel">SUBIR FOTO</div>

            <input type="file" id="nuevaFoto" name="nuevaFoto">

            <p class="help-block">Peso máximo de la foto 200 MB</p>

            <img src="vistas/img/usuarios/default/user2.png" class="img-thumbnail" width="100px">
        
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

    </form>

    </div>


  </div>

</div>