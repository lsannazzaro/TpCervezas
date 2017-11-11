<!DOCTYPE html>
<html>
<head>
  <title>Gestión de Envases</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center">AGREGAR NUEVO ENVASE</h2>
         <hr class="my-4">
        <form method="POST" action="<?=FRONT?>TipoEnvase/Nuevo" class="form-signin">
            <div class="form-group">
              <label for="Nombre">NOMBRE:</label>
              <input type="text" id="inputNombreE" class="form-control form-format" placeholder="Nombre" name="Nombre" required>
            </div>
            <div class="form-group">
              <label for="Capacidad">CAPACIDAD:</label>
              <input type="text" id="inputCapacidadE" class="form-control form-format" placeholder="Capacidad" name="Capacidad" required>
            </div>
            <div class="form-group">
              <label for="Precio">COEFICIENTE:</label>
              <input type="text" id="inputCoeficienteE" class="form-control form-format" placeholder="Coeficiente" name="Coeficiente" required>
            </div>
              <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Agregar">
               Agregar
             </button>
          </form>
             <form method="POST" action="<?=FRONT?>TipoEnvase/vista" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="VerEnvases">
             Ver Envases
           </button>
         
        </form>
        <form method="POST" action="<?=FRONT?>TipoEnvase/borrarTodos" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="borrarTodos">
            Borrar Todos
           </button>
         
        </form>
      </div>  
      <div class="col-md-6">
      <div class="info-bubble-color">
          <div class="text-padding">
            <h2 class="text-center">Tipos Disponibles de Envases</h2>
             <hr class="my-4">
              <?php if($listadoE!=NULL);{?>

              <table class="table table-hover table-bordered text-center">
                <thead class="thead-dark">
                

                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Coeficiente</th> 
                    <th scope="col">Eliminar</th>
                    <th scope="col">Modificar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach($listadoE as $key => $value){     
                    ?>
                    <tr>
                      <th><?php echo $listadoE[$key]->getId(); ?></th>
                      <th><?php echo $listadoE[$key]->getNombre(); ?></th>
                      <th><?php echo $listadoE[$key]->getCapacidad(); ?></th>
                      <th><?php echo $listadoE[$key]->getCoeficiente(); ?></th>
                      <th><a class='btn' name='id' href='<?=FRONT?>TipoEnvase/Borrar/<?php echo $listadoE[$key]->getId();?>'>Borrar
                      </a></th>
                       <th><a class='btn' name='modi' href='<?=FRONT?>TipoEnvase/Modificar/
                        <?php echo $listadoE[$key]->getId();?>/
                        <?php echo $listadoE[$key]->getNombre();?>/
                        <?php echo $listadoE[$key]->getCapacidad();?>/
                        <?php echo $listadoE[$key]->getCoeficiente();?>'>Modificar
                      </a></th>
                
                    </tr> <?php } ?>
                  </tbody>
              </table>
              <?php  }  ?>
              </div>
            </div>
          </div>
  </div>

</body>
</html>