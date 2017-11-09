<!DOCTYPE html>
<html>
<head>
  <title>Gestión de Envases</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Agregar nuevo Envase</h2>
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
             <form method="POST" action="<?=FRONT?>TipoCerveza/VerCervezas" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="VerCervezas">
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
            <h2 class="text-grey linear-margin">Tipos Disponibles</h2>
              <?php if($listadoE!=NULL);{?>

              <table class="table table-hover text-grey">
                <thead> 

                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Coeficiente</th> 
                    <th>Eliminar</th>
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
                      <th><a class='btn' name='id' href='<?=FRONT?>TipoEnvase/Borrar/<?php echo $key; ?>'>Borrar Registro</a></th>
                      <!-- <form method="POST" action="<?=FRONT?>TipoCerveza/Cuales/" class="form-signin">
                      <button class="btn btn-md btn-shadow blue glyphicon-trash" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="VerCervezas">
                     </button>
         
                 </form> -->
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