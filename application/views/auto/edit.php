 <form method="POST" action="<?php echo base_url('auto/update') ?>">
<!-- llama al metodo del controlador-->

 <?php foreach ($datosMarca as $value) {?>
   <input type="hidden" name="idmarca" value="<?php echo $value->idmarca; ?>">
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="txtMarca" class="form-control" id="exampleInputEmail1" value=""<?php echo $value->nombre; ?>"><!-- trae los datos para editarlos value-->
  </div>
 
 <?php  }?>
 
  <button type="submit" class="btn btn-default">Actualizar Usuarios</button>
</form>