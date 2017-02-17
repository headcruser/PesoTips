<?php
/* Smarty version 3.1.28, created on 2016-07-04 04:55:33
  from "C:\xampp\htdocs\travelweb\templates\aereopuerto.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5779d0254fbdc6_88527219',
  'file_dependency' => 
  array (
    '0f4dae4fb24298a8de503937b00dfedbd55e53fe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\aereopuerto.html',
      1 => 1467600931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5779d0254fbdc6_88527219 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AEREOPUERTOS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_AEREOPUERTO</th>
			<th>AEREOPUERTO</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_aereopuerto'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['localidad'];?>
</td>
			<td><a href="index.php?c=aereopuerto&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_aereopuerto'];?>
&id_localidad=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=aereopuerto&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_aereopuerto'];?>
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
	<a href="index.php?c=aereopuerto&action=nuevo">NUEVO AEREOPUERTO</a>	
</body>
</html><?php }
}
