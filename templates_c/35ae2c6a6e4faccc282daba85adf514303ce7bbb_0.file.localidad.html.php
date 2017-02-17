<?php
/* Smarty version 3.1.28, created on 2016-07-09 01:07:13
  from "C:\xampp\htdocs\travelweb\templates\localidad.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_578032215df026_80839722',
  'file_dependency' => 
  array (
    '35ae2c6a6e4faccc282daba85adf514303ce7bbb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\localidad.html',
      1 => 1467907707,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_578032215df026_80839722 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MUNICIPIOS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_LOCALIDAD</th>
			<th>LOCALIDAD</th>
			<th>MUNICIPIO</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['localidad'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['municipio'];?>
</td>
			<td><a href="index.php?c=localidad&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
&id_municipio=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_municipio'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=localidad&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_localidad'];?>
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
	<a href="index.php?c=localidad&action=nuevo">NUEVA LOCALIDAD</a>	
</body>
</html>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
