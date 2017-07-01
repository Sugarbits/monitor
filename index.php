<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>折叠特效（Fold Effect）演示</title>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <style>
.toggle_active {
    background: #f00;!important
  }
#symbol{
    height: 20px;
    background: #00f;
  }

  </style>
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>
 
<p>点击任意地方进行切换。</p>
<div id='symbol' class="">+</div><iframe width="100%" id="toggle" src="https://www.w3schools.com"></iframe>
 
<script>
$( "#symbol" ).click(function() {
  $( "#toggle" ).toggle( "fold" );
	var text = $(this).text() == '+' ? '-' : '+';
	$(this)
    .text(text)
    .toggleClass("toggle_active");

	
});
</script>
 
</body>
</html>