<?php
/* Smarty version 3.1.32-dev-38, created on 2018-01-01 01:09:56
  from 'C:\xampp2\htdocs\IMC\templates\sections\datos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a497c549326c4_39353449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d7b1fc5cab899a8c2a68ce477f4e65d0c901533' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\sections\\datos.html',
      1 => 1514765394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a497c549326c4_39353449 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row panel panel-default">
    <!-- SECCION FORMULARIO PARA EL USUARIO -->
    <div class="col-md-12 formulario">
        <h2 class="text-center titulo">INDICE DE MASA CORPORAL</h2>
            <form action="index.php?c=imc" method="POST" enctype="multipart/form-data">
                <div class="col-md-6 form-group">
                    <select name="sexo" class="form-control" required="true">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="sn">Sin especificar</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <select name="sistemametrico" class="form-control">
                        <option value="internacional">Internacional</option>
                        <option value="ingles">Ingles</option>
                    </select>
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="altura" class="form-control" placeholder="altura (cms/in)" required="true" />
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="peso" class="form-control" placeholder="peso (kg/lbs)" required="true" />
                </div>
                <div class="col-md-6 form-group">
                    <input type="text" name="edad" class="form-control" placeholder="edad">
                </div>
                <div class="col-md-6 form-group">
                    <input type="submit" name="calcular" class="btn boton col-md-12" value="Calcular">
                </div>
            </form>
    </div><!-- FIN FORMULARIO DATOS -->

    <!-- SECCION RESULTADOS -->
    <div class="col-md-12 resultado">
    <?php if (isset($_smarty_tpl->tpl_vars['resultado']->value)) {?>
        <h2 class="text-center titulo">RESULTADO</h2>
        <div class="col-md-12">
            <div class="row valor">
                <div class="col-md-4">
                    <label for="exampleInputName2">VALOR APROXIMADO:</label>
                </div>
                <div class="col-md-8">
                    <input type="text" name="resultado" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['resultado']->value)) {
echo $_smarty_tpl->tpl_vars['resultado']->value;
}?>" disabled="true">
                </div>
            </div>
        </div>
        <div class="col-md-12 recomendacion">
            <?php if (isset($_smarty_tpl->tpl_vars['msj']->value)) {?>
            <h4 class="subtitulo">RECOMENDACION </h4>
            <p class="text-justify"><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</p>

                Te recomendamos revisar la siguiente información.
            <br>
            <a href="https://www.youtube.com/watch?v=2_srZsMbzA8">enlace1</a>
            <br>
            <a href="https://www.youtube.com/watch?v=dnH2b3AmAuw">enlace2</a>
            <br>
            <a href="https://www.youtube.com/watch?v=6byaTlhGJXM">enlace3</a>
            <?php }?>
        </div>
    <?php } else { ?>
    <div class="col-md-12">
        <h2 class="text-center tituloImagen">CUIDA TU SALUD</h2>
        <img class="img-responsive img-thumbnail"
         src="<?php echo @constant('IMG');?>
sliderbanner/banner3.jpg"
         alt="Salud de la persona"
         height="50">
    </div>
     <?php }?>
    </div> <!-- FIN SECCION RESULTADOS -->
</div><!-- FIN RENGLON --><?php }
}
