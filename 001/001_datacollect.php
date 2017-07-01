<head>
<script src="//apps.bdimg.com/libs/jquery/1.10.2/jquery.min.js"></script>
</head>

<div id='msg'></div>


<script>


function ajax_wb_icon(){
 $.ajax({
  method: "GET",
  url: "wg_collect.php",
  cache: false,
//  data: {},
  async: false,  
  success:function(data) {
         result = data; 
      }
});
  return result;  
}
function ajax_pic_binary(url){
 $.ajax({
  method: "GET",
  url: "PicDownloader/PicDownloader/PicDownloader2.php",
  cache: false,
  data: { url: url},//url
  async: false,  
  success:function(data) {
         result = data; 
      }
});
  return result;  
}
function ajax_text_write(data){
 $.ajax({
  method: "POST",
  url: "TextDealer/TextDealer.php",
  cache: false,
  data: { func: "write#over",data:data, save_path: "test.txt" },//func,data,save_path
  async: false,  
  success:function(data) {
         result = data; 
      }
});
  return result;  
}

function main( )
{
	var result_icon_url = ajax_wb_icon();
	//console.log(result_icon_url);
	var result_icon_binary = ajax_pic_binary(result_icon_url);
	//console.log(result_icon_binary);
	
	var write_result = ajax_text_write(result_icon_binary);
	//console.log(writte_result);
	$('#msg').append(write_result+"</br>");
	//setTimeout("main( )", 1800000);//30min 撈一次
}
main( );
 
</script>