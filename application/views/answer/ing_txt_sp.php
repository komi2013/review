<?=View::factory('tpl/csrf_pc')?>
<?=H::t($qu->txt)?>

<textarea  cols="40" rows="5" id="txt_val">
</textarea>
<br>
<span id="txt_err"></span><br>
<button id="txt_click">送信</button>

<script type="text/javascript">
var post_url_1 = '/answer/txt4/';
</script>

<style type="text/css">

</style>

<script src="/public/answer/ing_txt.js"></script>
