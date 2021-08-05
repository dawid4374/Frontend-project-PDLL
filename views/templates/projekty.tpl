{extends file="main.tpl"} {block name = main}
<main>

    {include 'functions/main_section.tpl' }

    {include 'functions/projects.tpl' hidePeacock=1}

    {include 'functions/projects.tpl' hidePeacock=1}

    {include 'functions/projects.tpl' hidePeacock=1}

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

    {include 'functions/faq.tpl' }


</main>
{/block}