<?php
$arr = [
	["name" => "Петя",
	"pay" => 17000],
	
	["name" => "Вася",
	"pay" => 15000],
	
	["name" => "Коля",
	"pay" => 35000]
];

for($i = 0; $i<count($arr);$i++){
	if($arr[$i]['name'] == "Петя" || $arr[$i]['name'] == "Коля"){
		echo $arr[$i]['name'].' - '.$arr[$i]['pay']."\n";
	}
}