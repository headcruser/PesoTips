<?php
/* Smarty version 3.1.28, created on 2016-07-07 19:32:56
  from "C:\xampp\htdocs\travelweb\templates\rol_usuario.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e9248f32d82_36937101',
  'file_dependency' => 
  array (
    '9f23445611ef80b2a7285634b9ae11cc45f4822e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\rol_usuario.form.html',
      1 => 1467907833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e9248f32d82_36937101 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>ASIGNACION DE ROLES</h1>
Usuario: <?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
 <br /><br />
<form action="index.php?c=rol_usuario&action=asignar" method="POST">
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
" name="id_usuario"> <br />
	<?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rol_0_saved_item = isset($_smarty_tpl->tpl_vars['rol']) ? $_smarty_tpl->tpl_vars['rol'] : false;
$_smarty_tpl->tpl_vars['rol'] = new Smarty_Variable();
$__foreach_rol_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_rol_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['rol']->value) {
$__foreach_rol_0_saved_local_item = $_smarty_tpl->tpl_vars['rol'];
?>
		<input type="checkbox" name="id_rol[<?php echo $_smarty_tpl->tpl_vars['rol']->value[0];?>
]" <?php echo $_smarty_tpl->tpl_vars['rol']->value[2];?>
><?php echo $_smarty_tpl->tpl_vars['rol']->value[1];?>
 <br />
	<?php
$_smarty_tpl->tpl_vars['rol'] = $__foreach_rol_0_saved_local_item;
}
}
if ($__foreach_rol_0_saved_item) {
$_smarty_tpl->tpl_vars['rol'] = $__foreach_rol_0_saved_item;
}
?> <br />
	<input type="submit" name="enviar" value="enviar">

</form> 
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
