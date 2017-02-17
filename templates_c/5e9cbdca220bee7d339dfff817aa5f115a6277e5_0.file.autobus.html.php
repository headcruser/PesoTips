<?php
/* Smarty version 3.1.28, created on 2016-07-07 18:04:16
  from "C:\xampp\htdocs\travelweb\templates\autobus.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e7d804d3d55_43147018',
  'file_dependency' => 
  array (
    '5e9cbdca220bee7d339dfff817aa5f115a6277e5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\autobus.html',
      1 => 1467907449,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e7d804d3d55_43147018 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AUTOBUSES</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_AUTOBUS</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_autobus'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Origen'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['Destino'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha_salida'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['fecha_llegada'];?>
</td>
			<td><a href="index.php?c=autobus&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_autobus'];?>
&terminal_origen=<?php echo $_smarty_tpl->tpl_vars['dato']->value['Origen'];?>
&terminal_destino=<?php echo $_smarty_tpl->tpl_vars['dato']->value['Destino'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=autobus&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_autobus'];?>
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
	<a href="index.php?c=autobus&action=nuevo">NUEVO AUTOBUS</a>	
</body>
</html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
