<?php
/* Smarty version 3.1.28, created on 2016-07-01 21:55:32
  from "C:\xampp\htdocs\travelweb\templates\municipio.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5776cab48ecef6_72027829',
  'file_dependency' => 
  array (
    'c24939e3859d79437676da92b229217d35da9a9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\municipio.form.html',
      1 => 1467402925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5776cab48ecef6_72027829 ($_smarty_tpl) {
?>
<form action="index.php?c=municipio&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVO MUNICIPIO</h1>
	Municipio:<input type="text" name="municipio" value="<?php if (isset($_smarty_tpl->tpl_vars['municipio']->value)) {
echo $_smarty_tpl->tpl_vars['municipio']->value;
}?>"><!--en el value se recupera el municipio y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_municipio']->value)) {?>
		<input type="hidden" name="id_municipio" value="<?php echo $_smarty_tpl->tpl_vars['id_municipio']->value;?>
">		
		<input type="hidden" name="id_estado" value="<?php echo $_smarty_tpl->tpl_vars['id_estado']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=municipio">VER MUNICIPIO</a>
</form>	<?php }
}
