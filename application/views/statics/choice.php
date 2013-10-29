<a><?=$title;?></a></br>
  
<?php foreach($statics as $k => $d) {?>

<div id="<?=$k;?>">
  <a>選択質問 <?=$k;?></a>
  <?=H::t($d['q_txt'])?>
  <table>

  <?php $i=0; foreach ($d['sum'] as $kk => $dd) { ++$i; ?>

    <?php if(Cookie::get('paid') > 0 OR $i > 2){?>
    
    <tr>
      <td align="right" width="240"><?=$kk;?></td>
      <td width="240"><button id="graph" style="width:<?=$dd / $d['denominator'] * 240;?>px;"><?=$dd;?></button></td>
    </tr>
    
    <?php }else{ ?>
  
    <tr>
      <td align="right" width="240"><?=$kk;?></td>
      <td width="240"><button id="blackbox">無料ではみれません</button></td>
    </tr>
  
    <?php } ?>
  
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
#graph{
  background-color: #99cc00;
}
#blackbox{
  background-color: white;
  width: 240px;
}
</style>
