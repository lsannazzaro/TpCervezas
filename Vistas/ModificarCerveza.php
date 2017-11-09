<!DOCTYPE html>
<html>
<head>
  <title>Modificar Cerveza</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Modificar Cerveza</h2>
        <form method="POST" action="<?=FRONT?>TipoCerveza/Actualizar" class="form-signin">
            <div class="form-group">
            <label for="id" name="id" value= "<?php echo $id ?>" >Id Cerveza: <?php echo $id ?> </label>
            <input type="hidden" id="id" class="form-control form-format" value= "<?php echo $id ?>" name="id" required> 
            </div>
            <div class="form-group">
              <label for="Nombre">Nombre de la Cerveza:</label>
              <input type="text" id="NombreC" class="form-control form-format" value= "<?php echo $nombre ?>" placeholder="Nombre" name="Nombre" required> 
            </div>
            <div class="form-group">
              <label for="Descripcion">Descripcion:</label>
              <input type="text" id="DescripcionC" class="form-control form-format" value= "<?php echo $descripcion ?>" placeholder="Descripcion" name="Descripcion" required>
            </div>
            <div class="form-group">
              <label for="Precio">Precio por Litro:</label>
              <input type="text" id="PrecioC" class="form-control form-format" value= "<?php echo $precio ?>" placeholder="Precio" name="Precio" required>
            </div>
              <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Modificar">
               Modificar
             </button>
          </form>
           <form method="POST" action="<?=FRONT?>TipoCerveza/Login" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Volver">
             Volver
           </button>
         
        </form>
      </div>  
    </div>
  </div>
</body>