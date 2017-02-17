<?php
/* Smarty version 3.1.28, created on 2016-07-01 21:16:19
  from "C:\xampp\htdocs\travelweb\templates\estado.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5776c18308c236_97449954',
  'file_dependency' => 
  array (
    '86e24d784f339ed1d0e3ea7231e2a111a320d2a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\estado.form.html',
      1 => 1467398491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776c18308c236_97449954 ($_smarty_tpl) {
?>
<form action="index.php?c=estado&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO ESTADO</h1>
	Estado:<input type="text" name="estado" value="<?php if (isset($_smarty_tpl->tpl_vars['estado']->value)) {
echo $_smarty_tpl->tpl_vars['estado']->value;
}?>">
	<?php if (isset($_smarty_tpl->tpl_vars['id_estado']->value)) {?>
		<input type="hidden" name="id_estado" value="<?php echo $_smarty_tpl->tpl_vars['id_estado']->value;?>
">
	<?php }?>
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=estado">VER ESTADOS</a>
</form>	<?php }
}
