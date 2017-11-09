<!DOCTYPE html>
<html>
<head>
  <title>Gestión de Cervezas</title>
</head>
<body>

  

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Agregar nueva Cerveza</h2>
        <form method="POST" action="<?=FRONT?>TipoCerveza/Nuevo" class="form-signin">
            <div class="form-group">
              <label for="Nombre">Nombre de la Cerveza:</label>
              <input type="text" id="inputNombreC" class="form-control form-format" placeholder="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
              <label for="Descripcion">Descripcion:</label>
              <input type="text" id="inputDescripcionC" class="form-control form-format" placeholder="Descripcion" name="Descripcion" required>
            </div>
            <div class="form-group">
              <label for="Precio">Precio por Litro:</label>
              <input type="text" id="inputPrecioC" class="form-control form-format" placeholder="Precio" name="Precio" required>
            </div>
              <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Agregar">
               Agregar
             </button>
          </form>
            <!--  <form method="POST" action="<?=FRONT?>TipoCerveza/VerCervezas" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="VerCervezas">
             Ver Cervezas
           </button> -->
         
        <!-- </form> -->
        <a class="btn  btn-shadow blue" href="<?=FRONT?>TipoCerveza/VerCervezas">Ver Cervezas</a>
        <a class="btn  btn-shadow blue" href="<?=FRONT?>TipoCerveza/borrarTodos">Borrar Todos</a>
        <!-- <form method="POST" action="/TipoCerveza/borrarTodos" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="borrarTodos">
            Borrar Todos
           </button>
         
        </form> -->
      </div>  
      <div class="col-md-6">
      <div class="info-bubble-color">
          <div class="text-padding">
            <h2 class="text-grey linear-margin">Tipos Disponibles</h2>
              <?php if($listadoC!=NULL); {?>

              <table class="table table-hover text-grey">
                <thead> 

                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio por Litro</th> 
                    <th>Eliminar</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($listadoC as $key => $value){ ?>
                    <tr>
                     <th><?php echo $listadoC[$key]->getId(); ?> </th>
                      <th><?php echo $listadoC[$key]->getNombre(); ?></th>
                      <th><?php echo $listadoC[$key]->getDescripcion(); ?></th>
                      <th><?php echo $listadoC[$key]->getPrecio(); ?></th>
                      <th><a class='btn' name='id' href='<?=FRONT?>TipoCerveza/Borrar/<?php echo $listadoC[$key]->getId();?>'>Borrar
                      </a></th>
                       <th><a class='btn' name='modi' href='<?=FRONT?>TipoCerveza/Modificar/
                        <?php echo $listadoC[$key]->getId();?>/
                        <?php echo $listadoC[$key]->getNombre();?>/
                        <?php echo $listadoC[$key]->getDescripcion();?>/
                        <?php echo $listadoC[$key]->getPrecio();?>'>Modificar
                      </a></th>
                    </tr> <?php } ?>
                  </tbody>
              </table>
              <?php 
        }
        ?>
              </div>
            </div>
          </div>
  </div>

</body>
</html>