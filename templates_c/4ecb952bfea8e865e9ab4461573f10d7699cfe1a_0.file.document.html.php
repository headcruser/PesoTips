<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 08:27:25
  from 'C:\xampp2\htdocs\IMC\templates\template\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a48915d146f36_60887463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ecb952bfea8e865e9ab4461573f10d7699cfe1a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\template\\document.html',
      1 => 1514705237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sections/header.html' => 1,
    'file:sections/footer.html' => 1,
  ),
),false)) {
function content_5a48915d146f36_60887463 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16321589195a48915d12cd21_39337901', 'estilos');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15837450715a48915d132169_52712721', 'js');
?>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9860509445a48915d1339e1_88821525', 'title');
?>
</title>
</head>
<body >
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18083390245a48915d135048_08846672', 'header');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9143970995a48915d13e101_57213538', 'contenido');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1887702415a48915d1445c7_12420887', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_16321589195a48915d12cd21_39337901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_16321589195a48915d12cd21_39337901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_15837450715a48915d132169_52712721 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_15837450715a48915d132169_52712721',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_9860509445a48915d1339e1_88821525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9860509445a48915d1339e1_88821525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_18083390245a48915d135048_08846672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_18083390245a48915d135048_08846672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:sections/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_9143970995a48915d13e101_57213538 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_9143970995a48915d13e101_57213538',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_1887702415a48915d1445c7_12420887 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1887702415a48915d1445c7_12420887',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:sections/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
