<?php
/* Smarty version 3.1.28, created on 2016-07-06 08:54:58
  from "C:\xampp\htdocs\travelweb\templates\zona.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577cab42c5f211_28018412',
  'file_dependency' => 
  array (
    '11c0194d3bcc4971e65851dc176857cf27843622' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\zona.html',
      1 => 1467788096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577cab42c5f211_28018412 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ZONAS ARQUEOLOGICAS</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>ID_ZONA</th>
			<th>ZONA ARQUEOLOGICA</th>			
			<th>DESCRIPCION</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['id_zona'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['dato']->value['descripcion'];?>
</td>	
			<td><a href="index.php?c=zona&action=editar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_zona'];?>
"><img src="images/lapiz.jpg" alt="Imagen no disponible"></a></td>
			<td><a href="index.php?c=zona&action=eliminar&id=<?php echo $_smarty_tpl->tpl_vars['dato']->value['id_zona'];?>
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
	<a href="index.php?c=zona&action=nuevo">NUEVO ZONAS ARQUEOLOGICAS</a>	
</body>
</html><?php }
}
