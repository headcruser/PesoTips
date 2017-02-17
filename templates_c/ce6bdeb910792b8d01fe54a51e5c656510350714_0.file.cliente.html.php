<?php
/* Smarty version 3.1.28, created on 2016-07-02 08:40:39
  from "C:\xampp\htdocs\travelweb\templates\cliente.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577761e7013e99_18638627',
  'file_dependency' => 
  array (
    'ce6bdeb910792b8d01fe54a51e5c656510350714' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\cliente.html',
      1 => 1467441587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577761e7013e99_18638627 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CLIENTES</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_CLIENTE</th>
			<th>NOMBRE</th>
			<th>APATERNO</th> 
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_cliente'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['apaterno'];?>
</td>
			<td><a href="index.php?c=cliente&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_cliente'];?>
&id_tipoCliente=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_tipoCliente'];?>
&id_localidad=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=cliente&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_cliente'];?>
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
	<a href="index.php?c=cliente&action=nuevo">NUEVO CLIENTE</a>	
</body>
</html><?php }
}
