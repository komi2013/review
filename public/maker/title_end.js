$('#title_end').click(function() {
  var param = {
    csrf    : csrf,
    enqu    : enqu,
    title   : $('#title').val(),
    domain     : $('#domain').val(),
    passwd     : $('#passwd').val(),
  };
  $.get(post_url_1,param,function(res) {
    if(res['chk'] == 1){
      $('#csrf').val(res['csrf']);
      $('.success').text(success); 
      $('.success').fadeIn(1); 
      $('.success').fadeOut(1000);
      $('#option').css( 'background-color','#e0ffff');
      $("#title_err").text('');
      $("#domain_err").text('');
      $("#passwd_err").text('');
      $("#res_err").text('');
    }else{
      $('#option').css('background-color','');
      $("#title_err").text(res['title']);
      $("#domain_err").text(res['present_domain']);
      $("#passwd_err").text(res['present_passwd']);
      $("#res_err").text(res['err']);
    }
  }, "json")  
});
