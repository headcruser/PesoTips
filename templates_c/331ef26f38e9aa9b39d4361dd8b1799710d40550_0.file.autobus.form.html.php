<?php
/* Smarty version 3.1.28, created on 2016-07-07 08:14:23
  from "C:\xampp\htdocs\travelweb\templates\autobus.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577df33ff1fc82_21436974',
  'file_dependency' => 
  array (
    '331ef26f38e9aa9b39d4361dd8b1799710d40550' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\autobus.form.html',
      1 => 1467871959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577df33ff1fc82_21436974 ($_smarty_tpl) {
?>
<form action="index.php?c=autobus&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO AUTOBUS</h1>
	<?php if (isset($_smarty_tpl->tpl_vars['id_autobus']->value)) {?>
		<input type="hidden" name="id_autobus" value="<?php echo $_smarty_tpl->tpl_vars['id_autobus']->value;?>
">
	<?php }?>	
	Aeropuerto origen: <?php echo $_smarty_tpl->tpl_vars['listaTerminal_origen']->value;?>
 &nbsp
	Aeropuerto destino: <?php echo $_smarty_tpl->tpl_vars['listaTerminal_destino']->value;?>
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
	<a href="index.php?c=autobus">VER AUTOBUSES</a>
</form>	 <?php }
}
