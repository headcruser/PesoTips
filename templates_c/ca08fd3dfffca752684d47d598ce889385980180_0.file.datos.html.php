<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 07:31:18
  from 'C:\xampp2\htdocs\IMC\templates\datos.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a48843616af54_59219490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca08fd3dfffca752684d47d598ce889385980180' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\datos.html',
      1 => 1514701875,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a48843616af54_59219490 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="row">
    <div class="col-md-12">
        <h2 class="text-center">INDICE DE MASA CORPORAL</h2>
        <div class="datos">
            <form class="formulario" action="index.php?c=imc" method="POST" enctype="multipart/form-data">
                <div class="col-xs-6 form-group">
                    <select name="sexo" class="form-control" required="true">
                        <option value="masculino">Masculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="sn">Sin especificar</option>
                    </select>
                </div>
                <div class="col-xs-6 form-group">
                    <select name="sistemametrico" class="form-control">
                        <option value="internacional">Internacional</option>
                        <option value="ingles">Ingles</option>
                    </select>
                </div>
                <div class="col-xs-6 form-group">
                    <input type="text" name="altura" class="form-control" placeholder="altura (cms/in)" required="true" />
                </div>
                <div class="col-xs-6 form-group">
                    <input type="text" name="peso" class="form-control" placeholder="peso (kg/lbs)" required="true" />
                </div>
                <div class="col-xs-6 form-group">
                    <input type="text" name="edad" class="form-control" placeholder="edad">
                </div>
                <div class="col-xs-6 form-group">
                    <input type="submit" name="calcular" class="btn btn-primary btn-sm" value="Calcular">
                </div>
            </form>
        </div>
        <!-- FIN FORMULARIO DATOS -->
    </div>

    <!-- RESULTADO -->
    <div class="col-md-12">
        <div class="resultado">
            <h2 class="text-center">RESULTADO</h2>
            <div class="col-md-12">
                <div class="row">
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
            <div class="col-md-12">
                 <?php if (isset($_smarty_tpl->tpl_vars['msj']->value)) {?>
                <h4>RECOMENDACION </h4>
                <p class="text-center"><?php echo $_smarty_tpl->tpl_vars['msj']->value;?>
</p>

                 Te recomendamos revisar la siguiente información.
                <br>
                <a href="https://www.youtube.com/watch?v=2_srZsMbzA8">enlace1</a>
                <br>
                <a href="https://www.youtube.com/watch?v=dnH2b3AmAuw">enlace2</a>
                <br>
                <a href="https://www.youtube.com/watch?v=6byaTlhGJXM">enlace3</a>
                 <?php }?>
                 <?php if (isset($_smarty_tpl->tpl_vars['msjnum']->value)) {
echo $_smarty_tpl->tpl_vars['msjnum']->value;
}?>
                <!--Aqui van los otros enlaces y recomendaciones-->
            </div>

        </div>
    </div>
</div><?php }
}
