<?php
/* Smarty version 3.1.28, created on 2016-07-07 19:32:48
  from "C:\xampp\htdocs\travelweb\templates\menu.administrador.component.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_577e9240998370_17434451',
  'file_dependency' => 
  array (
    '7a14303641a754d9cf45bf3c308990dfe52dbe03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\menu.administrador.component.html',
      1 => 1467912683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_577e9240998370_17434451 ($_smarty_tpl) {
?>
<nav id="nav1">
	<ul>
		<li><a href="index.php?c=usuario">USUARIOS</a></li>
		<li><a href="index.php?c=rol">ROLES</a></li>
		<li><a href="index.php?c=privilegios">PRIVILEGIOS</a></li>
		<li><a href="index.php?c=login&&action=logout">LOGOUT</a></li>				
	</ul>
</nav>
 <?php }
}
