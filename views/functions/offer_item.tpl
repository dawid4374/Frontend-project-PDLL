{foreach from=$projects key=key item=project}
        <div class="col{$key+1}_title main_title">
            <h3 class="h3 project_title">
            {if $key+1==2}
                <div class='label'><span>najszęściej wybierany</span></div>
            {/if}
            <span class="primary_text">{$project.name}</span>www
            </h3>
        </div>
        <div class="description col{$key+1}_description">
            <div class='icon'>
                <span class="sprite check_green"></span>
            </div>
            <p>{$project.desc}</p>
        </div>
        <div class="views col{$key+1}_views">
            <span class="views_number">3</span>
            <div class="views_wrapper">
                <b class="h6 title">Widoki w pakiecie:</b>
                <ul>
                    {foreach from=$project.views item=item}
                      <li>{$item}</li>
                    {/foreach}
                </ul>
            </div>
        </div>
        <div class="choose_project col{$key+1}_choose_project">
            <p class="h6 title">
                Nowoczesny projekt RWD przystosowany do telefonów/tabletów/PC
            </p>
            <button class="btn list_projects" >
                <span class="icon sprite check_black"></span>
                <span class="list_projects_text">wybierz projekt</span>
                <span class="fas fa-chevron-down chevron_down"></span>
            </button>
            <div class="projects_list" data-col="{$key+1}">
              {include 'functions/project_item.tpl' }
            </div>
        </div>

        <div class="packages">
              <h4 class="packages_title">Każdy z pakietów posiada:</h4>
              <div class="packages_wrapper">

                {include 'functions/package_item.tpl' }

              </div>
            </div>

            <div class="col{$key+1}_price">
            {if !$project.price.current|floatval}
              <div class="price individual">
                <b class="h1 title">{$project.price.current}</b>
              </div>
              <b>{$project.price.old}</b>
            {else}
              <div class="price">
                <span class="old_price">{$project.price.old},-</span>
                <b class="h1 title">{$project.price.current}</b>
                <div>
                  <span>zł netto</span>
                  <span>/ rok</span>
                </div>
              </div>
            {/if}
              <button class="btn" id="{$project.name}" data-toggle="modal" data-target="#bucket_modal" data-col="{$key+1}">
                <span class="icon sprite bucket"></span>Kup pakiet
              </button>
            </div>
{/foreach}
