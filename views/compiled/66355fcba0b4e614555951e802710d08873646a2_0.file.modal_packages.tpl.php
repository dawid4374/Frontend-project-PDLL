<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:09:30
  from 'C:\wamp64\www\pdll\views\functions\modal_packages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af7dea0e7d88_50941689',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66355fcba0b4e614555951e802710d08873646a2' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\modal_packages.tpl',
      1 => 1622113768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60af7dea0e7d88_50941689 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>

    <div class="col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_title">
        <span class="title_span">Pakiet do wyboru</span>
        <h3 class="h4 project_title title"><span>Start</span>www:</h3>
    </div>
    <div class="col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_description description">
        <div class="icon_wrapper">
            <span class="sprite check_green"></span>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porrocommodi quas magnam qui suscipit.</p>
    </div>
    <div class="col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_price price">
        <b class="h1 title">1020</b>
        <div>
            <span>zł netto</span>
            <span>/ rok</span>
        </div>
    </div>

<?php }
}
}
}
