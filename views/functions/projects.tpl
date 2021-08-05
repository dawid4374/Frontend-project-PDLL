  <section data-section="projects" class="projects section">
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
          {if empty($hidePeacock)}
            <img class="icon" src="{$publicDomain}static/img/ladne-strony-internetowe.svg"/>
          {/if}
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
      <button class="btn left" id="{$projects[1]['name']}" data-target="#bucket_modal" data-toggle="modal">
        <div class="icon_wrapper"><span class="icon sprite bucket"></span></div>
        Kup projekt z pakietem PROwww
      </button>
      <a href="{$publicDomain}" class="btn right">Zobacz wszystkie projekty stron internetowych</a>
    </div>
  </section>