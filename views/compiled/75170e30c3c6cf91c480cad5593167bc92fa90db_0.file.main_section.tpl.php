<?php
/* Smarty version 3.1.39, created on 2021-05-18 14:51:13
  from 'C:\xampp\htdocs\pdll\views\functions\main_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a3b841021df6_95284289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75170e30c3c6cf91c480cad5593167bc92fa90db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\pdll\\views\\functions\\main_section.tpl',
      1 => 1621342237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a3b841021df6_95284289 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="main_section">
    <div class="container">
      <div class="col1">
        <div class="logo">
          <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/logo.svg"/>
        </div>
        <h1 class="h1 title">Strony internetowe Opole</h1>
        <div class="ckeditor">
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus
            ratione optio similique repudiandae dolores quos quam perspiciatis
            tempore odit dolorem, ipsa nihil provident velit! Tempora!
          </p>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aspernatur veniam, doloremque sapiente maxime porro quibusdam hic
            magni aut quia officiis optio perferendis earum aliquam, quo
            itaque odit ex? Impedit, unde!
          </p>
        </div>
        <div class="actions">
          <button class="btn order_btn">
            <span class="icon sprite label"></span>
            Zamów stronę
          </button>
          <a class="btn projects_btn" href="#">
            <span class="icon sprite img"></span>
            Zobacz projekty
          </a>
        </div>
      </div>
      <div class="col2">
        <div class="col2_bg"></div>
        <h2 class="h2 title">Napisz do nas</h2>
        <p class="form_lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam,
          beatae excepturi ut natus accusantium necessitatibus.
        </p>


        <form action="#" name="registration">
          <div class="email input">
            <label>
              <span class="icon sprite person_purple"></span>
              <input type="email" name="email" required placeholder=" " autocomplete="off"/>
              <span class="description">Twój adres e-mail</span>
            </label>
          </div>
          <div class="company_name input">
            <label>
              <span class="icon sprite check_purple"></span>
              <input type="text" name="companyName" required placeholder=" " autocomplete="off" />
              <span class="description">Nazwa firmy lub aktualna strona www</span>
            </label>
          </div>
          <div class="project_description input">
            <label>
              <span class="icon sprite add"></span>
              <textarea class="description_enable" name="description" required placeholder=" " autocomplete="off"></textarea>
              <span class="description">Dodatkowy opis projektu</span>
            </label>
          </div>
          <div class="agreement">
            <div class="content">
              <label for="agreement">
                <input type="checkbox" name="agreement" value="" id="agreement" />
                <div class="check">
                  <span class="icon"></span>
                </div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam
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
            <button class="btn send_btn" type="submit">
              <span class="icon sprite message"></span>
              wyślij
            </button>
        </form>

      </div>
    </div>
    <div class="icon_wrapper">
      <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/szybkie-strony.svg"/>
    </div>

  </section><?php }
}
