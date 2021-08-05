<?php
/* Smarty version 3.1.39, created on 2021-05-24 14:33:22
  from 'C:\xampp\htdocs\pdll\views\functions\question.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ab9d1200ed99_48355560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39b2d3ea93e7d48bb215d1b882ab10b038df8a0b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\question.tpl',
      1 => 1621859582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ab9d1200ed99_48355560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('questions', array('Czy muszę sam kupić domenę?','Czy otrzymam gwarancję?','Jakie są dodatkowe koszty?','Ile trwa zrobienie strony?','Ile pracy na mnie czeka?','Czy mogę samodzielnie tworzyć menu?','Jak trudny jest CMS?','Gdzie znajdę pomoc?'));?> 

<?php
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? 7+1 - (0) : 0-(7)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = 0, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration === 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration === $_smarty_tpl->tpl_vars['j']->total;?>
    <div class="question" id="question<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
">
        <div class="question_header">
            <b class="h6 title"><?php echo $_smarty_tpl->tpl_vars['questions']->value[$_smarty_tpl->tpl_vars['j']->value];?>
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
<?php }
}
}
}
