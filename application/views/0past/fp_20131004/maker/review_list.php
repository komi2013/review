<?php
$host = $_SERVER['HTTP_HOST'];
$csrf = Text::random('alnum', 16);
Cookie::set('csrf', $csrf);
?>

<a href="/maker/answer/">マイアンサー</a> &nbsp;
<a href="/maker/new3/?csrf=<?=$csrf?>">新規</a>


<table>
  <tr>
    <th>タイトル</th><th>URL</th>
  </tr>

<?php foreach ($enqu as $k => $d) { ?>
  <tr>
    <td><a><?=HTML::chars($d['title']);?></a></td>
    <td>
      <?php if($d['status'] == 0) { ?>
        <a href="/maker/review/?enqu=<?=$k;?>">編集</a>  
      <?php }elseif($d['status'] == 1) { ?>
        <a href="/answer/?enqu=<?=$k;?>&qu_num=0&passwd=<?=$d['passwd'];?>">
        https://<?=$host;?>/answer/?enqu=<?=$k;?>&qu_num=0&passwd=<?=$d['passwd'];?>
        </a>
      <?php }elseif($d['status'] == 2) { ?>
        <a>終了</a>  
      <?php } ?>
    </td>

    <td>
    </td>
  </tr>
  <tr>
    <td id="show">オプション</td>
    <td id="end_result">
    <a href="/answer/end/?enqu=<?=$k;?>&passwd=<?=$d['passwd_end'];?>">
    https://<?=$host;?>/answer/end/?enqu=<?=$k;?>&passwd=<?=$d['passwd_end'];?>
    </a>
    </td>
  </tr>

<?php	} ?>

</table>
<br>
<div id="pager">
<a href="/maker/reviewlist/?page=<?=$next_page;?>">次へ</a>
&nbsp;ページ&nbsp;
<a href="/maker/reviewlist/?page=<?=$page_end;?>">最後</a>
</div>

<br>


<script type="text/javascript">

$('#show').toggle(function(){
  $('#end_result').css("display", "block");
//   $('.run').css("display", "none");
},
function(){
  $('#end_result').css("display", "none");
//   $('.run').css("display", "block");
});


</script>

<style type="text/css">

#end_result{
 display: none;
}
.show{
 cursor: pointer;
 text-align: center;
}

</style>