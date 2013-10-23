<?=View::factory('tpl/csrf_pc')?>

<?=H::t($qu->txt)?>

<?php $k = 0; foreach ($qucho as $k => $d) { ++$k; ?>

<a id="<?=$k?>"><?=H::c($d->txt);?></a><br>

<?php } ?>


<script type="text/javascript">
var post_url_1 = '/answer/choice4/';
</script>

<style type="text/css">
span{
 color: red;
}

a{
 color: blue;
 cursor: pointer;
}
</style>

<script src="/public/answer/ing_cho.js"></script>