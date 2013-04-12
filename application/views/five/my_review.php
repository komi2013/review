<?php
$pager_id = Request::current()->param('one');
$lang = Request::current()->param('lang');
$host = $_SERVER['HTTP_HOST'];
?>
<a href="/<?=$lang;?>/myanswer/"><?=__('My Answer');?></a> &nbsp;
<a href="/<?=$lang;?>/in/new/review/"><?=__('new');?></a>

<table>
  <tr>
    <th><?=__('title');?></th><th>URL</th>
  </tr>

<?php foreach ($enqu as $k => $d) { ?>
  <tr>
    <td><a><?=HTML::chars($d['title']);?></a></td>
    <td>
      <?php if($d['status'] == 0) { ?>
        <a href="/<?=$lang;?>/review/<?=$k;?>"><?=__('edit');?></a>  
      <?php }elseif($d['status'] == 1) { ?>
        <a href="/<?=$lang;?>/ans5/<?=$k;?>/0/<?=$d['passwd'];?>/">
        https://<?=$host;?>/<?=$lang;?>/ans5/<?=$k;?>/0/<?=$d['passwd'];?>/
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
    <a href="/<?=$lang;?>/end5/<?=$k;?>/<?=$d['passwd_end'];?>/">
    https://<?=$host;?>/<?=$lang;?>/end5/<?=$k;?>/<?=$d['passwd_end'];?>/
    </a>
    </td>
  </tr>

<?php	} ?>

</table>

<a href="/<?=$lang;?>/myreview/<?=++$pager_id;?>"><?=__('next');?></a>
&nbsp;<?=__('page');?>&nbsp;
<a href="/<?=$lang;?>/myreview/<?=$pager_end;?>"><?=__('end');?></a>

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