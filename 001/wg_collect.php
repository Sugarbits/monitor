<?php
date_default_timezone_set("Asia/Taipei");//ZONE SET 為了strtotime函數是必要的!!!
// ?query=[觀測點名稱]，例如: Taoyuan Air Base , Taipei
$xml = simplexml_load_file(
    "http://api.wunderground.com/auto/wui/geo/WXCurrentObXML/index.xml?query=Taichung Tw-Afb"
);

// 氣象圖示
foreach ($xml->icons->children() as $icon_set) {
    if($icon_set['name']=='Contemporary'){
        $icon = $icon_set->icon_url;
    }    
}
$arr = array('');
array_push($arr,$icon,$xml->weather,$xml->temp_c,$xml->relative_humidity);
echo $icon;

?>