<?php
/* Smarty version 3.1.28, created on 2016-07-04 18:22:19
  from "C:\xampp\htdocs\travelweb\templates\rol.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577a8d3b1ab499_78702902',
  'file_dependency' => 
  array (
    'fdde7b4f79b784f9480d65a58c73ca1df9578bc0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\rol.form.html',
      1 => 1467649337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577a8d3b1ab499_78702902 ($_smarty_tpl) {
?>
<form action="index.php?c=rol&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">
	<?php if (isset($_smarty_tpl->tpl_vars['mensajerol']->value)) {
echo $_smarty_tpl->tpl_vars['mensajerol']->value;
}?>
	<h1>NUEVO ROL</h1>
	Rol:<input type="text" name="rol" value="<?php if (isset($_smarty_tpl->tpl_vars['rol']->value)) {
echo $_smarty_tpl->tpl_vars['rol']->value;
}?>">
	<?php if (isset($_smarty_tpl->tpl_vars['id_rol']->value)) {?>
		<input type="hidden" name="id_rol" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
">
	<?php }?>
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=rol">VER ROLES</a>
</form>	<?php }
}
