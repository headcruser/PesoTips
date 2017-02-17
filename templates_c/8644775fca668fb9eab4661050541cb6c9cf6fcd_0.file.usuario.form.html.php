<?php
/* Smarty version 3.1.28, created on 2016-07-07 19:33:23
  from "C:\xampp\htdocs\travelweb\templates\usuario.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e92635070d0_54086383',
  'file_dependency' => 
  array (
    '8644775fca668fb9eab4661050541cb6c9cf6fcd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\usuario.form.html',
      1 => 1467908212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e92635070d0_54086383 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="index.php?c=usuario&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['mensajecon']->value)) {
echo $_smarty_tpl->tpl_vars['mensajecon']->value;
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['mensajeusu']->value)) {
echo $_smarty_tpl->tpl_vars['mensajeusu']->value;
}?>
	<h1>NUEVO USUARIOS</h1>	
	usuario:<input type="text" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {
echo $_smarty_tpl->tpl_vars['usuario']->value;
}?>">
	<?php if (isset($_smarty_tpl->tpl_vars['id_usuario']->value)) {?>
		<input type="hidden" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
	<?php }?>
	
	Contraseña: <input type="password" name="contrasena"> <br /><br />
	Vuelve a escribir tu contraseña: <input type="password" name="contrasenar"> <br /><br />
	<input type="submit" name="guardar" value="guardar">			
	<br /><br />
	<a href="index.php?c=usuario">VER USUARIOS</a>
</form>	 
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
