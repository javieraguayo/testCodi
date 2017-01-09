

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Listar</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registrar</a></li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
    <table class="table table-hover"><!-- estilo para que se vea correcta la lista-->
      <thead>
        <th>Marca</th>
        <th></th>
        <center>
        <th>Acciones</th>
        </center>
      </thead>
      </tbody>
        <?php foreach ($listMarca as $value) {?><!-- necesario para listar recorre los datos con un for-->
          <tr>
           
             <td><?php echo $value->nombre; ?></td>
             
             
             <td><!-- funcion editar y eliminar en el controlador concatena el id para usarlo-->
              <a href="<?php echo base_url('auto/edit')."/".$value->idmarca; ?>" title="Editar"><span class="glyphicon glyphicon-pencil"></span></a>
               <a href="<?php echo base_url('auto/delete')."/".$value->idmarca; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash"></span></a>
              
             </td>
          </tr>
       <?php }?>
      </tbody>
    </table>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
      <form method="POST" action="<?php echo base_url('auto/insert') ?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
   <select name=txtMarca class="form-control">
      <?php foreach ($selMarca as $value) {?><!-- se usar para traer el nombre del rol desde la bd-->
       <option value="<?php echo $value->idmarca ?>"><?php echo $value->nombre; ?></option>
      <?php }?>

   </select>
  </div>
  <div class="form-group"><!-- name necesario pasa usar los input-->
    <label for="exampleInputEmail1">Modelo</label>
    <input type="text" name="txtModelo" class="form-control" id="exampleInputEmail1" placeholder="Modelo ">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Patente</label>
    <input type="text" name="textPatente" class="form-control" id="exampleInputPassword1" placeholder="Patente">
  </div>
  


  <button type="submit" class="btn btn-default">Guardar</button>
</form>


    </div>

  </div>

</div>