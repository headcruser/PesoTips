<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-28 20:05:23
  from 'C:\xampp2\htdocs\IMC\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a454073b94cd2_01364858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98d37e95df1608b6d45385ee2188038317ba01d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\index.html',
      1 => 1514410129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a454073b94cd2_01364858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3520164345a4540735719b9_26335565', 'title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_679768575a4540735731a8_92279126', 'header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1925514635a4540736d38c1_49972943', 'contenido');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13673960605a454073b936d1_61841237', 'footer');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "document.html");
}
/* {block 'title'} */
class Block_3520164345a4540735719b9_26335565 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3520164345a4540735719b9_26335565',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
CALCULADORA IMC<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_679768575a4540735731a8_92279126 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_679768575a4540735731a8_92279126',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_1925514635a4540736d38c1_49972943 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_1925514635a4540736d38c1_49972943',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<div id="div_index">
			<aside id="aside_left">
				<br />
					<p> <center><h2 ><mark>IMC</mark></h2></center></p> <br>
					<p>El índice de masa corporal (IMC) es una medida de asociación entre la masa y la talla de un individuo ideada por el estadístico belga Adolphe Quetelet, por lo que también se conoce como índice de Quetelet.
					Hay que destacar que, no se pueden aplicar los mismos valores de IMC en  niños y adolescentes debido a su constante crecimiento de estatura y desarrollo corporal, por lo que se obtiene un IMC respecto a su edad y sexo.
					Por lo que primero deberá primero contar con la fecha de nacimiento y de medición para obtener la edad calculada y así ser más precisos al categorizar a éste grupo de edad.<a href="">Ver más</a>
					</p>
			</aside>
			<section id="seccion_index">
				<br /><br />
					<div id="contenido_index">
						<center><h2>INDICE DE MASA CORPORAL</h2></center>
						
						<div id="datos" >

							<form id="formulario" action="index.php?c=imc" method="POST" enctype="multipart/form-data">
								<div class="col-xs-6">
									<select name="sexo" class="form-control" required="true">
										<option value="masculino">Masculino</option>
										<option value="femenino">Femenino</option>
										<option value="sn">Sin especificar</option>
									</select>
								</div>
								<div class="col-xs-6">
									<select name="sistemametrico" class="form-control" >
										<option value="internacional">Internacional</option>
										<option value="ingles">Ingles</option>
									</select>
								</div>
								<br /> <br /><br /> <br />
								<div class="col-xs-6">
									<input type="text" name="altura" class="form-control" placeholder="altura (cms/in)" required="true" />
								</div>
								<div class="col-xs-6">
									<input type="text" name="peso" class="form-control" placeholder="peso (kg/lbs)" required="true" />
								</div>
								<br /> <br /><br /> <br />
								<div class="col-xs-6">
									<input type="text" name="edad" class="form-control" placeholder="edad">
								</div>
								<div class="col-xs-6">
									<input type="submit" name="calcular" class="btn btn-primary btn-sm" value="Calcular">
								</div>
								<br /> <br /><br /> <br />
								<div class="col-xs-6">
									<input type="text" name="sistema" class="form-control" disabled="true">
								</div>
								<div class="col-xs-6">
									<input type="text" name="resultado" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['resultado']->value)) {
echo $_smarty_tpl->tpl_vars['resultado']->value;
}?>" disabled="true">
								</div>
								<br /> <br /><br /> <br />													
							</form>

				</div>
						<div id="resultado">
							<img src="images/img1.jpg" class="img-responsive" alt="imagen no disponible">
							<br />
							<p>
								<?php if (isset($_smarty_tpl->tpl_vars['msj']->value)) {
echo $_smarty_tpl->tpl_vars['msj']->value;?>

									Te recomendamos revisar la siguiente información.
									<br>
									<a href="https://www.youtube.com/watch?v=2_srZsMbzA8">enlace1</a>
									<br>
									<a href="https://www.youtube.com/watch?v=dnH2b3AmAuw">enlace2</a>
									<br>
									<a href="https://www.youtube.com/watch?v=6byaTlhGJXM">enlace3</a>
									<br>
								<?php }?>
								<?php if (isset($_smarty_tpl->tpl_vars['msjnum']->value)) {
echo $_smarty_tpl->tpl_vars['msjnum']->value;
}?>
								<!--Aqui van los otros enlaces y recomendaciones-->
							</p><br />
						</div>
					</div>
			</section>

	<div class="container-fluid">
		<aside id="aside_right">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  				<div class="panel panel-default">
    				<div class="panel-heading" role="tab" id="headingOne">
      					<h4 class="panel-title">
        				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          				MÁS INFORMACIÓN</a></h4>
    				</div>

    				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      				<div class="panel-body">
	        				<a href="">Rutinas para principiantes</a>
	      				</div>

	      				<div class="panel-body">
	        				<a href="">¿Qué son las proteinas?</a>
	      				</div>
	      				<div class="panel-body">
	        				<a href="">¿Se puede adelgazar rápido?</a>
	      				</div>
	      				
	      				<div class="panel-body">
	        				<a href="">Mitos de la alimentación</a>      
	      				</div>

				      <div class="panel-body">
				        <a href="">¿Qué es el IMC?</a>
				      </div>
    			 	</div>
  				</div>
			</div>
		</div>
	<br /> 
<?php
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_13673960605a454073b936d1_61841237 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_13673960605a454073b936d1_61841237',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php
}
}
/* {/block 'footer'} */
}