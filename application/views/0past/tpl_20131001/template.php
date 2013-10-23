<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?=$title?></title>
    <script src="/public/tpl/jquery-1.7.1.min.js"></script>
    <meta name="viewport" content="width=device-width">
<style type="text/css">
body {
 width:800px;
 margin: 0 auto;
}

#content {
 float: left;
 width: 480px;
}
#pr_tpl {
 float: left;
 width:300px;
 padding: 10px;
/*height: 140px; */
}
@media screen and (max-width: 480px) {
   /* 480px以下の場合 */
  body {
   width:480px;
   margin: 0 auto;
  }
  #content {
   width: 480px;
  }
  #pr_tpl {
   margin: 0 auto;
   width:300px;
   padding: 10px;
  /*height: 140px;*/
  }
}

</style>


	</head>
	<body>
<div>
  &nbsp;
  <a href="/mypage/reviewlist/">mypage</a>
  &nbsp;
  Komahana©2013
</div>
</br>

<div id="content"> <?=$content; ?> </div>

	</body>
</html>

<script>

</script>

<style type="text/css">

.err {
 color: red;
}

</style>