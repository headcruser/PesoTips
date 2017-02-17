<?php
/* Smarty version 3.1.28, created on 2016-07-02 08:43:32
  from "C:\xampp\htdocs\travelweb\templates\cliente.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5777629455e248_06599080',
  'file_dependency' => 
  array (
    '86f90ed8a70951c08864ffb13fae995805471c8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\cliente.form.html',
      1 => 1467441784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5777629455e248_06599080 ($_smarty_tpl) {
?>
<form action="index.php?c=cliente&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO CLIENTE</h1>
	Nombre: <input type="text" name="cliente" value="<?php if (isset($_smarty_tpl->tpl_vars['cliente']->value)) {
echo $_smarty_tpl->tpl_vars['cliente']->value;
}?>"> &nbsp<!--en el value se recupera el localidad y se incrusta en la casilla de texto-->
	Apellido paterno: <input type="text" name="apaterno" value="<?php if (isset($_smarty_tpl->tpl_vars['apaterno']->value)) {
echo $_smarty_tpl->tpl_vars['apaterno']->value;
}?>">&nbsp
	Apellido materno: <input type="text" name="amaterno" value="<?php if (isset($_smarty_tpl->tpl_vars['amaterno']->value)) {
echo $_smarty_tpl->tpl_vars['amaterno']->value;
}?>">&nbsp 
	Domicilio: <input type="text" name="domicilio" value="<?php if (isset($_smarty_tpl->tpl_vars['domicilio']->value)) {
echo $_smarty_tpl->tpl_vars['domicilio']->value;
}?>">&nbsp <br /> <br />
	Nacimiento: <input type="date" name="nacimiento" value="<?php if (isset($_smarty_tpl->tpl_vars['nacimiento']->value)) {
echo $_smarty_tpl->tpl_vars['nacimiento']->value;
}?>"> &nbsp
	TipoCliente: <?php echo $_smarty_tpl->tpl_vars['listaTipocliente']->value;?>
 &nbsp
	Localidad: <?php echo $_smarty_tpl->tpl_vars['listaLocalidad']->value;?>
 &nbsp	
	<?php if (isset($_smarty_tpl->tpl_vars['id_cliente']->value)) {?>
		<input type="hidden" name="id_cliente" value="<?php echo $_smarty_tpl->tpl_vars['id_cliente']->value;?>
">	
	<?php }?> 
	<input type="submit" name="guardar" value="guardar">			
	<br /><br /> 
	<a href="index.php?c=cliente">VER CLIENTES</a>
</form>	 <?php }
}
