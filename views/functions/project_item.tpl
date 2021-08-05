{foreach from=$projectsDesigns item=design}
    <button data-img="{$design.img.h}" data-name="{$design.name}" class="btn list_item">
        <img src={$design.img.a} alt=""/>
        <span>{$design.name}</span>
    </button>
{/foreach}