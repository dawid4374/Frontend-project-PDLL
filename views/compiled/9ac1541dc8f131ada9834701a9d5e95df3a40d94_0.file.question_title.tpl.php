<?php
/* Smarty version 3.1.39, created on 2021-06-04 09:06:39
  from 'C:\wamp64\www\pdll\views\functions\question_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b9ed1fc7ddd5_04622668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac1541dc8f131ada9834701a9d5e95df3a40d94' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\question_title.tpl',
      1 => 1622797596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b9ed1fc7ddd5_04622668 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, 'key');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
    <a href='#question<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' data-questions="<?php echo count($_smarty_tpl->tpl_vars['questions']->value);?>
" class="title_content title_content<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <span class="title"><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</span>
    </a>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
