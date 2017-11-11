<!DOCTYPE html>
<html>
<head>
  <title>Modificar Envase</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Modificar Envase</h2>
        <form method="POST" action="<?=FRONT?>TipoEnvase/Actualizar" class="form-signin">
            <div class="form-group">
            <label for="id" name="id" value= "<?php echo $id ?>">Id Envase: <?php echo $id ?> </label>
            <input type="hidden" id="id" class="form-control form-format" value= "<?php echo $id ?>" name="id" required> 
            </div>
            <div class="form-group">
              <label for="Nombre">Nombre del Envase:</label>
              <input type="text" id="Nombre" class="form-control form-format" value= "<?php echo $Nombre ?>" placeholder="Nombre" name="Nombre" required> 
            </div>
            <div class="form-group">
              <label for="Capacidad">Capacidad:</label>
              <input type="text" id="Capacidad" class="form-control form-format" value= "<?php echo $Capacidad ?>" placeholder="Capacidad" name="Capacidad" required>
            </div>
            <div class="form-group">
              <label for="Coeficiente">Coeficiente:</label>
              <input type="text" id="Coeficiente" class="form-control form-format" value= "<?php echo $Coeficiente ?>" placeholder="CoeficienteE" name="Coeficiente" required>
            </div>
              <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Modificar">
               Modificar
             </button>
          </form>
           <form method="POST" action="<?=FRONT?>TipoEnvase/gestionEnvases" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Volver">
             Volver
           </button>
         
        </form>
        <div class="alert alert-primary" role="alert">
            This is a primary alert—check it out!
          </div>
      </div>  
    </div>
  </div>
</body>