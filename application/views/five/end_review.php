<?php
$enqu_id = Request::current()->param('one');
$title = HTML::chars($enquete->title);
$title = Text::auto_p($title);
$res_txt = HTML::chars($enquete->end_txt);
$res_txt = Text::auto_p($res_txt);
$res_txt = Text::auto_link_urls($res_txt);
?>

<div>
  <p>
    <a><?=$title;?></a></br>
    <a><?=$u_answered.__(' people answered');?></a></br>
    <a><?=$res_txt;?></a>
  </p>
  
<?php foreach($statics as $k => $d) { if($login OR $k > 3) {?>

<div id="<?=$k;?>">
  <a><?=$k;?></a>
  <?=Text::auto_p(Text::auto_link_urls(HTML::chars($d['q_txt'])));?>
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

  <?php }elseif( $k == 1){ ?>

  <p><?=__('if you login, you can see more');?></p>

<?php } } ?>

<a>5</a>&nbsp;
<a href="/en/end5/<?=$enqu_id;?>/txt/"><?=Text::auto_p(HTML::chars($antxt_txt));?></a>
</div>

<script type="text/javascript">


</script>

<style type="text/css">
.graph{
  background-color: #99cc00;
}
</style>
