<?php
/* Smarty version 3.1.28, created on 2017-12-28 18:48:13
  from "C:\xampp2\htdocs\IMC\templates\index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5a452e5d678864_93310441',
  'file_dependency' => 
  array (
    '219d8a650ce8153387bab095103e24929334f816' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\index.html',
      1 => 1514410129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:document.html' => 1,
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a452e5d678864_93310441 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_9388903915a452e5d3a2250_70597716',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'header', array (
  0 => 'block_15199329405a452e5d3a5219_82997130',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'contenido', array (
  0 => 'block_20669987055a452e5d3a7204_86169514',
  1 => false,
  3 => 0,
  2 => 0,
));
?>


<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_13192156185a452e5d676eb1_08771390',
  1 => false,
  3 => 0,
  2 => 0,
));
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:document.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'title'}  file:index.html */
function block_9388903915a452e5d3a2250_70597716($_smarty_tpl, $_blockParentStack) {
?>
CALCULADORA IMC<?php
}
/* {/block 'title'} */
/* {block 'header'}  file:index.html */
function block_15199329405a452e5d3a5219_82997130($_smarty_tpl, $_blockParentStack) {
?>
 <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
/* {/block 'header'} */
/* {block 'contenido'}  file:index.html */
function block_20669987055a452e5d3a7204_86169514($_smarty_tpl, $_blockParentStack) {
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
/* {/block 'contenido'} */
/* {block 'footer'}  file:index.html */
function block_13192156185a452e5d676eb1_08771390($_smarty_tpl, $_blockParentStack) {
?>
 <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php
}
/* {/block 'footer'} */
}
