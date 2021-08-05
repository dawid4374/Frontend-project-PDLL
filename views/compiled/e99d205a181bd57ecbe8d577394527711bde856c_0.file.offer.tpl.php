<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:24:38
  from 'C:\xampp\htdocs\pdll\views\functions\offer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a60eb657b634_16704334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99d205a181bd57ecbe8d577394527711bde856c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\offer.tpl',
      1 => 1621495470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/offer_item.tpl' => 1,
  ),
),false)) {
function content_60a60eb657b634_16704334 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <section class="offer">
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
