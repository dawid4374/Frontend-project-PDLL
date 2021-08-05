<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="{$publicDomain}static/img/favico.png" />
    <link rel="stylesheet" href="{$publicDomain}static/css/index.css"/>
    <script src="https://kit.fontawesome.com/0cb8abee4f.js" crossorigin="anonymous"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <title>{$title}</title>
  </head>
  <body class="{$bodyClass}">
    <header class="header">
      <div class="separator">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
      <a href="{$publicDomain}" class="logo">
        <img class="icon" src="{$publicDomain}static/img/logo-poziom.svg"/>
      </a>
      <nav class="nav">
        <ul>
          <li><button data-section="offer" class="btn header_link_btn offer_link">Oferta</button></li>
          <li><button data-section="projects" class="btn header_link_btn projects_link">Projekty</button></li>
          <li><button data-section="faq" class="btn header_link_btn faq_link">FAQ</button></li>
          <li><button data-section="contact" class="btn header_link_btn contact_link">Kontakt</button></li>
        </ul>
      </nav>
      <div class="actions">
        <button class="btn bucket_circle" data-toggle="modal" data-target="#bucket_modal">
          <div>
            <span class="icon sprite bucket"></span>
          </div>
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

    {block name = main}{/block}

      {include 'functions/footer.tpl' }

      {include 'functions/cookies.tpl' }

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script
      type="text/javascript"
      src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script
      type="text/javascript"
      src="{$publicDomain}static/js/script.js"
    ></script>
  </body>
</html>
