<?php
/* Smarty version 3.1.39, created on 2021-06-01 09:36:27
  from 'C:\wamp64\www\pdll\views\functions\question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b5ff9bc00189_38869615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ca98163ccacf73b2892cd99e15c0a8494d45caa' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\question.tpl',
      1 => 1622540185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b5ff9bc00189_38869615 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['questions']->value, 'question', false, 'key');
$_smarty_tpl->tpl_vars['question']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->do_else = false;
?>
    <div class="question" id="question<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
        <div class="question_header">
            <b class="h6 title"><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</b>
            <button class="btn question_btn">zwiń</button>
        </div>
        <div class="question_content">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
            commodi quas magnam qui suscipit. In, rem consequuntur
            voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
            enim doloremque debitis possimus.</p>
            <p>Architecto labore similique
            tempora dolore maxime, sunt non numquam odit esse! At, nulla
            voluptates. Laudantium?</p>
        </div>
  </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
