<?php include 'header.php'; ?>
  <?php  $datos = cargar_contenido($_GET['id']); ?>
  <form class="pure-form pure-form-stacked" action="resultado_contenido.php" method="post" onsubmit="return false;">
    <fieldset>
      <legend>Contenido</legend>
     <input type="hidden" name="id" value="<?= $datos['id']?>" />

      <label for="type">Tipo</label>
      <select name="type" id="type" class="pure-input-1">
      <!--<option value="">Seleccionar</option>-->
      <?php $tipo = retornar_tipo_contenido(); ?>
      <?php while(is_array($tipo) && list($k, $v) = each($tipo) ): ?>
        <option value="<?= $k ?>" <?= ($k === $datos['tipo'] )? 'selected' : '' ?> ><?= $v ?></option>
      <?php endwhile; ?>
      </select>


      <label for="category" class="only-post">Categoría</label>
      <select name="category" id="type" class="pure-input-1">
      <!--<option value="">Seleccionar</option>-->
      <?php $tipo = retornar_tipo_categoria(); ?>
      <?php while(is_array($tipo) && list($k, $v) = each($tipo) ): ?>
        <option value="<?= $k ?>" <?= ($k === $datos['categoria'] )? 'selected' : '' ?> ><?= $v ?></option>
      <?php endwhile; ?>
      </select>

      <label for="title">Titulo</label>
      <input type="text" name="title" placeholder="Titulo" value="<?= $datos['titulo'] ?>" class="pure-input-1">
      <label for="title">URL</label>
      <input type="text" name="alias" value="<?= $datos['alias'] ?>" class="pure-input-1">
      <label for="title">Imagen Portada</label>
      <input type="text" name="urlimagen" value="<?= $datos['urlimagen'] ?>" class="pure-input-1">

      <label for="title">Resumen</label>
      <input type="text" name="resumen" placeholder="Resumen" value="<?= $datos['resumen'] ?>" class="pure-input-1">
      <label for="title">Direccion</label>
      <input type="text" name="direccion" placeholder="Direccion" value="<?= $datos['direccion'] ?>" class="pure-input-1">

      <label for="type">Contenido</label>
      <div class="adjoined-bottom">
      <div class="grid-container">
        <div class="grid-width-100">
          <div id="editor">
            <?= urldecode($datos['contenido']) ?>
          </div>
        </div>
      </div>
      </div>
      <input type="hidden" name="content" id="content">

      <button type="submit" id="send" class="pure-button pure-button-primary">Guardar</button>
    </fieldset>
</form>

<?php include 'footer.php'; ?>
