<?php
/* Smarty version 3.1.39, created on 2021-06-02 12:16:22
  from 'C:\wamp64\www\pdll\views\functions\projects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60b77696bfffb5_52718026',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e88203aa26e563ae866f13aa7ab3aa93e21f1cd1' => 
    array (
      0 => 'C:\\wamp64\\www\\pdll\\views\\functions\\projects.tpl',
      1 => 1622636180,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60b77696bfffb5_52718026 (Smarty_Internal_Template $_smarty_tpl) {
?>  <section data-section="projects" class="projects section">
    <div class="container">
      <div class="projects_header">
        <div class="section_title">
          <h2 class="h2 title">
            <span class="title_bg">Projekty</span>nowoczesne strony internetowe - RWD
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
        <div class="title_img">
          <?php if (empty($_smarty_tpl->tpl_vars['hidePeacock']->value)) {?>
            <img class="icon" src="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
static/img/ladne-strony-internetowe.svg"/>
          <?php }?>
        </div>
      </div>
    </div>

    <button class='btn btn_left'>
      <div class="icon_wrapper">
        <span class="chevron sprite chevron_left_xl"></span>
      </div>
    </button>

    <div class='slider_wrapper'>

      <div class="slider">



        <div class="content_wrap">
        <div class="slider_content">

          <div class='item1_wrapper'>
            <div class="item1">
              <div class='dots'>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="slide">
                <img class="hide_mobile" src="https://picsum.photos/id/236/2000/1200" alt="" />
              </div>
            </div>
          </div>
          <div class='item2_wrapper'>
            <div class="item2">
              <img class="hide_mobile" src="https://picsum.photos/id/236/520/900" alt="" />
            </div>
          </div>

        </div>
        </div>

        <div class="content_wrap">
        <div class="slider_content">

          <div class='item1_wrapper'>
            <div class="item1">
              <div class='dots'>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="slide">
                <img class="hide_mobile" src="https://picsum.photos/id/237/2000/1200" alt="" />
              </div>
            </div>
          </div>
          <div class='item2_wrapper'>
            <div class="item2">
              <img class="hide_mobile" src="https://picsum.photos/id/237/520/900" alt="" />
            </div>
          </div>

        </div>
        </div>

        <div class="content_wrap">
        <div class="slider_content">

          <div class='item1_wrapper'>
            <div class="item1">
              <div class='dots'>
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="slide">
                <img class="hide_mobile" src="https://picsum.photos/id/14/2000/1200" alt="" />
              </div>
            </div>
          </div>
          <div class='item2_wrapper'>
            <div class="item2">
              <img class="hide_mobile" src="https://picsum.photos/id/14/520/900" alt="" />
            </div>
          </div>

        </div>
        </div>

      </div>

    </div>

    <button class='btn btn_right'>
      <div class="icon_wrapper">
        <span class="chevron sprite chevron_right_xl"></span>
      </div>
    </button>

    <div class="btns-wrapper">
      <button class="btn left" id="<?php echo $_smarty_tpl->tpl_vars['projects']->value[1]['name'];?>
" data-target="#bucket_modal" data-toggle="modal">
        <div class="icon_wrapper"><span class="icon sprite bucket"></span></div>
        Kup projekt z pakietem PROwww
      </button>
      <a href="<?php echo $_smarty_tpl->tpl_vars['publicDomain']->value;?>
" class="btn right">Zobacz wszystkie projekty stron internetowych</a>
    </div>
  </section><?php }
}
