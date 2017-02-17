<?php
/* Smarty version 3.1.28, created on 2016-07-07 18:21:51
  from "C:\xampp\htdocs\travelweb\templates\login.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e819f557e49_83031633',
  'file_dependency' => 
  array (
    'd97fcd3d11b3484d587fae7e7d54111dc4ce07cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\login.form.html',
      1 => 1467907721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577e819f557e49_83031633 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>INGRESO AL SISTEMA</h1>
<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
<form action="index.php?c=login&action=validar" method="POST">
	Usuario: <input type="text" name="usuario"> <br/><br/>
	Contraseña: <input type="password" name="contrasena"> <br/> <br />
	<input type="submit" name="login" value="INGRESAR">
</form>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
