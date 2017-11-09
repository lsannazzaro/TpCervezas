<!DOCTYPE html>
<html>
<head>
  <title>Tipos de Cervezas</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="info-bubble-color">
          <div class="text-padding">
            <h2 class="text-grey linear-margin">Tipos Disponibles</h2>
              <?php if($listadoC!=NULL){?>

              <table class="table table-hover text-grey">
                <thead> 

                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio por Litro</th> 
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  foreach($listadoC as $key => $value){     
                    ?>
                    <tr>
                      <th><?php echo $key; ?></th>
                      <th><?php echo $listadoC[$key]->getNombre(); ?></th>
                      <th><?php echo $listadoC[$key]->getDescripcion(); ?></th>
                      <th><?php echo $listadoC[$key]->getPrecio(); ?></th>
                      <th><!-- <form method="POST" action="<?=FRONT?>TipoCerveza/Cuales/" class="form-signin">
                      <button class="btn btn-md btn-shadow blue glyphicon-trash" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="VerCervezas">
                     </button>
         
                 </form> --></th>
                    </tr> <?php } ?>
                  </tbody>
              </table>
              <?php 
        }
        ?>
              </div>
            </div>
            <form method="POST" action="<?=FRONT?>TipoCerveza/login" class="form-signin">
            <button class="btn btn-md btn-shadow blue" type="submit" data-container="body" data-toggle="tooltip" data-placement="right" title="Volver">
             Volver
           </button>
          </div>
          