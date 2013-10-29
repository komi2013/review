$('#run').click(function() {
	jConfirm(ok, confirm, function(r) {
		if(r){
      var param = { 
        csrf  : csrf, 
        enqu  : enqu
      };
      $.get(post_url_2,param,function(res) {
          if(res['chk'] == 1){
            window.location.replace('/maker/reviewlist/ ');
          }else{
            $("#run_err").text(res['err']);      
          }
      }, "json");
		}
	});
});

$("#option").css("display", "none");

$('#show').toggle(function(){
  $('#option').css("display", "block");
  $('#run').css("display", "none");
},
function(){
  $('#option').css("display", "none");
  $('#run').css("display", "block");
});
