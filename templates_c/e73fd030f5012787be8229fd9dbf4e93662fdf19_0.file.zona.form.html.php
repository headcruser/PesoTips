<?php
/* Smarty version 3.1.28, created on 2016-07-06 08:48:30
  from "C:\xampp\htdocs\travelweb\templates\zona.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577ca9bee95979_18624390',
  'file_dependency' => 
  array (
    'e73fd030f5012787be8229fd9dbf4e93662fdf19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\zona.form.html',
      1 => 1467787709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ca9bee95979_18624390 ($_smarty_tpl) {
?>
<form action="index.php?c=zona&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO ZONA</h1>
	Zona: <input type="text" name="zona" value="<?php if (isset($_smarty_tpl->tpl_vars['zona']->value)) {
echo $_smarty_tpl->tpl_vars['zona']->value;
}?>">
	Descripcion: <input type="text" name="descripcion" value="<?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?>" >
	<?php if (isset($_smarty_tpl->tpl_vars['id_zona']->value)) {?>
		<input type="hidden" name="id_zona" value="<?php echo $_smarty_tpl->tpl_vars['id_zona']->value;?>
">
	<?php }?>
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=zona">VER ZONAS</a>
</form>	<?php }
}
