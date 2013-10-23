<?php
$https = isset($_SERVER['HTTPS'])? 'https' : 'http';
$domain = $https.'//'.$_SERVER['HTTP_HOST'];
$csrf = Text::random('alnum', 16);
Cookie::set('csrf', $csrf);
?>

<a href="/maker/answer/">マイアンサー</a> &nbsp;
<a href="/maker/new3/?csrf=<?=$csrf?>">新規</a><br><br>


<table id="head_enqu">
  <tr>
    <td>タイトル</td> <td>ステータス / 編集、統計URL</td>
  </tr>
  <tr>
    <td>アンケートURL</td> <td>アンケートURL　API</td>
  </tr>
</table>
<br>
<?php foreach ($enqu as $k => $d) { ?>
<table>
  <tr>
    <td><a><?=H::c($d['title']);?></a></td>
    <td>
      <?php if($d['status'] == 0) { ?>
        <a>編集中</a> <a href="/maker/review/?enqu=<?=$k?>">編集</a>
      <?php }elseif($d['status'] == 1) { ?>
        <a>アンケート中</a> <a href="/statics/txt?enqu=<?=$k?>">統計結果</a>
      <?php }elseif($d['status'] == 2) { ?>
        <a>終了</a>  
      <?php } ?>
    </td>
  </tr>
  <tr><td colspan=2></td> </tr>
  <tr>
    <td>
      <?php if($d['status'] == 1) { ?>
        <a href="/answer/start3/?enqu=<?=$k;?>&passwd=<?=$d['passwd']?>">
        <?=$domain?>/answer/start3/?enqu=<?=$k?>&passwd=<?=$d['passwd']?>
        </a>
      <?php } ?>
    </td>
    <td>
      <?php if($d['status'] == 1) { ?>
        <a href="/answerapi/start5/?enqu=<?=$k;?>&passwd=<?=$d['passwd']?>">
        <?=$domain?>/answerapi/start5/?enqu=<?=$k?>&passwd=<?=$d['passwd']?>
        </a>
      <?php } ?>
    </td>
  </tr>
</table>
<br>
<?php	} ?>

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

table{
 /*border: 1px solid #000;*/
 background-color: #f5f5dc;
}

td{
 width: 350px;
 border-width: 0;
}
#head_enqu{
 text-align: center;
 background-color: #bfbfdf; 
}
.line{
 text-align: center;
}
</style>