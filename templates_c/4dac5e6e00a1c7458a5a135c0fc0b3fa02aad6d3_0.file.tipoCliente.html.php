<?php
/* Smarty version 3.1.28, created on 2016-07-01 22:24:01
  from "C:\xampp\htdocs\travelweb\templates\tipoCliente.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5776d1617d39c9_07765037',
  'file_dependency' => 
  array (
    '4dac5e6e00a1c7458a5a135c0fc0b3fa02aad6d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\tipoCliente.html',
      1 => 1467404554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776d1617d39c9_07765037 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TIPOCLIENTE</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_TIPOCLIENTE</th>
			<th>TIPOCLIENTE</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_tipoCliente'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['tipoCliente'];?>
</td>
			<td><a href="index.php?c=tipoCliente&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_tipoCliente'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=tipoCliente&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_tipoCliente'];?>
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
	<a href="index.php?c=tipoCliente&action=nuevo">NUEVO TIPOCLIENTE</a>	
</body>
</html><?php }
}
