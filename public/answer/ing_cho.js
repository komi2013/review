$('a').click(function() {
//   id = $(this).attr('id');
  var param = {
      csrf : csrf,
      cho_num : $(this).attr('id')
    };
  $.get(post_url_1,param,function(res) {
    if(res['chk'] == 1){
      window.location.replace('');
    }else{
      alert(res['err'])
    }
  }, "json");
});
