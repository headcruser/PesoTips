<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-29 16:50:27
  from 'C:\xampp2\htdocs\IMC\templates\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4664438a5f61_39030396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722acff4a3dcd05e2966077f9eb192bd0bf190c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\document.html',
      1 => 1514562429,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a4664438a5f61_39030396 (Smarty_Internal_Template $_smarty_tpl) {
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
main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('FONT');?>
font-awesome.min.css">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6251511335a46644389b766_66725308', 'estilos');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3966831825a46644389f895_32897679', 'js');
?>
 	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18275589595a4664438a1106_60356695', 'title');
?>
</title>
</head>
<body >
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2066398535a4664438a2780_00017676', 'header');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9064672055a4664438a3bf8_77185245', 'contenido');
?>
 
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18594578785a4664438a4e83_51936648', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_6251511335a46644389b766_66725308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_6251511335a46644389b766_66725308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_3966831825a46644389f895_32897679 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_3966831825a46644389f895_32897679',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_18275589595a4664438a1106_60356695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_18275589595a4664438a1106_60356695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_2066398535a4664438a2780_00017676 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2066398535a4664438a2780_00017676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_9064672055a4664438a3bf8_77185245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_9064672055a4664438a3bf8_77185245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_18594578785a4664438a4e83_51936648 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18594578785a4664438a4e83_51936648',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
