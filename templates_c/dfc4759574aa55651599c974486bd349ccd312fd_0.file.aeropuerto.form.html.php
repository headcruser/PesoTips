<?php
/* Smarty version 3.1.28, created on 2016-07-04 05:10:15
  from "C:\xampp\htdocs\travelweb\templates\aeropuerto.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5779d39753e4b8_56860638',
  'file_dependency' => 
  array (
    'dfc4759574aa55651599c974486bd349ccd312fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\aeropuerto.form.html',
      1 => 1467601203,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5779d39753e4b8_56860638 ($_smarty_tpl) {
?>
<form action="index.php?c=aeropuerto&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO AEROPUERTO</h1>
	Aeropuerto:<input type="text" name="aeropuerto" value="<?php if (isset($_smarty_tpl->tpl_vars['aeropuerto']->value)) {
echo $_smarty_tpl->tpl_vars['aeropuerto']->value;
}?>"><!--en el value se recupera el aeropuerto y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_aeropuerto']->value)) {?>
		<input type="hidden" name="id_aeropuerto" value="<?php echo $_smarty_tpl->tpl_vars['id_aeropuerto']->value;?>
">		
		<input type="hidden" name="id_localidad" value="<?php echo $_smarty_tpl->tpl_vars['id_localidad']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=aeropuerto">VER AEROPUERTO</a>
</form>	<?php }
}
