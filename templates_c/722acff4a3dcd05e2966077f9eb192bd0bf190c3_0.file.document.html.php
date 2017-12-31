<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-30 22:56:27
  from 'C:\xampp2\htdocs\IMC\templates\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a480b8b42d183_92196871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722acff4a3dcd05e2966077f9eb192bd0bf190c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\document.html',
      1 => 1514670981,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a480b8b42d183_92196871 (Smarty_Internal_Template $_smarty_tpl) {
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
style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('FONT');?>
font-awesome.min.css">
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8866930715a480b8b422476_66493460', 'estilos');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7086038875a480b8b426b06_30639295', 'js');
?>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14277343815a480b8b4281f6_78197204', 'title');
?>
</title>
</head>
<body >
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2944157745a480b8b429cc8_73234099', 'header');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17213984085a480b8b42af13_33220216', 'contenido');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11076352025a480b8b42c013_99029188', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_8866930715a480b8b422476_66493460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_8866930715a480b8b422476_66493460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_7086038875a480b8b426b06_30639295 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_7086038875a480b8b426b06_30639295',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_14277343815a480b8b4281f6_78197204 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14277343815a480b8b4281f6_78197204',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_2944157745a480b8b429cc8_73234099 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_2944157745a480b8b429cc8_73234099',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_17213984085a480b8b42af13_33220216 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_17213984085a480b8b42af13_33220216',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_11076352025a480b8b42c013_99029188 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_11076352025a480b8b42c013_99029188',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'footer'} */
}
