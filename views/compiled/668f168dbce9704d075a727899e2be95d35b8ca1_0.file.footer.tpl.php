<?php
/* Smarty version 3.1.39, created on 2021-05-20 09:49:07
  from 'C:\xampp\htdocs\pdll\views\functions\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a614730341a7_09799167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '668f168dbce9704d075a727899e2be95d35b8ca1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\footer.tpl',
      1 => 1621496941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a614730341a7_09799167 (Smarty_Internal_Template $_smarty_tpl) {
?><footer class="footer">
    <div class="container">

        <div class="title_img">
        <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/strony_www.svg"/>
        <button class="btn go_up">
            <span class="fas fa-chevron-up"></span>
        </button>
        </div>

        <div class="footer_top">
        <div class="col1">
            <p>Czy otrzymam gwarancję na stronę internetową?</p>
            <h5 class="h4 title">Potrzebujesz porady?</h5>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
            commodi quas magnam qui suscipit. In, rem consequuntur
            voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
            enim doloremque debitis possimus.</p>
            <div class="btns_wrapper">
                <a href="tel: 773000330" class="btn left"><span class="icon sprite phone"></span> 77 300 03 30</a>
                <a href="mailto: biuro@pdl.pl" class="btn right">biuro@pdl.pl</a>
            </div>
        </div>
        <div class="col2">
            <p>Chcesz być informowany na bieżąco - zapisz się do</p>
            <h5 class="h4 title">Newslettera</h5>
            <form action="#">
            <div class="agreement">
                <div class="content">
                <label>
                    <input type="checkbox" value="" id="newsletter_agreement" />
                    <div class="check">
                    <span class="icon"></span>
                    </div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
                    dolorum ullam quos voluptatum veniam, quidem corrupti, ipsa
                    asperiores libero sint soluta voluptatem at eum molestiae
                    quia ab ratione dolorem, dolores dolor cum explicabo
                    praesentium aliquam reiciendis eaque! Numquam sed ipsam
                    harum aliquid, alias sequi sit sapiente at consequatur,
                    dicta nulla? Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Culpa enim delectus, minima officiis
                    excepturi sunt veritatis. Commodi totam cumque
                    officia!
                </label>
                </div>
                </div>
                <div class="email_wrapper">
                <div class="email input">
                    <label>
                    <span class="icon sprite person"></span>
                    <input type="text" placeholder=" " />
                    <span class="description">Twój adres e-mail</span>
                    </label>
                </div>
                <button class="btn send_btn" type="submit">
                    <span class="icon sprite message"></span>
                    Zapisz się
                </button>
                </div>
            </form>
        </div>
        </div>
    </div>
    <div class="separator">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="links">
        <a href="#">Artykuły</a>
        <a href="#">Strony internetowe</a>
        <a href="#">Projekty graficzne</a>
        <a href="#">Polityka prywatności</a>
        <a href="#">Regulamin zamówień</a>
        <a href="#">Kontakt</a>
    </div>
    <div class="socials">
        <a class="social" href="#"><span class="fab fa-facebook-f"></span></a>
        <a class="social" href="#"><span class="fab fa-instagram"></span></a>
        <a class="social" href="#"><span class="fab fa-pinterest-p"></span></a>
    </div>
    <div class="copy">
        <p>&copy 2021 CG2 sp. z o.o. ul. Drobiarska 2A, 45-410 Opole</p>
    </div>
</footer><?php }
}
