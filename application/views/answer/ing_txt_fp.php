
<?=H::t($qu->txt)?><br>

<form action="/answer/ingfp/" method="get">
<textarea name="txt" rows="4" cols="40">
</textarea><br>
<input type="hidden" name="encry" value="<?=$encry?>">
<span><?=$err_msg?></span><br>
<input type="submit" value="送信">
</form>
