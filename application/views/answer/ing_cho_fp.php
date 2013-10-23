<?=H::t($qu->txt)?>

<?php $k = 0; foreach ($qucho as $k => $d) { ++$k; ?>

&nbsp;<a href="/answer/ingfp?cho_num=<?=$k?>&encry=<?=$encry?>"><?=H::c($d->txt);?></a>
<br>

<?php } ?>
