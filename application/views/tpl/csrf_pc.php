<?php
$csrf = Text::random('alnum', 16);
Cookie::set('csrf', $csrf);
?>

<div>
  <input type="hidden" value="<?=$csrf?>" id="csrf_val">
  <span id="err"></span>
</div>

<script type="text/javascript">

var csrf = '<?=$csrf?>';

</script>
