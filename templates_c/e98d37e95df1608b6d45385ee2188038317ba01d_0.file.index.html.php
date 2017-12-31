<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 07:51:35
  from 'C:\xampp2\htdocs\IMC\templates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4888f7d1b130_01577752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98d37e95df1608b6d45385ee2188038317ba01d' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\index.html',
      1 => 1514703071,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:imc.html' => 1,
    'file:enlaces.html' => 1,
    'file:slider.html' => 1,
    'file:datos.html' => 1,
  ),
),false)) {
function content_5a4888f7d1b130_01577752 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19228302475a4888f7d02e80_57197080', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8749004965a4888f7d05ff5_21065546', 'contenido');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "document.html");
}
/* {block 'title'} */
class Block_19228302475a4888f7d02e80_57197080 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19228302475a4888f7d02e80_57197080',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PESOTIPS.COM CALCULADORA IMC<?php
}
}
/* {/block 'title'} */
/* {block 'contenido'} */
class Block_8749004965a4888f7d05ff5_21065546 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_8749004965a4888f7d05ff5_21065546',
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
				 <?php $_smarty_tpl->_subTemplateRender('file:imc.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
			<!-- SECCION ENLACES  -->
			<div class="col-md-12">
				 <?php $_smarty_tpl->_subTemplateRender('file:enlaces.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		</div>
		<!-- SECCION DERECHA -->
		<div class="col-md-8">
			<div class="col-md-12">
				 <?php $_smarty_tpl->_subTemplateRender('file:slider.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>

			<div class="col-md-12">
				 <?php $_smarty_tpl->_subTemplateRender('file:datos.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			</div>
		</div>
	</div>
</div>
<?php
}
}
/* {/block 'contenido'} */
}
