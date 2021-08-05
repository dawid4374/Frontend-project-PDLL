<?php
/* Smarty version 3.1.39, created on 2021-06-04 13:28:24
  from 'C:\wamp64\www\pdll\views\functions\offer_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba2a7819f697_76569040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9388bb43aea358d8395ab0b51f17999cabd9663' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\offer_item.tpl',
      1 => 1622813296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/project_item.tpl' => 1,
    'file:functions/package_item.tpl' => 1,
  ),
),false)) {
function content_60ba2a7819f697_76569040 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project', false, 'key');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>
        <div class="col<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
_title main_title">
            <h3 class="h3 project_title">
            <?php if ($_smarty_tpl->tpl_vars['key']->value+1 == 2) {?>
                <div class='label'><span>najszęściej wybierany</span></div>
            <?php }?>
            <span class="primary_text"><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</span>www
            </h3>
        </div>
        <div class="description col<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
_description">
            <div class='icon'>
                <span class="sprite check_green"></span>
            </div>
            <p><?php echo $_smarty_tpl->tpl_vars['project']->value['desc'];?>
</p>
        </div>
        <div class="views col<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
_views">
            <span class="views_number">3</span>
            <div class="views_wrapper">
                <b class="h6 title">Widoki w pakiecie:</b>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['project']->value['views'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                      <li><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
        <div class="choose_project col<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
_choose_project">
            <p class="h6 title">
                Nowoczesny projekt RWD przystosowany do telefonów/tabletów/PC
            </p>
            <button class="btn list_projects" >
                <span class="icon sprite check_black"></span>
                <span class="list_projects_text">wybierz projekt</span>
                <span class="fas fa-chevron-down chevron_down"></span>
            </button>
            <div class="projects_list" data-col="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:functions/project_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            </div>
        </div>

        <div class="packages">
              <h4 class="packages_title">Każdy z pakietów posiada:</h4>
              <div class="packages_wrapper">

                <?php $_smarty_tpl->_subTemplateRender('file:functions/package_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

              </div>
            </div>

            <div class="col<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
_price">
            <?php if (!floatval($_smarty_tpl->tpl_vars['project']->value['price']['current'])) {?>
              <div class="price individual">
                <b class="h1 title"><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['current'];?>
</b>
              </div>
              <b><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['old'];?>
</b>
            <?php } else { ?>
              <div class="price">
                <span class="old_price"><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['old'];?>
,-</span>
                <b class="h1 title"><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['current'];?>
</b>
                <div>
                  <span>zł netto</span>
                  <span>/ rok</span>
                </div>
              </div>
            <?php }?>
              <button class="btn" id="<?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" data-toggle="modal" data-target="#bucket_modal" data-col="<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
">
                <span class="icon sprite bucket"></span>Kup pakiet
              </button>
            </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
