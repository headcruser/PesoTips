<?php
/* Smarty version 3.1.28, created on 2016-07-05 05:39:54
  from "C:\xampp\htdocs\travelweb\templates\hoteles.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577b2c0a4eadf4_37088895',
  'file_dependency' => 
  array (
    'ac2c6903bf360fecea45ca3e1ceb5c86ea25c785' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\hoteles.html',
      1 => 1467689992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577b2c0a4eadf4_37088895 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HOTELES</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_HOTEL</th>
			<th>HOTEL</th>
			<th>LOCALIDAD</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_hotel'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['localidad'];?>
</td>
			<td><a href="index.php?c=hoteles&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_hotel'];?>
&id_localidad=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=hoteles&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_hotel'];?>
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
	<a href="index.php?c=hoteles&action=nuevo">NUEVO HOTEL</a>	
</body>
</html><?php }
}
