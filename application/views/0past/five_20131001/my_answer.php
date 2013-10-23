<?php
$pager_id = Request::current()->param('one');
$lang = Request::current()->param('lang');
$host = $_SERVER['HTTP_HOST'];
?>

<a href="/<?=$lang;?>/myreview/"><?=__('My Review');?></a>
</br>
<table>
  <tr>
    <th><?=__('title');?></th>
    <th>URL</th>
  </tr>

<?php foreach ($ans_arr as $k => $d) { ?>

  <tr>
    <td><?=HTML::chars($d['title']);?></td>
    <td><a href="<?=$d['url'];?>"><?=$d['url'];?></a></td>
  </tr>

<?php } ?>

</table>

<a href="/<?=$lang;?>/myanswer/<?=++$pager_id;?>"><?=__('next');?></a>
&nbsp;<?=__('page');?>&nbsp;
<a href="/<?=$lang;?>/myanswer/<?=$pager_end;?>"><?=__('end');?></a>


<script type="text/javascript">


</script>