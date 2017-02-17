<?php
/* Smarty version 3.1.28, created on 2016-07-07 07:50:04
  from "C:\xampp\htdocs\travelweb\templates\terminal.form.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577ded8c5139f6_00285293',
  'file_dependency' => 
  array (
    '4a1b809956a3f4ac92faa1064b66662bf1b386f3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\terminal.form.html',
      1 => 1467870515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577ded8c5139f6_00285293 ($_smarty_tpl) {
?>
<form action="index.php?c=terminal&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">	
	<h1>NUEVA TERMINAL</h1>
	Terminal:<input type="text" name="terminal" value="<?php if (isset($_smarty_tpl->tpl_vars['terminal']->value)) {
echo $_smarty_tpl->tpl_vars['terminal']->value;
}?>"><!--en el value se recupera el terminal y se incrusta en la casilla de texto-->
	<?php if (isset($_smarty_tpl->tpl_vars['id_terminal']->value)) {?>
		<input type="hidden" name="id_terminal" value="<?php echo $_smarty_tpl->tpl_vars['id_terminal']->value;?>
">		
		<input type="hidden" name="id_localidad" value="<?php echo $_smarty_tpl->tpl_vars['id_localidad']->value;?>
">
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['listaDesplegable']->value;?>
 
	<input type="submit" name="guardar" value="guardar">			
	<br />
	<a href="index.php?c=terminal">VER TERMINALES</a>
</form>	<?php }
}
