$('#txt_click').click(function() {
//   id = $(this).attr('id');
  var param = {
      csrf : csrf,
      txt:$('#txt_val').val()
    };
  $.get(post_url_1,param,function(res) {
    if(res['chk'] == 1){
      window.location.replace('');
    }else{
      $('#txt_err').text(res['err']);
    }
  }, "json");
});
