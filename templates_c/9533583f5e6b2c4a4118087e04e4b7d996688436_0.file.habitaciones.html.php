<?php
/* Smarty version 3.1.28, created on 2016-07-05 06:13:21
  from "C:\xampp\htdocs\travelweb\templates\habitaciones.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577b33e1083512_45637486',
  'file_dependency' => 
  array (
    '9533583f5e6b2c4a4118087e04e4b7d996688436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\habitaciones.html',
      1 => 1467691999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577b33e1083512_45637486 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HABITACIONES</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_HABITACION</th>
			<th>CAPACIDAD</th>
			<th>HOTEL</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_habitacion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['capacidad'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			<td><a href="index.php?c=habitaciones&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_habitacion'];?>
&id_hotel=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_hotel'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=habitaciones&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_habitacion'];?>
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
	<a href="index.php?c=habitaciones&action=nuevo">NUEVA HABITACION</a>	
</body>
</html><?php }
}
