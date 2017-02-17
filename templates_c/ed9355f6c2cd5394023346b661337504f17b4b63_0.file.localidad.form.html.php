<?php
/* Smarty version 3.1.28, created on 2016-07-01 22:16:59
  from "C:\xampp\htdocs\travelweb\templates\localidad.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5776cfbb7e0dc4_16461691',
  'file_dependency' => 
  array (
    'ed9355f6c2cd5394023346b661337504f17b4b63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\localidad.form.html',
      1 => 1467404218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776cfbb7e0dc4_16461691 ($_smarty_tpl) {
?>
<form action="index.php?c=localidad&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO LOCALIDAD</h1>
	Localidad:<input type="text" name="localidad" value="<?php if (isset($_smarty_tpl->tpl_vars['localidad']->value)) {
echo $_smarty_tpl->tpl_vars['localidad']->value;
}?>"><!--en el value se recupera el localidad y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_localidad']->value)) {?>
		<input type="hidden" name="id_localidad" value="<?php echo $_smarty_tpl->tpl_vars['id_localidad']->value;?>
">		
		<input type="hidden" name="id_municipio" value="<?php echo $_smarty_tpl->tpl_vars['id_municipio']->value;?>
">
	<?php }?>
	Municipio: <?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=localidad">VER LOCALIDADES</a>
</form>	<?php }
}
