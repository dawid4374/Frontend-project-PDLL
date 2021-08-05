<?php
/* Smarty version 3.1.39, created on 2021-05-04 09:29:59
  from 'C:\xampp\htdocs\pdll\views\functions\package_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6090f7f7484391_92380145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43773c8f39374f7d138ad812d886c8219bc11080' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\package_item.tpl',
      1 => 1619601268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6090f7f7484391_92380145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 1, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration === 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;?>
    <div class="item">
        <span class="icon sprite check_green"></span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>
<?php }
}
}
}
