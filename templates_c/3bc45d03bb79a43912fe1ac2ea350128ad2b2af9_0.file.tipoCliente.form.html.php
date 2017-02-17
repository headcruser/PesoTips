<?php
/* Smarty version 3.1.28, created on 2016-07-01 22:24:06
  from "C:\xampp\htdocs\travelweb\templates\tipoCliente.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5776d166314b31_83419507',
  'file_dependency' => 
  array (
    '3bc45d03bb79a43912fe1ac2ea350128ad2b2af9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\tipoCliente.form.html',
      1 => 1467404600,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776d166314b31_83419507 ($_smarty_tpl) {
?>
<form action="index.php?c=tipoCliente&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO TIPOCLIENTE</h1>
	Tipo cliente:<input type="text" name="tipoCliente" value="<?php if (isset($_smarty_tpl->tpl_vars['tipoCliente']->value)) {
echo $_smarty_tpl->tpl_vars['tipoCliente']->value;
}?>">
	<?php if (isset($_smarty_tpl->tpl_vars['id_tipoCliente']->value)) {?>
		<input type="hidden" name="id_tipoCliente" value="<?php echo $_smarty_tpl->tpl_vars['id_tipoCliente']->value;?>
">
	<?php }?>
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=tipoCliente">VER TIPOCLIENTE</a>
</form>	<?php }
}
