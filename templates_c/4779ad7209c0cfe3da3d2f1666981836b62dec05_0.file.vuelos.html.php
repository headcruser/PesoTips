<?php
/* Smarty version 3.1.28, created on 2016-07-06 03:56:11
  from "C:\xampp\htdocs\travelweb\templates\vuelos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577c653b811af1_84919434',
  'file_dependency' => 
  array (
    '4779ad7209c0cfe3da3d2f1666981836b62dec05' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\vuelos.html',
      1 => 1467770149,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577c653b811af1_84919434 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>VUELOS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_VUELO</th>
			<th>ORIGEN</th> 
			<th>DESTINO</th>
			<th>FECHA SALIDA</th>
			<th>FECHA LLEGADA</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_vuelo'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Origen'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Destino'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha_salida'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha_llegada'];?>
</td>
			<td><a href="index.php?c=vuelos&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_vuelo'];?>
&aero_origen=<?php echo $_smarty_tpl->tpl_vars['dato']->value['Origen'];?>
&aero_dest=<?php echo $_smarty_tpl->tpl_vars['dato']->value['Destino'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=vuelos&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_vuelo'];?>
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
	<a href="index.php?c=vuelos&action=nuevo">NUEVO VUELOS</a>	
</body>
</html><?php }
}
