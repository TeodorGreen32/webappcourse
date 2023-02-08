<?php

$lang = "ru";
if($lang == "ru"){
	$arr = ['пн','вт','ср','чт','пт','сб','вс'];
}
if($lang == "en"){
	$arr = ['mn','ts','we','th','fr','st','sn'];
}
foreach($arr as $k){
	echo $k;
}