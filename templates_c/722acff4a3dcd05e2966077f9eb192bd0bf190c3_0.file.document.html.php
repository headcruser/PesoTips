<?php
/* Smarty version 3.1.32-dev-38, created on 2017-12-31 06:16:30
  from 'C:\xampp2\htdocs\IMC\templates\document.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32-dev-38',
  'unifunc' => 'content_5a4872ae71ce43_91729387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '722acff4a3dcd05e2966077f9eb192bd0bf190c3' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\IMC\\templates\\document.html',
      1 => 1514697377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.html' => 1,
  ),
),false)) {
function content_5a4872ae71ce43_91729387 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3689903905a4872ae705dd6_68458258', 'estilos');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4905820765a4872ae709802_30912769', 'js');
?>
 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15872405095a4872ae70a9c2_20508223', 'title');
?>
</title>
</head>
<body >
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19362793585a4872ae70c5f7_21185241', 'header');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9202686355a4872ae70db67_87853816', 'contenido');
?>

	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20231724135a4872ae70eb28_77077848', 'footer');
?>

</body>
</html><?php }
/* {block 'estilos'} */
class Block_3689903905a4872ae705dd6_68458258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'estilos' => 
  array (
    0 => 'Block_3689903905a4872ae705dd6_68458258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'estilos'} */
/* {block 'js'} */
class Block_4905820765a4872ae709802_30912769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_4905820765a4872ae709802_30912769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'js'} */
/* {block 'title'} */
class Block_15872405095a4872ae70a9c2_20508223 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15872405095a4872ae70a9c2_20508223',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
PLANTILLA PADRE<?php
}
}
/* {/block 'title'} */
/* {block 'header'} */
class Block_19362793585a4872ae70c5f7_21185241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_19362793585a4872ae70c5f7_21185241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header'} */
/* {block 'contenido'} */
class Block_9202686355a4872ae70db67_87853816 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'contenido' => 
  array (
    0 => 'Block_9202686355a4872ae70db67_87853816',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'contenido'} */
/* {block 'footer'} */
class Block_20231724135a4872ae70eb28_77077848 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_20231724135a4872ae70eb28_77077848',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'footer'} */
}
