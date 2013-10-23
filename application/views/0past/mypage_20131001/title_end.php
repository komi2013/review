<div>
<button class="run"><?=__('run');?></button>
</div>
</br>
<a class="show">--<?=__('option');?>--</a></br>
</br>
<div class="option">
  <div><button class="apply"><?=__('send');?></button></div>
  <span class="success"><?=__('success');?></br></span>
<div>
<textarea id="title">
<?=HTML::chars($enqu->title);?>
</textarea></br>
<span class="err_title"></span>
</div>
<div>
<textarea id="end_txt">
<?=HTML::chars($enqu->end_txt);?>
</textarea></br>
<span class="err_end_txt"></span>
</div>


<?php if($pre_url){ ?>
<a href="<?=$pre_url;?>"><?=__('pre test');?></a></br>
<?php } ?>
</div>

<script type="text/javascript">

var post_url = '/mypage/titleendin/';
var enqu_id = '<?=$enqu->id;?>';

var arr = [];
$('.apply').click(function() {
  var param = {
    enqu_id : enqu_id,
    title  : $('#title').val(),
    end_txt  : $('#end_txt').val()
  };
  var cli = this;
	$.ajax({type:'POST',dataType:'json',url:post_url,data:param,})
  .always(function(data){
    if(data['chk'] == 1){
      $('.success').fadeIn(1); 
      $('.success').fadeOut(1000);
      $(cli).parent("div").parent("div").css( 'background-color','#e0ffff')
      $(".err_title").text('')
      $(".err_end_txt").text('')
    }else{
      $(".err_title").text(data['title'])
      $(".err_end_txt").text(data['end_txt'])
    }
  });
});

var ok = "<?=__('after run, you can not edit. ').__('are you sure?');?>";
var confirm = "<?=__('confirmation');?>";
$('.run').click(function() {
	jConfirm(ok, confirm, function(r) {
		if(r){
      var param = { run  : 'run' };
    	$.ajax({type:'POST',dataType:'json',url:post_url,data:param})
      .always(function(data){
        if(data['chk'] == 1){
          window.location.replace('/mypage/reviewlist/')
        }else{
          alert(data['err'])
        }
      });
		}
	});
});


$(".option").css("display", "none");

$('.show').toggle(function(){
  $('.option').css("display", "block");
  $('.run').css("display", "none");
},
function(){
  $('.option').css("display", "none");
  $('.run').css("display", "block");
});
</script>

<style type="text/css">
span{
 color: red;
}
-- .run{
--  box-shadow: 1px 1px 5px #aaa;
-- background-color: #C3B9D0;
-- }
.run{
 cursor:pointer;
 background-color:#F5E5F3;
}
.success{
 display:none;
 color:green;
}
.show{
 cursor:pointer
}
</style>

