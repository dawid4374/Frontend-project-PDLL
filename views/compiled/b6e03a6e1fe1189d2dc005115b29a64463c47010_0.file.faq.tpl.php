<?php
/* Smarty version 3.1.39, created on 2021-05-27 06:46:26
  from 'C:\wamp64\www\pdll\views\functions\faq.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af4042bdee76_76997288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6e03a6e1fe1189d2dc005115b29a64463c47010' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\faq.tpl',
      1 => 1622097774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/question.tpl' => 1,
    'file:functions/question_title.tpl' => 1,
  ),
),false)) {
function content_60af4042bdee76_76997288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section data-section="faq" class="faq section">
    <div class="container">
        <div class="col1">
        <div class="faq_header">
            <div class="section_title">
            <h2 class="h2 title">
                <span class="title_bg">FAQ</span>najczęściej zadawane pytania
            </h2>
            <div class="ckeditor">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
                    commodi quas magnam qui suscipit. In, rem consequuntur
                    voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
                    enim doloremque debitis possimus. Architecto labore similique
                    tempora dolore maxime, sunt non numquam odit esse! At, nulla
                    voluptates. Laudantium?
                </p>
            </div>
            </div>
        </div>
        <div class="questions_wrapper">
            <?php $_smarty_tpl->_subTemplateRender('file:functions/question.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        </div>
        <div class="col2">
            <div class="titles_wrapper">
                <?php $_smarty_tpl->_subTemplateRender('file:functions/question_title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</section><?php }
}
