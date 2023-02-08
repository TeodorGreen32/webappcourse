<?php 
$lang = 'ru';
switch($lang){
	case 'ru':
		$arr = ['пн','вт','ср','чт','пт','сб','вс'];
		break;
	case 'en':
		$arr = ['mn','ts','wd','th','fr','st','sn'];
		break;
}
foreach($arr as $k){
	echo $k;
}