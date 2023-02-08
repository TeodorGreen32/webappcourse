<?php
    $arr = ['html', 'css', 'php', 'js', 'jq'];
    foreach($arr as $k){
        $result = "$k". "," ;
        echo substr($result, 0 , -1);
    }