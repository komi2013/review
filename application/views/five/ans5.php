<?=Text::auto_p(Text::auto_link_urls(HTML::chars($qu->q_txt)));?>

<?php $k = 0; foreach ($qucho as $k => $d) { ++$k; ?>
<div id="<?=$k;?>">
  <a><?=HTML::chars($d->txt);?></a></br>
  </br>
</div>
<?php } if ($k == 0) { ?>

<div id="5">
  <textarea><?=__('your opinion');?></textarea>
  </br>
  <a><?=__('send');?></a>
</div>

<?php }
$enqu_id = Request::current()->param('one');
$q_num = Request::current()->param('two');
$lang = Request::current()->param('lang');
$next = $q_num + 1;
?>



<script type="text/javascript">

var post_url = '<?=$post_url;?>';

$('a').click(function() {
  var param = {
      id:$(this).parents('div').attr('id'),
      txt:$(this).siblings('textarea').val()
    };
  var cli = this;
	$.ajax({
		type: 'POST',
    dataType:'text',
		url: post_url,
		data: param 
	})
  .always(function(data){
    if(data == 1){
      window.location.replace("/<?=$lang;?>/ans5/<?=$enqu_id;?>/<?=$next;?>/")
    }else{
      alert(data)
    }
  });
});

</script>

<style type="text/css">
span{
 color: red;
}

a{
 color: blue;
 cursor: pointer;
}
</style>
