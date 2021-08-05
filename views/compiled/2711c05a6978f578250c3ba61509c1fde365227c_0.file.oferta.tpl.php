<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:07:54
  from 'C:\xampp\htdocs\pdll\views\templates\oferta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a60aca001064_99519332',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2711c05a6978f578250c3ba61509c1fde365227c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\templates\\oferta.tpl',
      1 => 1621326742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:functions/main_section.tpl' => 1,
    'file:functions/offer.tpl' => 1,
    'file:functions/faq.tpl' => 1,
  ),
),false)) {
function content_60a60aca001064_99519332 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53804921760a60ac9f38e12_90408559', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_53804921760a60ac9f38e12_90408559 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_53804921760a60ac9f38e12_90408559',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<main>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/main_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/offer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hideAdditionalInfo'=>1), 0, false);
?>

    <section class="additional_section">
        <div class="container">
            <div class="img_wrapper">
                <span class="icon sprite_rabit"></span>
            </div>
            <div class="article">
                <h2 class="h2 title">Dobre i tanie strony internetowe</h2>
                <div class="ckeditor">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aspernatur veniam, doloremque sapiente maxime porro quibusdam hic
                    magni aut quia officiis!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Aspernatur veniam, doloremque sapiente maxime porro quibusdam hic
                    magni aut quia officiis optio perferendis earum aliquam, quo
                    itaque odit ex? Impedit, doloremque sapiente maxime porro quibusdam hic
                    magni aut quia officiis optio magni aut quia officiis optio perferendis earum aliquam, quo magni aut quia officiis optio perferendis earum aliquam, perferendis unde!</p>
                </div>
                <div class="attachments">
                    <div class="attachment_item">
                        <div class="pdf_wrapper">
                            <span class="pdf">PDF</span>
                        </div>
                        <p>załącznik do czegoś tam</p>
                        <button class="btn">
                            <span class="icon fas fa-check"></span>
                            pobierz
                        </button>
                    </div>
                    <div class="attachment_item">
                        <div class="pdf_wrapper">
                            <span class="pdf">PDF</span>
                        </div>
                        <p>załącznik do czegoś tam ze skomplikowanym tytułem</p>
                        <button class="btn">
                            <span class="icon fas fa-check"></span>
                            pobierz
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $_smarty_tpl->_subTemplateRender('file:functions/faq.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</main>
<?php
}
}
/* {/block 'main'} */
}
