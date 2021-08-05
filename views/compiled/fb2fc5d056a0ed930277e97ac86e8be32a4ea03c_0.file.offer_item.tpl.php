<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:30:25
  from 'C:\xampp\htdocs\pdll\views\functions\offer_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a61011d275a9_23025412',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2fc5d056a0ed930277e97ac86e8be32a4ea03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\offer_item.tpl',
      1 => 1621495821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/project_item.tpl' => 1,
    'file:functions/package_item.tpl' => 1,
  ),
),false)) {
function content_60a61011d275a9_23025412 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 3+1 - (1) : 1-(3)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_title main_title">
            <h3 class="h3">
            <?php if ($_smarty_tpl->tpl_vars['i']->value == 2) {?>
                <div class='label'><span>najszęściej wybierany</span></div>
            <?php }?>
            <span class="primary_text">start</span>www
            </h3>
        </div>
        <div class="description col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_description">
            <div class='icon'>
                <span class="sprite check_green"></span>
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Molestias illum alias in!
            </p>
        </div>
        <div class="views col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_views">
            <span class="views_number">3</span>
            <div class="views_wrapper">
                <b class="h6 title">Widoki w pakiecie:</b>
                <ul>
                    <li>Strona główna</li>
                    <li>Widok podstrony</li>
                    <li>Widok aktualności</li>
                </ul>
            </div>
        </div>
        <div class="choose_project col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_choose_project">
            <p class="h6 title">
                Nowoczesny projekt RWD przystosowany do telefonów/tabletów/PC
            </p>
            <button class="btn list_projects">
                <span class="icon sprite check_black"></span>
                <span class="list_projects_text">wybierz projekt</span>
                <span class="fas fa-chevron-down chevron_down"></span>
            </button>
            <div class="projects_list">
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

            <div class="col<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
_price">
              <div class="price">
                <span class="old_price">2550,-</span>
                <b class="h1 title">1020</b>
                <div>
                  <span>zł netto</span>
                  <span>/ rok</span>
                </div>
              </div>
              <button class="btn" data-toggle="modal" data-target="#bucket_modal">
                <span class="icon sprite bucket"></span>Kup pakiet
              </button>
            </div>
<?php }
}
}
}
