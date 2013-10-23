<?php
//   public function h($char)
//   {
//     return HTML::chars($char);
//   }
// 
//   public function t($char)
//   {
//     $char = HTML::chars($char);
//     $char = Text::auto_p($char);
//     return Text::auto_link_urls($char);
//   }
// echo new H('test');
?>

<?=View::factory('tpl/csrf')?>

<?php foreach($cho_arr as $k => $d) { ?>

<div id="<?=$k;?>" style=”display:<?=$qu_disp[$k]['none']?>”>

  <textarea><?=H::c($qu_arr[$k])?></textarea></br>
  <span></span>

<?php  foreach ($d as $kk => $dd) { ++$kk; ?>
    <input type="text" value="<?=HTML::chars($dd)?>">
    <span></span>
<?php  } ?>

  <button>送信</button>
  </br>  
  </br>
</div>
<?php } ?>

<div id="5" class="<?=$qu_disp[$k]['none'];?>">
  <textarea><?=HTML::chars($qu_arr[5]);?></textarea></br>
  <span class="freetxt"></span></br>
  <span class="success">更新しました</br></span>
  <button class="txt_sin">送信</button>
</div>

<a href="/maker/run/?enqu=<?=$_GET['enqu']?>">配信</a>

<script type="text/javascript">

var post_url = '/maker/review4/';
var enqu = '<?=$_GET["enqu"]?>';
var arr = [];
$('div').children('.choice').click(function() {
  $(this).siblings('.cho_txt').each(function(i){
    arr[i] = $(this).val();
  });
  var param = {
    csrf   : $('#csrf input').val(),
    enqu   : enqu,
    q_txt  : $(this).siblings('textarea').val(),
    q_num  : $(this).parent('div').attr('id'),
    choice : arr
  };
  var cli = this;
  var disp = eval($(this).parent('div').attr('id')) + 1;
  $.post(post_url,param,function(data) {
    if(data['chk'] == 1){
      $('.success').fadeIn(10); 
      $('.success').fadeOut(1000);
      $('#csrf input').val(data['csrf']);
      $(cli).parent("div").css( 'background-color','#e0ffff');
      $('#'+disp).css("display", "block");

      $(cli).siblings(".q_txt").text('');
      $(cli).siblings('.cho_1').text('');
      $(cli).siblings('.cho_2').text('');
      $(cli).siblings('.cho_3').text('');
      $(cli).siblings('.cho_4').text('');
      $(cli).siblings('.cho_5').text('');
    }else{
      $(cli).siblings(".q_txt").text(data['q_txt']);
      $(cli).siblings('.cho_1').text(data['cho_1']);
      $(cli).siblings('.cho_2').text(data['cho_2']);
      $(cli).siblings('.cho_3').text(data['cho_3']);
      $(cli).siblings('.cho_4').text(data['cho_4']);
      $(cli).siblings('.cho_5').text(data['cho_5']);
    }
  }, "json")
});

var post_q_txt = '/maker/freetxt4/';
$('.txt_sin').click(function() {
  var param = {
    enqu   : enqu,
    q_txt  : $(this).siblings('textarea').val(),
//     txt_sin  : "for isset",
//     q_num  : $(this).parent('div').attr('id'),
  };
  var cli = this;
	$.ajax({type:'POST',dataType:'json',url:post_q_txt,data:param})
  .always(function(data){
    if(data['chk'] == 1){
      $(cli).siblings('.success').fadeIn(10); 
      $(cli).siblings('.success').fadeOut(1000);
      $(cli).parent("div").css( 'background-color','#e0ffff')
    } else {
      $(cli).siblings(".freetxt").text(data['q_txt'])
    }
  });
});

</script>

<style type="text/css">
span{
 color: red
}
.success{
 display: none;
 color: green;
}
.qu_disp_none{
 display: none;
}
</style>
