<div class="body">
  <?=TEXT::auto_p(HTML::chars($enquete->title));?>
  <?=TEXT::auto_p(HTML::chars($enquete->end_txt));?>
  <?=TEXT::auto_p(HTML::chars($q_txt));?>
<?php foreach ($antxt as $k => $d) { ?>
  <div class="antxt">  
    <?=TEXT::auto_p(HTML::chars($d->txt));?>
  </div>   
<?php } ?>

</div>

<script type="text/javascript">


</script>

<style type="text/css">
.body {
 width : 300px;
--align:center;
--margin: 0 auto;
}
.antxt{
 border-bottom: 3px double #008000;
}
</style>
