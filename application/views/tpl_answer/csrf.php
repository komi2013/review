<?php
$csrf = Text::random('alnum', 16);
Cookie::set('csrf', $csrf);
?>
<input type="hidden" value="<?=$csrf?>" id="csrf_val">
<span class="err"></span>

<script type="text/javascript">

var csrf = '<?=$csrf?>';

</script>
