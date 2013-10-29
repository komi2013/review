<?=View::factory('tpl/csrf_pc')?>

<div>
 <button id="run">配信</button>
 <span id="run_err"></span>
</div>
<br>
<a id="show">--オプション--</a><br>
<br>

<div id="option">

<a>タイトル</a><br>
<textarea id="title"><?=$enqu->title?></textarea><br>
<span id="title_err"></span><br>

<a>プレゼントAPI URL</a><br>
<textarea id="domain"><?=$enqu->present_domain?></textarea><br>
<span id="domain_err"></span><br>

<a>プレゼント用パスワード</a><br>
<textarea id="passwd"><?=$enqu->present_passwd?></textarea><br>
<span id="passwd_err"></span><br>

<a>アンケート終了後に戻るURL</a><br>
<textarea id="passwd"><?=$enqu->back_domain?></textarea><br>
<span id="passwd_err"></span><br>

<button id="title_end">更新</button>
<span id="res_err"></span><br>
<span class="success"></span><br>

<a href="/answer/?enqu=<?=$_GET['enqu']?>">アンケート確認</a><br>

</div>

<script type="text/javascript">

var enqu = '<?=$_GET["enqu"]?>';
var post_url_1 = '/maker/title4/';
var arr = [];
var success = '更新しました';
var post_url_2 = '/maker/run4/';
var ok = "配信後は編集できません \n いいですか？";
var confirm = "確認";
// var csrf = '<?=Cookie::get("csrf")?>';
console.log(csrf);

</script>

<script src="/public/maker/jquery.alerts-1.1/jquery.alerts.js"></script>
<link rel='stylesheet' type='text/css' href='/public/maker/jquery.alerts-1.1/jquery.alerts.css'>
<script src="/public/maker/title_end.js"></script>
<script src="/public/maker/run.js"></script>
<link rel='stylesheet' type='text/css' href='/public/maker/run.css'>

