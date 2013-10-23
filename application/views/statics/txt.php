<?=H::t($title)?><br>
<?=H::t($q_txt)?><br>

<?php foreach ($antxt as $k => $d) { ?>
  <div class="antxt">  
    <?=H::t($d->txt)?>
  </div>   
<?php } ?>
<br>

<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=1">選択質問 1</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=2">選択質問 2</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=3">選択質問 3</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=4">選択質問 4</a><br>

<script type="text/javascript">


</script>

<style type="text/css">

.antxt{
 border-bottom: 3px double #008000;
}
</style>
