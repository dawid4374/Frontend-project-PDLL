<?php
/* Smarty version 3.1.39, created on 2021-05-26 09:28:53
  from 'C:\wamp64\www\pdll\views\functions\package_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ae14d50e3284_80366599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc3d29cc1f5cd8fce8cfe569e65de477c9e87a2e' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\package_item.tpl',
      1 => 1622021331,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ae14d50e3284_80366599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['k']->step = 1;$_smarty_tpl->tpl_vars['k']->total = (int) ceil(($_smarty_tpl->tpl_vars['k']->step > 0 ? 8+1 - (1) : 1-(8)+1)/abs($_smarty_tpl->tpl_vars['k']->step));
if ($_smarty_tpl->tpl_vars['k']->total > 0) {
for ($_smarty_tpl->tpl_vars['k']->value = 1, $_smarty_tpl->tpl_vars['k']->iteration = 1;$_smarty_tpl->tpl_vars['k']->iteration <= $_smarty_tpl->tpl_vars['k']->total;$_smarty_tpl->tpl_vars['k']->value += $_smarty_tpl->tpl_vars['k']->step, $_smarty_tpl->tpl_vars['k']->iteration++) {
$_smarty_tpl->tpl_vars['k']->first = $_smarty_tpl->tpl_vars['k']->iteration === 1;$_smarty_tpl->tpl_vars['k']->last = $_smarty_tpl->tpl_vars['k']->iteration === $_smarty_tpl->tpl_vars['k']->total;?>
    <div class="item">
        <div class='icon_wrapper'><span class="icon sprite check_green"></span></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
    </div>
<?php }
}
}
}
