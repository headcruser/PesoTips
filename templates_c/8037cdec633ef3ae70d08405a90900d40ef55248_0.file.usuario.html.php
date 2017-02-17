<?php
/* Smarty version 3.1.28, created on 2016-07-07 18:39:22
  from "C:\xampp\htdocs\travelweb\templates\usuario.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e85bae6ef87_25436385',
  'file_dependency' => 
  array (
    '8037cdec633ef3ae70d08405a90900d40ef55248' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\usuario.html',
      1 => 1467908224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e85bae6ef87_25436385 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>USUARIOS</title>
</head>
<body>
	<table border="1"> 
		<tr>
			<th>ID_USUARIO</th>
			<th>USUARIO</th>
			<th>ACTUALIZAR</th>
			<th>ELIMINAR</th>
			<th>ROLES</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_usuario'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['usuario'];?>
</td>
			<td><a href="index.php?c=usuario&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_usuario'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=usuario&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_usuario'];?>
"><img src="images/x.png" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=rol_usuario&action=mostrar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_usuario'];?>
"><img src="images/roles.png" alt="Imagen no disponible"></a></td>
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
	<a href="index.php?c=usuario&action=nuevo">NUEVO USUARIO</a><br><br>
	<a href="index.php?c=login&action=logout">CERRAR SESION</a>
</body>
</html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
