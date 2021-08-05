<?php
/* Smarty version 3.1.39, created on 2021-05-27 06:46:26
  from 'C:\wamp64\www\pdll\views\functions\offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af4042ab9814_22563365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ebf2eb892b9251e12062dfbe07fcf965560fb87' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\offer.tpl',
      1 => 1622097774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/offer_item.tpl' => 1,
  ),
),false)) {
function content_60af4042ab9814_22563365 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <section data-section="offer" class="offer section">
    <div class="container">
      <div class="offer_header">
        <div class="title_img">
          <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/bezpieczne-strony-www.svg"/>
        </div>
        <div class="section_title">
          <h2 class="h2 title">
            <span class="title_bg">Oferta</span>dobre i tanie strony
            internetowe
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
      <div class="offer_table">

        <?php $_smarty_tpl->_subTemplateRender('file:functions/offer_item.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      </div>
      <?php if (empty($_smarty_tpl->tpl_vars['hideAdditionalInfo']->value)) {?>
        <div class='additional_info'>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
            commodi quas magnam qui suscipit. In, rem consequuntur
            voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
            enim doloremque debitis possimus. Architecto labore similique
            tempora dolore maxime, sunt non numquam odit esse! At, nulla
            voluptates. Laudantium?
          <p>
        </div>
      <?php }?>
    </div>
  </section><?php }
}
