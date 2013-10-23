<?php
$host = $_SERVER['HTTP_HOST'];
?>

<a href="/mypage/reviewlist/"><?=__('My Review');?></a>
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

<a href="/mypage/answer/<?=++$page;?>"><?=__('next');?></a>
&nbsp;<?=__('page');?>&nbsp;
<a href="/mypage/answer/<?=$page_end;?>"><?=__('end');?></a>


<script type="text/javascript">


</script>