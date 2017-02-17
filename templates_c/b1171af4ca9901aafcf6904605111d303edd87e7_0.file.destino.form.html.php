<?php
/* Smarty version 3.1.28, created on 2016-07-08 19:15:56
  from "C:\xampp\htdocs\travelweb\templates\destino.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577fdfcc352cf0_03194338',
  'file_dependency' => 
  array (
    'b1171af4ca9901aafcf6904605111d303edd87e7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\destino.form.html',
      1 => 1467998154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_577fdfcc352cf0_03194338 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--para adjuntar archivos se deben enviar por medio de POST y ademas añadir 
el atributo enctype="multipart/form-data"-->
<form action="index.php?c=destino&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST" enctype="multipart/form-data">	
	<?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {
echo $_smarty_tpl->tpl_vars['mensaje']->value;
}?>
	<h1>NUEVO DESTINO</h1>
	Destino: <input type="text" name="destino" value="<?php if (isset($_smarty_tpl->tpl_vars['destino']->value)) {
echo $_smarty_tpl->tpl_vars['destino']->value;
}?>"> <br/><br/>
	Descripcion: <br><textarea name="descripcion" cols="30" rows="10" style="width:90%"><?php if (isset($_smarty_tpl->tpl_vars['descripcion']->value)) {
echo $_smarty_tpl->tpl_vars['descripcion']->value;
}?></textarea> <br /> <br />		
	<?php if (isset($_smarty_tpl->tpl_vars['id_destino']->value)) {?>
		<input type="hidden" name="id_destino" value="<?php echo $_smarty_tpl->tpl_vars['id_destino']->value;?>
">
	<?php }?>
	Foto: <input type="file" name="foto"> <br /><br />
	Documento: <input type="file" name="documento"> <br /><br />
	<input type="submit" name="guardar" value="guardar">			
	<br /><br />
	<a href="index.php?c=destino">VER DESTINOS</a>
</form>	
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
