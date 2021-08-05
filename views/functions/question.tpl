{foreach from=$questions key=key item=question}
    <div class="question" id="question{$key}">
        <div class="question_header">
            <b class="h6 title">{$question}</b>
            <button class="btn question_btn">zwiń</button>
        </div>
        <div class="question_content">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Porro
            commodi quas magnam qui suscipit. In, rem consequuntur
            voluptates nam iste voluptatum autem eligendi, ex adipisci nisi
            enim doloremque debitis possimus.</p>
            <p>Architecto labore similique
            tempora dolore maxime, sunt non numquam odit esse! At, nulla
            voluptates. Laudantium?</p>
        </div>
  </div>
{/foreach}