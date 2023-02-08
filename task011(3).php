<?php
$lang = 'ru';
$arr = array(
	'ru' => ['пн','вт','ср','чт','пт','сб','вс'],
	'en' => ['mn','ts','wd','th','fr','st','sn']
);
foreach($arr[$lang] as $k){
	echo $k;
};