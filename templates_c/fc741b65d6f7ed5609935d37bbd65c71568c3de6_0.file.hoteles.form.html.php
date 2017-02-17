<?php
/* Smarty version 3.1.28, created on 2016-07-05 05:34:25
  from "C:\xampp\htdocs\travelweb\templates\hoteles.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577b2ac15a97e5_88082415',
  'file_dependency' => 
  array (
    'fc741b65d6f7ed5609935d37bbd65c71568c3de6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\hoteles.form.html',
      1 => 1467689617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577b2ac15a97e5_88082415 ($_smarty_tpl) {
?>
<form action="index.php?c=hoteles&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO HOTEL</h1>
	Hotel:<input type="text" name="hotel" value="<?php if (isset($_smarty_tpl->tpl_vars['hotel']->value)) {
echo $_smarty_tpl->tpl_vars['hotel']->value;
}?>"><!--en el value se recupera el hotel y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_hotel']->value)) {?>
		<input type="hidden" name="id_hotel" value="<?php echo $_smarty_tpl->tpl_vars['id_hotel']->value;?>
">		
		<input type="hidden" name="id_localidad" value="<?php echo $_smarty_tpl->tpl_vars['id_localidad']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=hoteles">VER HOTELES</a>
</form>	<?php }
}
