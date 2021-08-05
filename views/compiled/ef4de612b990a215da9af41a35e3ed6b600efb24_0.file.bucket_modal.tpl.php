<?php
/* Smarty version 3.1.39, created on 2021-06-04 11:22:56
  from 'C:\wamp64\www\pdll\views\functions\bucket_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60ba0d1074e143_32555949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef4de612b990a215da9af41a35e3ed6b600efb24' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\bucket_modal.tpl',
      1 => 1622805774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/modal_packages.tpl' => 1,
    'file:functions/project_item.tpl' => 1,
  ),
),false)) {
function content_60ba0d1074e143_32555949 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" role="dialog" id="bucket_modal">
  <div class="modal_wrapper">
      <div class="dialog">
        <div class="header">
          <h2 class="h2 title">Twoje zamówienie: krok 1 z 3</h2>
          <button class="btn close" data-close="modal"><span class="icon fas fa-times"></span></button>
          <p>Skompletuj zamówienie a my zajmiemy się budową strony internetowej dla Twojej działalności</p>
        </div>
        <div class="body">
          <div class="main">
            <div class="col1">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">Wybrany projekt</span>
                </div>
                <div class="col1_content_wrapper">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projects']->value, 'project');
$_smarty_tpl->tpl_vars['project']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->do_else = false;
?>
                <button data-price="<?php echo $_smarty_tpl->tpl_vars['project']->value['price']['current'];?>
" class="btn col1_btn <?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
" >
                <div class="col_title">
                    <h3 class="h4 title"><span><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</span>www:</h3>
                </div>
                <div class="col_content">
                    <div class="description">
                        <div class="icon_wrapper">
                            <span class="sprite check_green"></span>
                        </div>
                        <p><?php echo $_smarty_tpl->tpl_vars['project']->value['desc'];?>
</p>
                    </div>
                    <?php if (!floatval($_smarty_tpl->tpl_vars['project']->value['price']['current'])) {?>
                    <div class="price individual">
                        <b class="h1 title"><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['current'];?>
</b>
                    </div>
                    <?php } else { ?>
                    <div class="price">
                        <b class="h1 title"><?php echo $_smarty_tpl->tpl_vars['project']->value['price']['current'];?>
</b>
                        <div>
                            <span>zł netto</span>
                            <span>/ rok</span>
                        </div>
                    </div>
                    <?php }?>
                </div>
                </button>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <!--<?php $_smarty_tpl->_subTemplateRender('file:functions/modal_packages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>-->

                <button data-projects='<?php echo $_smarty_tpl->tpl_vars['projectsJSON']->value;?>
' class="btn change">zmień</button>
            </div>
            <div class="col2">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">Szata graficzna</span>
                    <h4 class="h4 title first"><span></span></h4>
                </div>
                <div class="col_content">
                    <div class="img_wrapper">
                        <img src="" alt=""/>
                    </div>
                </div>
                <div class="projects_list">
                    <?php $_smarty_tpl->_subTemplateRender('file:functions/project_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
                <button class="btn change">zmień</button>
            </div>
            <div class="col3">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">usługi</span>
                    <h4 class="h4 title">Dodatkowo:</h4>
                </div>
                <div class="col_content">
                    <button data-price="1199" class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit porrocommodi
                        <span class="price_value">1199,00 zł<span>
                    </button>
                    <button data-price="560" class="btn service_item">
                        Lorem ipsum dolor, sit
                        <span class="price_value">560,00 zł<span>
                    </button>
                    <button data-price="330" class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur
                        <span class="price_value">330,00 zł<span>
                    </button>
                    <button data-price="220" class="btn service_item">
                        Lorem dolor, sit elit porrocommodi
                        <span class="price_value">220,00 zł<span>
                    </button>
                </div>
            </div>
          </div>
          <div class="footer">
            <div class="color_border"></div>
            <div class="content">
                <span class="title_span">Wartość całego zamówienia:</span>
                <h4 class="title h3 dedyk"></h4>
                <h4 class="title h3 number"><span></span> zł netto</h4>
                <span class="price_secoundary"><span></span> zł brutto)</span>
                <p class="law_info">Przedstawiona oferta ma charakter informacyjny i nie stanowi oferty handlowej w rozumieniu Art.66 par.1 Kodeksu Cywilnego.</p>
            </div>
            <div class="actions">
                <button class="btn cencel" data-close="modal">anuluj</button>
                <button class="btn order"><span class="icon fas fa-check"></span>zamawiam</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div><?php }
}
