<?php
/* Smarty version 3.1.28, created on 2017-02-15 00:16:48
  from "/var/www/html/IMC/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58a3f2509c7213_75981281',
  'file_dependency' => 
  array (
    '4d14852e2bcbaf6254824ec9f3d8caadd70f0076' => 
    array (
      0 => '/var/www/html/IMC/templates/index.html',
      1 => 1487139405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58a3f2509c7213_75981281 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="div_index">
	<aside id="aside_left">
		<br />		
		<p> <center><h2 ><mark>IMC</mark></h2></center></p> <br>
		<p>El índice de masa corporal (IMC) es una medida de asociación entre la masa y la talla de un individuo ideada por el estadístico belga Adolphe Quetelet, por lo que también se conoce como índice de Quetelet.
Hay que destacar que, no se pueden aplicar los mismos valores de IMC en  niños y adolescentes debido a su constante crecimiento de estatura y desarrollo corporal, por lo que se obtiene un IMC respecto a su edad y sexo.
Por lo que primero deberá primero contar con la fecha de nacimiento y de medición para obtener la edad calculada y así ser más precisos al categorizar a éste grupo de edad.
Después se Calculará el IMC con la misma fórmula que para el adulto, después de calcularse el IMC para este grupo de edad, el valor del IMC se comparará en tablas de crecimiento del CDC para el IMC por edad tanto para niños y niñas respectivamente para obtener la categoría del percentil. Dichos percentiles son una medida de disperciòn que se utiliza con más frecuencia para evaluar el tamaño y los patrones de crecimiento de cada niño en los Estados Unidos, debido a que son menos susceptibles a presentar valores extremos y por lo tanto errores en los rangos de valores. El percentil indica la posición relativa del número del IMC del niño entre niños del mismo sexo y edad. Las tablas de crecimiento muestran las categorías del nivel de peso que se usan con niños y adolescentes (bajo peso, peso saludable, sobrepeso y obeso).</p>
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
						<br /> <br /><br /> <br />																			   </form>
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
					</p>											
					<br />				
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
          MÁS INFORMACIÓN
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <a href="">ENLACE 1</a>      
      </div>
      <div class="panel-body">
        <a href="">ENLACE 1</a>      
      </div>
      <div class="panel-body">
        <a href="">ENLACE 1</a>      
      </div>
      <div class="panel-body">
        <a href="">ENLACE 1</a>      
      </div>
      <div class="panel-body">
        <a href="">ENLACE 1</a>      
      </div>
    </div>
  </div>
  
  
</div>
	</div>
	


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
