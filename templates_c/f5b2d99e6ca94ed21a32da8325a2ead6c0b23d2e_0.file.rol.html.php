<?php
/* Smarty version 3.1.28, created on 2016-07-07 18:39:24
  from "C:\xampp\htdocs\travelweb\templates\rol.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e85bc672056_56974706',
  'file_dependency' => 
  array (
    'f5b2d99e6ca94ed21a32da8325a2ead6c0b23d2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\rol.html',
      1 => 1467907809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e85bc672056_56974706 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ROL</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_ROL</th>
			<th>ROL</th>
			<th>PRIVILEGIOS</th>
			<th>ACTUALIZAR</th>
			<th>ELIMINAR</th>
			
		</tr>
		<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_0_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$__foreach_dato_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_dato_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$__foreach_dato_0_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>		
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_rol'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['rol'];?>
</td>
			<td><a href="index.php?c=rol_privilegio&action=mostrar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_rol'];?>
"><img src="images/roles.png" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=rol&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_rol'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=rol&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_rol'];?>
"><img src="images/x.png" alt="Imagen no disponible"></a></td>
			
		</tr>
		<?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_0_saved_local_item;
}
}
if ($__foreach_dato_0_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_0_saved_item;
}
?>
	</table>  		
	<a href="index.php?c=rol&action=nuevo">NUEVO ROL</a>	
</body>
</html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
