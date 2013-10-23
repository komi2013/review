<a><?=$title;?></a></br>
  
<?php foreach($statics as $k => $d) {?>

<div id="<?=$k;?>">
  <a><?=$k;?></a>
  <?=H::t($d['q_txt'])?>
  <table>

  <?php foreach ($d['sum'] as $kk => $dd) { ?>

  <tr>
    <td align="right" width="240"><?=$kk;?></td>
    <td width="240"><button class="graph" style="width:<?=$dd / $d['denominator'] * 240;?>px;"><?=$dd;?></button></td>
  </tr>

  <?php } ?>

  </table>
</div>
</br>

<?php } ?>

<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=1">選択質問 1</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=2">選択質問 2</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=3">選択質問 3</a><br>
<a href="/statics/choice/?enqu=<?=$_GET['enqu']?>&q_num=4">選択質問 4</a><br>

<script type="text/javascript">


</script>

<style type="text/css">
.graph{
  background-color: #99cc00;
}
</style>
