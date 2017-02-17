<?php
/* Smarty version 3.1.28, created on 2017-02-13 20:16:09
  from "/var/www/html/autopartes/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_58a2686940b636_86071651',
  'file_dependency' => 
  array (
    '8d735857883134de5d8708cc44b0761e137c72c8' => 
    array (
      0 => '/var/www/html/autopartes/templates/index.html',
      1 => 1469111104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_58a2686940b636_86071651 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="div_index">
	<section id="seccion_index">	
	<br />
	<div class="slider">
		<ul>
			<li><img src="images/slider/img1.jpg" alt="Imagen no disponible"></li>
			<li><img src="images/slider/img2.jpg" alt="Imagen no disponible"></li>
			<li><img src="images/slider/img3.jpg" alt="Imagen no disponible"></li>
		</ul>	
	</div><br />
	<p>
		ES LA LINEA MÁS COMPLETA DE AUTOPARTES EN MÉXICO. OFRECE TODA LA COBERTURA PARA EL MERCADO DE MÉXICO CON PRODUCTOS DE LA MEJOR CALIDAD AL MEJOR PRECIO.
	</p>
	</section> 
	<aside id="aside_index">
		<br />
		<img src="images/aside/partes1.jpg" alt="Imagen no disponible">
		<p>Comercializar autopartes para transporte de carga ligera, importados y nacionales de todas las marcas satisfaciendo las necesidades del cliente, ofeciendo un amplio y exclusivo surtido de refacciones garantizadas brindando un servicio confiable tomando en cuenta las necesidades de cada uno de los clientes.</p>
	</aside>
	
</div>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
