<?php
/* Smarty version 3.1.28, created on 2016-07-04 04:49:57
  from "C:\xampp\htdocs\travelweb\templates\aereopuerto.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5779ced533aac2_06761248',
  'file_dependency' => 
  array (
    '8007059525b73195a8c0491e6ee79cfa5c3a6063' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\aereopuerto.form.html',
      1 => 1467600581,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5779ced533aac2_06761248 ($_smarty_tpl) {
?>
<form action="index.php?c=aereopuerto&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO AEREOPUERTO</h1>
	Aereopuerto:<input type="text" name="aereopuerto" value="<?php if (isset($_smarty_tpl->tpl_vars['aereopuerto']->value)) {
echo $_smarty_tpl->tpl_vars['aereopuerto']->value;
}?>"><!--en el value se recupera el aereopuerto y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_aereopuerto']->value)) {?>
		<input type="hidden" name="id_aereopuerto" value="<?php echo $_smarty_tpl->tpl_vars['id_aereopuerto']->value;?>
">		
		<input type="hidden" name="id_localidad" value="<?php echo $_smarty_tpl->tpl_vars['id_localidad']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=aereopuerto">VER AEREOPUERTO</a>
</form>	<?php }
}
