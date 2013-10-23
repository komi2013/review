$('#5_click').click(function() {
  var param = {
    csrf   : $('#csrf_val').val(),
    enqu   : enqu,
    q_txt  : $('#5_q_txt_val').val()
  };
//   var cli = this;
  $.get(post_url_2,param,function(res) {
    if(res['chk'] == 1){
      $('#csrf_val').val(res['csrf_renew']);
      $('#5_success').text(success); 
      $('#5_success').fadeIn(); 
      $('#5_success').fadeOut('slow');
      $('#5').css( 'background-color','#e0ffff');
      $('#5_q_txt_err').text('');
      $('#err').text('');
      $('#run').css("display", "block");
    }else{
      $('#err').text(res['err']);
      $('#5_q_txt_err').text(res['q_txt']);
    }
  }, "json")
});
