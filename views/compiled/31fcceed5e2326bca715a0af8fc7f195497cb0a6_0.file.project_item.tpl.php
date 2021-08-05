<?php
/* Smarty version 3.1.39, created on 2021-06-04 13:49:58
  from 'C:\wamp64\www\pdll\views\functions\project_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba2f86939589_23919677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31fcceed5e2326bca715a0af8fc7f195497cb0a6' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\project_item.tpl',
      1 => 1622814437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60ba2f86939589_23919677 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projectsDesigns']->value, 'design');
$_smarty_tpl->tpl_vars['design']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['design']->value) {
$_smarty_tpl->tpl_vars['design']->do_else = false;
?>
    <button data-img="<?php echo $_smarty_tpl->tpl_vars['design']->value['img']['h'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
" class="btn list_item">
        <img src=<?php echo $_smarty_tpl->tpl_vars['design']->value['img']['a'];?>
 alt=""/>
        <span><?php echo $_smarty_tpl->tpl_vars['design']->value['name'];?>
</span>
    </button>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
