<?php
/* Smarty version 3.1.28, created on 2017-12-28 06:04:47
  from "C:\xampp\htdocs\IMC\templates\document.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5a447b6f16a2c5_47603300',
  'file_dependency' => 
  array (
    'a56e927c8dc3dcbc4d5256bd1ec47e5ad05cc9b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\IMC\\templates\\document.html',
      1 => 1514437476,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a447b6f16a2c5_47603300 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery-3.1.0.min.js"><?php echo '</script'; ?>
>
  	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.validate.min.js"><?php echo '</script'; ?>
>

  	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
jcarousel.connected-carousels.css">
  	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.jcarousel.min.js"><?php echo '</script'; ?>
>
  	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jcarousel.connected-carousels.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-1.12.0.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//code.jquery.com/jquery-migrate-1.2.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo @constant('JS');?>
jquery.min.js"><?php echo '</script'; ?>
>
	<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'js', array (
  0 => 'block_238605a447b6f135ac6_82011681',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
 		

	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
bootstrap-theme.min.css" >
	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo @constant('JS');?>
bootstrap.min.js"><?php echo '</script'; ?>
>
	
	<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'estilos', array (
  0 => 'block_141735a447b6f148135_21682950',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
 	

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'title', array (
  0 => 'block_63545a447b6f14d4d9_87927224',
  1 => false,
  3 => 0,
  2 => 0,
));
?>
</title>
	<link rel="stylesheet" type="text/css" href="<?php echo @constant('CSS');?>
main.css">
</head>
<body id="cuerpo">
	
	<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'header', array (
  0 => 'block_157795a447b6f15a997_08188751',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

	
	<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'contenido', array (
  0 => 'block_63045a447b6f160290_25282829',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

	
	<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, 'footer', array (
  0 => 'block_277375a447b6f164ab1_32354471',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'js'}  file:document.html */
function block_238605a447b6f135ac6_82011681($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'js'} */
/* {block 'estilos'}  file:document.html */
function block_141735a447b6f148135_21682950($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'estilos'} */
/* {block 'title'}  file:document.html */
function block_63545a447b6f14d4d9_87927224($_smarty_tpl, $_blockParentStack) {
?>
PLANTILLA PADRE<?php
}
/* {/block 'title'} */
/* {block 'header'}  file:document.html */
function block_157795a447b6f15a997_08188751($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'header'} */
/* {block 'contenido'}  file:document.html */
function block_63045a447b6f160290_25282829($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'contenido'} */
/* {block 'footer'}  file:document.html */
function block_277375a447b6f164ab1_32354471($_smarty_tpl, $_blockParentStack) {
}
/* {/block 'footer'} */
}
