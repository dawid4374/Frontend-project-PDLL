{foreach from=$questions key=key item=question}
    <a href='#question{$key}' data-questions="{$questions|@count}" class="title_content title_content{$key}">
        <span class="title">{$question}</span>
    </a>
{/foreach}