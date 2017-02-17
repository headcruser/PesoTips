<?php
/* Smarty version 3.1.28, created on 2016-07-01 03:18:50
  from "C:\xampp\htdocs\travelweb\templates\select.component.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.28',
  'unifunc' => 'content_5775c4fa6ef2c7_48251037',
  'file_dependency' => 
  array (
    '7ca61f7fcc4c4b361fd5a5f50c7b23546e6259e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\travelweb\\templates\\select.component.html',
      1 => 1467335673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5775c4fa6ef2c7_48251037 ($_smarty_tpl) {
?>
<select name="<?php echo $_smarty_tpl->tpl_vars['selectname']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['datos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_dato_0_saved_item = isset($_smarty_tpl->tpl_vars['dato']) ? $_smarty_tpl->tpl_vars['dato'] : false;
$_smarty_tpl->tpl_vars['dato'] = new Smarty_Variable();
$__foreach_dato_0_total = $_smarty_tpl->smarty->ext->_foreach->count($_from);
if ($__foreach_dato_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['dato']->value) {
$__foreach_dato_0_saved_local_item = $_smarty_tpl->tpl_vars['dato'];
?>		
		<?php if ($_smarty_tpl->tpl_vars['iamselected']->value == $_smarty_tpl->tpl_vars['dato']->value[0]) {?>
    		<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
" selected><?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
</option>
		<?php } else { ?>
    		<option value="<?php echo $_smarty_tpl->tpl_vars['dato']->value[0];?>
" ><?php echo $_smarty_tpl->tpl_vars['dato']->value[1];?>
</option>
		<?php }?>
	<?php
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_0_saved_local_item;
}
}
if ($__foreach_dato_0_saved_item) {
$_smarty_tpl->tpl_vars['dato'] = $__foreach_dato_0_saved_item;
}
?>
</select><?php }
}
