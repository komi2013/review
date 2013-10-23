
<?=View::factory('tpl/csrf_pc')?>

<?php $i = 0; foreach($arr_qu as $k => $d) { ++$i; ?>

<div id="<?=$i?>" >
  <table>
   <tr><td><textarea id="<?=$i?>_q_txt_val"><?=H::c($d['txt'])?></textarea></td></tr>
   <tr><td> <span id="<?=$i?>_q_txt_err"></span> </td></tr>
  </table>
  <table>
    <tr>
<?php  foreach ($d['cho'] as $kk => $dd) { ++$kk; ?>
    <td><input type="text" value="<?=H::c($dd)?>" class="<?=$i?>_cho_val"></td>
<?php  } ?>
    </tr>
    <tr>
<?php  foreach ($d['cho'] as $kk => $dd) { ++$kk; ?>
    <td><span id="<?=$i?>_<?=$kk?>_cho_err"></span></td>
<?php  } ?>
    </tr>
  </table>
  <br>
  <button class="cho_click">送信</button> &nbsp; &nbsp;<span id="<?=$i?>_success"></span>
  <br>  
  <br>  
</div>

<?php } 
$disp = 1;
while($i < 4) { ++$i;
if($disp==1){?>
  <div id="<?=$i?>"> 
<?php }else{ ?>
  <div id="<?=$i?>" style="display:none;">
<?php }?>
  <table>
   <tr><td><textarea id="<?=$i?>_q_txt_val">質問内容　<?=$i?></textarea></td></tr>
   <tr><td> <span id="<?=$i?>_q_txt_err"></span> </td></tr>
  </table>
  <table>
    <tr>
<?php $ii = 0; while($ii < 5) { ++$ii; ?>
    <td><input type="text" value="選択　<?=$ii?>" class="<?=$i?>_cho_val"></td>
<?php  } ?>
    </tr>
    <tr>
<?php $ii = 0; while($ii < 5) { ++$ii; ?>
    <td><span id="<?=$i?>_<?=$ii?>_cho_err"></span></td>
<?php  } ?>
    </tr>
  </table>
  <br>
  <button class="cho_click">送信</button> &nbsp; &nbsp;<span id="<?=$i?>_success"></span>
  <br>  
  <br>  

</div>

<?php $disp = 2; } ?>

<?php if($free_txt_question){?>
<div id="5">
  <textarea id="5_q_txt_val"><?=H::c($free_txt_question)?></textarea><br>
  <span id="5_success"></span>
  <span id="5_q_txt_err"></span>
  <button id="5_click">送信</button>
</div>
<br>
<?php $disp = 2; }else{
if($disp==1){?>
  <div id="5">
<?php }else{ ?>
  <div id="5" style="display:none;">
<?php }?>
  <textarea id="5_q_txt_val">質問内容　5</textarea><br>
  <span id="5_success"></span>
  <span id="5_q_txt_err"></span>
  <button id="5_click">送信</button>
</div>
<br>
<?php }

if($disp==1){?>
  <a href="/maker/run/?enqu=<?=$_GET['enqu']?>" id="run">配信</a>
<?php }else{ ?>
  <a href="/maker/run/?enqu=<?=$_GET['enqu']?>" id="run" style="display:none;">配信</a>
<?php }?>

<script type="text/javascript">

var post_url_1 = '/maker/review4/';
var enqu = '<?=$_GET["enqu"]?>';
var success = '更新しました';
var arr = [];

var post_url_2 = '/maker/freetxt4/';

</script>

<style type="text/css">

</style>

<script src="/public/maker/review.js"></script>
<script src="/public/maker/free_txt.js"></script>