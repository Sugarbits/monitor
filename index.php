<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="//apps.bdimg.com/libs/jqueryui/1.10.4/css/jquery-ui.min.css">
  <style>
.toggle_active {
    background: #f00;!important
  }
#symbol{
	font-size:30px;
  }
  .symbol_bar{
	height: 30px;
    background: #ccc;
  }

  </style>
  <script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//apps.bdimg.com/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</head>
<body>
 
<p>點擊灰色長條來 摺疊/展開</p>
<div class="symbol_bar"><span id='symbol'>+</span><span>數位板氣象資料撈取</span></div><iframe width="100%" id="toggle" src="001/001_datacollect.php"></iframe>
 
<script>
$( "#symbol" ).click(function() {
  $( "#toggle" ).toggle( "fold" );
	var text = $(this).text() == '+' ? '-' : '+';
	$(this)
    .text(text)
   // .toggleClass("toggle_active");

	
});
</script>
 
</body>
</html>