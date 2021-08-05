<?php
/* Smarty version 3.1.39, created on 2021-05-12 07:42:07
  from 'C:\wamp64\www\pdll\views\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609b86cfbc1564_60833173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2236314c03b57ef7691baa090320b04e08af690' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\templates\\home.tpl',
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
function content_609b86cfbc1564_60833173 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1378593169609b86cfbb3476_09161540', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_1378593169609b86cfbb3476_09161540 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1378593169609b86cfbb3476_09161540',
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
