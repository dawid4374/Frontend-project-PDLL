<div class="modal" role="dialog" id="bucket_modal">
  <div class="modal_wrapper">
      <div class="dialog">
        <div class="header">
          <h2 class="h2 title">Twoje zamówienie: krok 1 z 3</h2>
          <button class="btn close" data-close="modal"><span class="icon fas fa-times"></span></button>
          <p>Skompletuj zamówienie a my zajmiemy się budową strony internetowej dla Twojej działalności</p>
        </div>
        <div class="body">
          <div class="main">
            <div class="col1">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">Wybrany projekt</span>
                </div>
                <div class="col1_content_wrapper">
                {foreach from=$projects item=project}
                <button data-price="{$project.price.current}" class="btn col1_btn {$project.name}" >
                <div class="col_title">
                    <h3 class="h4 title"><span>{$project.name}</span>www:</h3>
                </div>
                <div class="col_content">
                    <div class="description">
                        <div class="icon_wrapper">
                            <span class="sprite check_green"></span>
                        </div>
                        <p>{$project.desc}</p>
                    </div>
                    {if !$project.price.current|floatval}
                    <div class="price individual">
                        <b class="h1 title">{$project.price.current}</b>
                    </div>
                    {else}
                    <div class="price">
                        <b class="h1 title">{$project.price.current}</b>
                        <div>
                            <span>zł netto</span>
                            <span>/ rok</span>
                        </div>
                    </div>
                    {/if}
                </div>
                </button>
                {/foreach}
                </div>

                <!--{include 'functions/modal_packages.tpl'}-->

                <button data-projects='{$projectsJSON}' class="btn change">zmień</button>
            </div>
            <div class="col2">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">Szata graficzna</span>
                    <h4 class="h4 title first"><span></span></h4>
                </div>
                <div class="col_content">
                    <div class="img_wrapper">
                        <img src="" alt=""/>
                    </div>
                </div>
                <div class="projects_list">
                    {include 'functions/project_item.tpl' }
                </div>
                <button class="btn change">zmień</button>
            </div>
            <div class="col3">
                <div class="color_border"></div>
                <div class="col_title">
                    <span class="title_span">usługi</span>
                    <h4 class="h4 title">Dodatkowo:</h4>
                </div>
                <div class="col_content">
                    <button data-price="1199" class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit porrocommodi
                        <span class="price_value">1199,00 zł<span>
                    </button>
                    <button data-price="560" class="btn service_item">
                        Lorem ipsum dolor, sit
                        <span class="price_value">560,00 zł<span>
                    </button>
                    <button data-price="330" class="btn service_item">
                        Lorem ipsum dolor, sit amet consectetur
                        <span class="price_value">330,00 zł<span>
                    </button>
                    <button data-price="220" class="btn service_item">
                        Lorem dolor, sit elit porrocommodi
                        <span class="price_value">220,00 zł<span>
                    </button>
                </div>
            </div>
          </div>
          <div class="footer">
            <div class="color_border"></div>
            <div class="content">
                <span class="title_span">Wartość całego zamówienia:</span>
                <h4 class="title h3 dedyk"></h4>
                <h4 class="title h3 number"><span></span> zł netto</h4>
                <span class="price_secoundary"><span></span> zł brutto)</span>
                <p class="law_info">Przedstawiona oferta ma charakter informacyjny i nie stanowi oferty handlowej w rozumieniu Art.66 par.1 Kodeksu Cywilnego.</p>
            </div>
            <div class="actions">
                <button class="btn cencel" data-close="modal">anuluj</button>
                <button class="btn order"><span class="icon fas fa-check"></span>zamawiam</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>