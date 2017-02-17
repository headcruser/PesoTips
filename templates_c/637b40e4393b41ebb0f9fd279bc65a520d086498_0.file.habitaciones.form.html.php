<?php
/* Smarty version 3.1.28, created on 2016-07-05 05:58:14
  from "C:\xampp\htdocs\travelweb\templates\habitaciones.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577b30562b03f4_08101718',
  'file_dependency' => 
  array (
    '637b40e4393b41ebb0f9fd279bc65a520d086498' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\habitaciones.form.html',
      1 => 1467691000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577b30562b03f4_08101718 ($_smarty_tpl) {
?>
<form action="index.php?c=habitaciones&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVA HABITACION</h1>
	Capacidad:<input type="text" name="capacidad" value="<?php if (isset($_smarty_tpl->tpl_vars['capacidad']->value)) {
echo $_smarty_tpl->tpl_vars['capacidad']->value;
}?>"><!--en el value se recupera el hotel y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_habitacion']->value)) {?>
		<input type="hidden" name="id_habitacion" value="<?php echo $_smarty_tpl->tpl_vars['id_habitacion']->value;?>
">		
		<input type="hidden" name="id_hotel" value="<?php echo $_smarty_tpl->tpl_vars['id_hotel']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=habitaciones">VER HABITACIONES</a>
</form>	<?php }
}
