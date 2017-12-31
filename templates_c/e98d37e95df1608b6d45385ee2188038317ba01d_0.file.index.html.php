<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 09:45:42
  from 'C:\xampp2\htdocs\IMC\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a48a3b69e2613_25121126',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98d37e95df1608b6d45385ee2188038317ba01d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\index.html',
      1 => 1514709941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/imc.html' => 1,
    'file:sections/enlaces.html' => 1,
    'file:sections/slider.html' => 1,
    'file:sections/datos.html' => 1,
  ),
),false)) {
function content_5a48a3b69e2613_25121126 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13309401705a48a3b69d5593_63794444', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17267025705a48a3b69d74b1_14610806', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "template/document.html");
}
/* {block 'title'} */
class Block_13309401705a48a3b69d5593_63794444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13309401705a48a3b69d5593_63794444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PESOTIPS.COM CALCULADORA IMC<?php
}
}
/* {/block 'title'} */
/* {block 'contenido'} */
class Block_17267025705a48a3b69d74b1_14610806 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_17267025705a48a3b69d74b1_14610806',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<!-- CONTENEDOR PRINCIPAL -->
<div class="container">
	<div class="row">
		<!-- SECCION IZQUIERDA -->
		<div class="col-md-4">
			<div class="col-md-12">
				 <?php $_smarty_tpl->_subTemplateRender('file:sections/imc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
			<!-- SECCION ENLACES  -->
			<div class="col-md-12">
				 <?php $_smarty_tpl->_subTemplateRender('file:sections/enlaces.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		</div>
		<!-- SECCION DERECHA -->
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<?php $_smarty_tpl->_subTemplateRender('file:sections/slider.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					 <?php $_smarty_tpl->_subTemplateRender('file:sections/datos.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'contenido'} */
}
