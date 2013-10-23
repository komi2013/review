<?php
$host = $_SERVER['HTTP_HOST'];
?>
<a href="/mypage/answer/"><?=__('My Answer');?></a> &nbsp;
<a href="/mypage/newin/"><?=__('new');?></a>

<table>
  <tr>
    <th><?=__('title');?></th><th>URL</th>
  </tr>

<?php foreach ($enqu as $k => $d) { ?>
  <tr>
    <td><a><?=HTML::chars($d['title']);?></a></td>
    <td>
      <?php if($d['status'] == 0) { ?>
        <a href="/mypage/review/?enqu_id=<?=$k;?>"><?=__('edit');?></a>  
      <?php }elseif($d['status'] == 1) { ?>
        <a href="/answer/?enqu_id=<?=$k;?>&qu_num=0&passwd=<?=$d['passwd'];?>">
        https://<?=$host;?>/answer/?enqu_id=<?=$k;?>&qu_num=0&passwd=<?=$d['passwd'];?>
        </a>
      <?php }elseif($d['status'] == 2) { ?>
        <a><?=__('finish');?></a>  
      <?php } ?>
    </td>

    <td>
    </td>
  </tr>
  <tr>
    <td class="show"> --- <?=__('option');?> ---</td>
    <td class="end_result">
    <a href="/answer/end/?enqu_id=<?=$k;?>&passwd=<?=$d['passwd_end'];?>">
    https://<?=$host;?>/answer/end/?enqu_id=<?=$k;?>&passwd=<?=$d['passwd_end'];?>
    </a>
    </td>
  </tr>

<?php	} ?>

</table>

<a href="/mypage/reviewlist/?enqu_id=<?=++$page;?>"><?=__('next');?></a>
&nbsp;<?=__('page');?>&nbsp;
<a href="/mypage/reviewlist/?enqu_id=<?=$page_end;?>"><?=__('end');?></a>

<script type="text/javascript">

$('.show').toggle(function(){
  $(this).siblings('.end_result').css("display", "block");
//   $('.run').css("display", "none");
},
function(){
  $(this).siblings('.end_result').css("display", "none");
//   $('.run').css("display", "block");
});


</script>

<style type="text/css">

.end_result{
 display: none;
}
.show{
 cursor: pointer;
 text-align: center;
}

</style>