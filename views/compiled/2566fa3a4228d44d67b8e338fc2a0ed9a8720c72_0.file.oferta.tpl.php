<?php
/* Smarty version 3.1.39, created on 2021-05-27 11:52:37
  from 'C:\wamp64\www\pdll\views\templates\oferta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60af8805c93157_68669609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2566fa3a4228d44d67b8e338fc2a0ed9a8720c72' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\templates\\oferta.tpl',
      1 => 1621494732,
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
function content_60af8805c93157_68669609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136813388160af8805c15a66_57058992', 'main');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'main'} */
class Block_136813388160af8805c15a66_57058992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_136813388160af8805c15a66_57058992',
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
                <h3 class="h2 title">Dobre i tanie strony internetowe</h2>
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
