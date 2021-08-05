<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:17:36
  from 'C:\xampp\htdocs\pdll\views\functions\project_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a60d106474b9_06936161',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc8e14c7f56430d02a6317847ca6ca4b121e20c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\project_item.tpl',
      1 => 1621495047,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a60d106474b9_06936161 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? 9+1 - (0) : 0-(9)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
    <button class="btn list_item">
        <img src="https://picsum.photos/id/<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
/85/50" alt=""/>
        <span>Nazwa projektu</span>
    </button>
<?php }
}
}
}
