<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 07:52:26
  from 'C:\xampp2\htdocs\IMC\templates\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a48892a09a3b0_74195802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722acff4a3dcd05e2966077f9eb192bd0bf190c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\document.html',
      1 => 1514703137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a48892a09a3b0_74195802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_VENDOR');?>
bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('FONT');?>
font-awesome.min.css">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14541110015a48892a086320_15202274', 'estilos');
?>
 		<?php echo '<script'; ?>
 src="<?php echo @constant('JS_VENDOR');?>
jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo @constant('JS_VENDOR_BOOT');?>
bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15436791845a48892a08b3a0_35659389', 'js');
?>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6787455275a48892a08cbf7_53411096', 'title');
?>
</title>
</head>
<body >
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9208173705a48892a08e2a1_83238158', 'header');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9248956995a48892a096f86_71796453', 'contenido');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10051908525a48892a098444_08843930', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_14541110015a48892a086320_15202274 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_14541110015a48892a086320_15202274',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_15436791845a48892a08b3a0_35659389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15436791845a48892a08b3a0_35659389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_6787455275a48892a08cbf7_53411096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6787455275a48892a08cbf7_53411096',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_9208173705a48892a08e2a1_83238158 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9208173705a48892a08e2a1_83238158',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_9248956995a48892a096f86_71796453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_9248956995a48892a096f86_71796453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_10051908525a48892a098444_08843930 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_10051908525a48892a098444_08843930',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
