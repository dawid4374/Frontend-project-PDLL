
  <section data-section="offer" class="offer section">
    <div class="container">
      <div class="offer_header">
        <div class="title_img">
          <img class="icon" src="{$publicDomain}static/img/bezpieczne-strony-www.svg"/>
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

        {include 'functions/offer_item.tpl' }

      </div>
      {if empty($hideAdditionalInfo)}
        <div class='additional_info'>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
            commodi quas magnam qui suscipit. In, rem consequuntur
            voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
            enim doloremque debitis possimus. Architecto labore similique
            tempora dolore maxime, sunt non numquam odit esse! At, nulla
            voluptates. Laudantium?
          <p>
        </div>
      {/if}
    </div>
  </section>