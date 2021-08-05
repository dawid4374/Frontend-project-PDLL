<?php
/* Smarty version 3.1.39, created on 2021-05-20 10:01:45
  from 'C:\xampp\htdocs\pdll\views\functions\bucket_modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a61769689fd1_07303527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3cd23b7ed12c3d2f3fe824ccbc51154cb925220a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\bucket_modal.tpl',
      1 => 1621497690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a61769689fd1_07303527 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <span class="title_span">Wybrany pakiet</span>
                    <h3 class="h4 title"><span>Start</span>www:</h3>
                </div>
                <div class="col_content">
                    <div class="description">
                        <div class="icon_wrapper">
                            <span class="sprite check_green"></span>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porrocommodi quas magnam qui suscipit.</p>
                    </div>
                    <div class="price">
                        <b class="h1 title">1020</b>
                        <div>
                            <span>zł netto</span>
                            <span>/ rok</span>
                        </div>
                    </div>
                </div>
                <button class="btn change">zmień</button>
            </div>
            <div class="col2">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">Szata graficzna</span>
                    <h4 class="h4 title"><span>Rwd</span>#09:</h4>
                </div>
                <div class="col_content">
                    <div class="img_wrapper">
                        <img src="https://picsum.photos/id/236/300/200" alt=" "/>
                    </div>
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
                    <button class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit porrocommodi
                        <span class="price_value">1199,00 zł<span>
                    </button>
                    <button class="btn service_item">
                        Lorem ipsum dolor, sit
                        <span class="price_value">560,00 zł<span>
                    </button>
                    <button class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur
                        <span class="price_value">330,00 zł<span>
                    </button>
                    <button class="btn service_item">
                        Lorem dolor, sit elit porrocommodi
                        <span class="price_value">220,00 zł<span>
                    </button>
                </div>
                <button class="btn change">zmień</button>
            </div>
          </div>
          <div class="footer">
            <div class="color_border"></div>
            <div class="content">
                <span class="title_span">Wartość całego zamówienia:</span>
                <h4 class="title h3">2579,00 zł netto <span>(3172,17 zł brutto)</span></h4>
                <p class="law_info">Przedstawiona oferta ma charakter informacyjny i nie stanowi oferty handlowej w rozumieniu Art.66 par.1 Kodeksu Cywilnego.</p>
            </div>
            <div class="actions">
                <button class="btn cencel">anuluj</button>
                <button class="btn order"><span class="icon fas fa-check"></span>zamawiam</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div><?php }
}
