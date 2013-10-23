
$('div').children('.cho_click').click(function() {
  var thisq = $(this).parent('div').attr('id');
  $('.'+thisq+'_cho_val').each(function(i){
    arr[i] = $(this).val();
  });
  var param = {
    csrf   : $('#csrf_val').val(),
    enqu   : enqu,
    q_txt  : $('#'+thisq+'_q_txt_val').val(),
    q_num  : thisq,
    choice : arr
  };
  var click = this;
  var disp = eval(thisq) + 1;
  $.get(post_url_1,param,function(res) {
    if(res['chk'] == 1){
      $('#csrf_val').val(res['csrf_renew']);
      $('#'+thisq+'_success').text(success); 
      $('#'+thisq+'_success').fadeIn(10); 
      $('#'+thisq+'_success').fadeOut(1500);
      $('#'+thisq).css( 'background-color','#e0ffff');
      $('#'+disp).css("display", "block");

      $('#'+thisq+'_q_txt_err').text('');
      $('#'+thisq+'_1_cho_err').text('');
      $('#'+thisq+'_2_cho_err').text('');
      $('#'+thisq+'_3_cho_err').text('');
      $('#'+thisq+'_4_cho_err').text('');
      $('#'+thisq+'_5_cho_err').text('');
    }else{
      $('#err').text(res['err']);
      $('#'+thisq).css( 'background-color','transparent');
      $('#'+thisq+'_q_txt_err').text(res['q_txt']);
      $('#'+thisq+'_1_cho_err').text(res['cho_1']);
      $('#'+thisq+'_2_cho_err').text(res['cho_2']);
      $('#'+thisq+'_3_cho_err').text(res['cho_3']);
      $('#'+thisq+'_4_cho_err').text(res['cho_4']);
      $('#'+thisq+'_5_cho_err').text(res['cho_5']);
    }
  }, "json")
});
