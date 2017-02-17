<?php
/* Smarty version 3.1.28, created on 2016-07-07 05:56:41
  from "C:\xampp\htdocs\travelweb\templates\rol_privilegio.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577dd2f9f3b1c0_16280132',
  'file_dependency' => 
  array (
    '04e8c07ac81b484ec506b17bab488c2a0c05a844' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\rol_privilegio.form.html',
      1 => 1467863797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577dd2f9f3b1c0_16280132 ($_smarty_tpl) {
?>
<h1>ASIGNACION DE PRIVILEGIOS</h1>
Rol: <?php echo $_smarty_tpl->tpl_vars['rol']->value;?>
 <br /><br />
<form action="index.php?c=rol_privilegio&action=asignar" method="POST">
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_rol']->value;?>
" name="id_rol"> <br />
	<?php
$_from = $_smarty_tpl->tpl_vars['privilegios']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_privilegio_0_saved_item = isset($_smarty_tpl->tpl_vars['privilegio']) ? $_smarty_tpl->tpl_vars['privilegio'] : false;
$_smarty_tpl->tpl_vars['privilegio'] = new Smarty_Variable();
$__foreach_privilegio_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_privilegio_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['privilegio']->value) {
$__foreach_privilegio_0_saved_local_item = $_smarty_tpl->tpl_vars['privilegio'];
?>
		<input type="checkbox" name="id_privilegio[<?php echo $_smarty_tpl->tpl_vars['privilegio']->value[0];?>
]" <?php echo $_smarty_tpl->tpl_vars['privilegio']->value[2];?>
><?php echo $_smarty_tpl->tpl_vars['privilegio']->value[1];?>
 <br />
	<?php
$_smarty_tpl->tpl_vars['privilegio'] = $__foreach_privilegio_0_saved_local_item;
}
}
if ($__foreach_privilegio_0_saved_item) {
$_smarty_tpl->tpl_vars['privilegio'] = $__foreach_privilegio_0_saved_item;
}
?> <br />
	<input type="submit" name="enviar" value="enviar">

</form> <?php }
}
