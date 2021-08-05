<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:07:54
  from 'C:\xampp\htdocs\pdll\views\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a60aca123e94_33302181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '62f6438b466e73535047b3355fb9e2b7ac43f89f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\main.tpl',
      1 => 1621494333,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/footer.tpl' => 1,
    'file:functions/cookies.tpl' => 1,
  ),
),false)) {
function content_60a60aca123e94_33302181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/favico.png" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/css/index.css"/>
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/0cb8abee4f.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body class="<?php echo $_smarty_tpl->tpl_vars['bodyClass']->value;?>
">
    <header class="header">
      <div class="separator">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <a href="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
" class="logo">
        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/logo-poziom.svg"/>
      </a>
      <nav class="nav">
        <ul>
          <li><button class="btn header_link_btn offer_link">Oferta</button></li>
          <li><button class="btn header_link_btn projects_link">Projekty</button></li>
          <li><button class="btn header_link_btn service_link">Usługi</button></li>
          <li><button class="btn header_link_btn faq_link">FAQ</button></li>
          <li><button class="btn header_link_btn contact_link">Kontakt</button></li>
        </ul>
      </nav>
      <div class="actions">
        <button class="btn bucket_circle" data-toggle="modal" data-target="#bucket_modal">
            <span class="icon sprite bucket"></span>
        </button>
        <a class="phone" href="tel:+48773000330">
          <div class="phone_rect">
            <span class="icon sprite phone"></span>
            77 300 03 30
          </div>
        </a>
      </div>
      <button class="hamburger">
        <div class="hamburger_wrapper" aria-label="Menu">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </button>
    </header>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119317352260a60aca121844_18848263', 'main');
?>


      <?php $_smarty_tpl->_subTemplateRender('file:functions/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

      <?php $_smarty_tpl->_subTemplateRender('file:functions/cookies.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo '<script'; ?>

      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>

      type="text/javascript"
      src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/js/script.js"
    ><?php echo '</script'; ?>
>
  </body>
</html>
<?php }
/* {block 'main'} */
class Block_119317352260a60aca121844_18848263 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_119317352260a60aca121844_18848263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'main'} */
}
