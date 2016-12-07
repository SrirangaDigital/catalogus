<div class="container">
	<div class="row">
		<!-- Column 1 -->
		<div class="col-md-12 text-center">
			<ul class="list-inline alphabet">
				<li><a href="<?=BASE_URL?>listing/letter/अ">अ</a></li>
				<li><a href="#">इ</a></li>
				<li><a href="#">उ</a></li>
				<li><a href="#">ऋ</a></li>
				<li><a href="#">ए</a></li>
				<li><a href="#">ओ</a></li>
				<li><a href="#">क</a></li>
				<li><a href="#">ग</a></li>
				<li><a href="#">च</a></li>
				<li><a href="#">ज</a></li>
				<li><a href="#">ट</a></li>
				<li><a href="#">ड</a></li>
				<li><a href="#">त</a></li>
				<li><a href="#">द</a></li>
				<li><a href="#">न</a></li>
				<li><a href="#">प</a></li>
				<li><a href="#">ब</a></li>
				<li><a href="#">म</a></li>
				<li><a href="#">य</a></li>
				<li><a href="#">र</a></li>
				<li><a href="#">ल</a></li>
				<li><a href="#">व</a></li>
				<li><a href="#">श</a></li>
				<li><a href="#">ष</a></li>
				<li><a href="#">स</a></li>
				<li><a href="#">ह</a></li>
               </ul>
		</div>
	</div>
</div>
<div class="container">
        <div class="col-md-12 column-5 f-san">

<?php foreach ($data as $row) { ?>

            <div><a href="<?=BASE_URL?>describe/word/<?=$row->word?>"><?=$viewHelper->processWord($row->word)?></a></div>    

<?php } ?>
        </div>
</div>
