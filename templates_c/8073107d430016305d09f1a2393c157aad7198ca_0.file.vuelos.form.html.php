<?php
/* Smarty version 3.1.28, created on 2016-07-06 08:10:35
  from "C:\xampp\htdocs\travelweb\templates\vuelos.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577ca0db1a61b8_77983578',
  'file_dependency' => 
  array (
    '8073107d430016305d09f1a2393c157aad7198ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\vuelos.form.html',
      1 => 1467785276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ca0db1a61b8_77983578 ($_smarty_tpl) {
?>
<form action="index.php?c=vuelos&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO VUELOS</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['id_vuelo']->value)) {?>
		<input type="hidden" name="id_vuelo" value="<?php echo $_smarty_tpl->tpl_vars['id_vuelo']->value;?>
">
	<?php }?>	
	Aeropuerto origen: <?php echo $_smarty_tpl->tpl_vars['listaAero_orig']->value;?>
 &nbsp
	Aeropuerto destino: <?php echo $_smarty_tpl->tpl_vars['listaAero_dest']->value;?>
 <br /><br />
	Fecha salida: <input type="date" name="fecha_salida" value="<?php if (isset($_smarty_tpl->tpl_vars['fecha_salida']->value)) {
echo $_smarty_tpl->tpl_vars['fecha_salida']->value;
}?>">&nbsp
	Fecha llegada: <input type="date" name="fecha_llegada" value="<?php if (isset($_smarty_tpl->tpl_vars['fecha_llegada']->value)) {
echo $_smarty_tpl->tpl_vars['fecha_llegada']->value;
}?>">&nbsp
	Cantidad de pasajeros: <input type="text" name="cant_pasajeros" value="<?php if (isset($_smarty_tpl->tpl_vars['no_pasajeros']->value)) {
echo $_smarty_tpl->tpl_vars['no_pasajeros']->value;
}?>"><br /><br />
	Hora salida: <input type="time" name="hora_salida" value="<?php if (isset($_smarty_tpl->tpl_vars['hora_salida']->value)) {
echo $_smarty_tpl->tpl_vars['hora_salida']->value;
}?>">
	Hora llegada: <input type="time" name="hora_llegada" value="<?php if (isset($_smarty_tpl->tpl_vars['hora_llegada']->value)) {
echo $_smarty_tpl->tpl_vars['hora_llegada']->value;
}?>"> &nbsp 
	<input type="submit" name="guardar" value="guardar"><br />
	<br />	
	<a href="index.php?c=vuelos">VER VUELOS</a>
</form>	 <?php }
}
