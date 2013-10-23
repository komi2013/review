<?php
$domain = Kohana::$config->load('domain');
$client_id = $domain->get('fb_id');
// $session = Session::instance();
// echo Debug::vars(session_id());

?>
<div id="csrf">
  <input type="hidden" value="" />
  <span></span>
</div>

<a href="https://www.facebook.com/dialog/oauth?<?=$client_id;?>redirect_uri=https://<?=$_SERVER['HTTP_HOST'];?>/usr/fb3/">facebook login</a>
<br>
<a href="/usr/twoauth3/">twitter login</a>

<div>
  <h2>プライベートレビュー</h2>
  <p>友達同士でアンケートを作りましょう。</p>
</div>

<script type="text/javascript">

</script>


<style type="text/css">

</style>
