<?php 
// echo Debug::vars(Cookie::get('lang'));
// $lang = Cookie::get('lang') ?: 'ja';
// $variable_class = 'Model_Msg_'.$lang;
// echo $variable_class::$running;
?>


<a href="">kko</a>
<img src="/public/no_image.jpg">
<table>
<tr><td id="head">スナスタ掲示板</td></tr>
<tr><td><br></td></tr>
<tr>
  <td>
  <table>
  <tr></tr>
  <td>
    <table>
    <tr>
      <td id="title">只今勉強中！</td>
    </tr>
    <tr>
      <td>勉強中のみんな、ここに書き込んでね！<br>
          わからないことがあったらだれかにきいてみよう！
      </td>
    </tr>
    </table>
    <tr><td></td></tr>
    <table>
    <tr>
      <td id="me_head">
        <a id="member">[1]ひろちゃん</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="date">2013/10/16(日)06:34</a>
      </td>
    </tr>
    <tr>
      <td colspan=2>2a+3ax*3b=0が分かる人～？<br>
          だれか教えて。
      </td>
    </tr>
    </table>
    <table>
    <tr>
      <td id="me_head">
        <a id="member">[1]ひろちゃん</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a id="date">2013/10/16(日)06:34</a>
      </td>
    </tr>
    <tr>
      <td colspan=2>2a+3ax*3b=0が分かる人～？<br>
          だれか教えて。
      </td>
    </tr>
    </table>
    <br>
    <table>
    <tr>
      <td id="me_head"><a id="comment">コメントを書く</a><a id="brace">(全角2000文字以内)</a></td>
    </tr>
    <tr>
      <td><textarea></textarea></td>
    </tr>
    <tr>
      <td><a id="submit">送信</a></td>
    </tr>
    </table>

  </td>
  <tr><td></td></tr>
  </table>
  </td>
</tr>
</table>

<script type="text/javascript">

</script>


<style type="text/css">
table{
 border: 1px solid #000;
 /*text-align: center;*/
}


td{
 border-width: 0;
}

#head{
 border: 1px solid #000;
 text-align: center;
 background-color: green;
 color: white;
}
#title{
 background-color: green;
 font-size: 1.2em;
 font-weight: bold;
}
#member{
/* width: 150px; */
/* border-bottom: 1px; */
}
#date{
/* width: 150px; */
}
#me_head{
 background-color: green;
 width: 330px;
}
#comment{
 font-weight: bold;
}
#brace{
 font-size: 0.8em;
}
#submit{
 background-color: green;
}
textarea{
 width: 300px;
}
</style>
