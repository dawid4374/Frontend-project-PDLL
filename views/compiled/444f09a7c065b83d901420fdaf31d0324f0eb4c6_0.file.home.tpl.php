<?php
/* Smarty version 3.1.39, created on 2021-05-18 08:51:18
  from 'C:\xampp\htdocs\pdll\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a363e6533b98_36928406',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '444f09a7c065b83d901420fdaf31d0324f0eb4c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\templates\\home.tpl',
      1 => 1620805325,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/main_section.tpl' => 1,
    'file:functions/offer.tpl' => 1,
    'file:functions/projects.tpl' => 1,
    'file:functions/faq.tpl' => 1,
    'file:functions/bucket_modal.tpl' => 1,
  ),
),false)) {
function content_60a363e6533b98_36928406 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128449903760a363e64b5148_72778364', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_128449903760a363e64b5148_72778364 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_128449903760a363e64b5148_72778364',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/main_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/offer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/projects.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/faq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/bucket_modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</main>
<?php
}
}
/* {/block 'main'} */
}
