<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-28 20:05:24
  from 'C:\xampp2\htdocs\IMC\templates\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4540740f9729_20267160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722acff4a3dcd05e2966077f9eb192bd0bf190c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\document.html',
      1 => 1514487188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4540740f9729_20267160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_VENDOR');?>
bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS_VENDOR');?>
bootstrap-theme.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
jcarousel.connected-carousels.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
main.css">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_561332985a4540740f31a1_99753265', 'estilos');
?>
 	
	<?php echo '<script'; ?>
 src="<?php echo @constant('JS_VENDOR');?>
jquery.min.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3063778275a4540740f5342_67915486', 'js');
?>
 	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11554372905a4540740f6271_67427997', 'title');
?>
</title>
</head>
<body id="cuerpo">
	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4488027685a4540740f7128_95640590', 'header');
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16996006515a4540740f7e31_13707147', 'contenido');
?>

	
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1039688505a4540740f8b12_97716235', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_561332985a4540740f31a1_99753265 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_561332985a4540740f31a1_99753265',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_3063778275a4540740f5342_67915486 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_3063778275a4540740f5342_67915486',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_11554372905a4540740f6271_67427997 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_11554372905a4540740f6271_67427997',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_4488027685a4540740f7128_95640590 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_4488027685a4540740f7128_95640590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_16996006515a4540740f7e31_13707147 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_16996006515a4540740f7e31_13707147',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_1039688505a4540740f8b12_97716235 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1039688505a4540740f8b12_97716235',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
