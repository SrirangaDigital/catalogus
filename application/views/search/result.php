<div class="container">
        <div class="col-md-12 column-5 f-san">

<?php foreach ($data as $row) { ?>

            <div><a target="_blank" href="<?=BASE_URL?>describe/word/<?=$row->page?>/<?=$row->word?>"><?=$viewHelper->processWord($row->word)?></a></div>    

<?php } ?>
        </div>
</div>
