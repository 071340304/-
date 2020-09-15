<?php

// 无重复字符的最长字符串
$str = "peawkkkkbedfg";
$length = strlen($str);
$lastLen = 0;
$arr = array();
for ($i = 0; $i < $length; $i++) {    
    if (empty($arr)) {    
        $arr[] = $str[$i];    
        continue;    
    }    
    foreach ($arr as $index => $value) {    
        if ($value == $str[$i]) {    
            $lastLen = count($arr) > $lastLen ? count($arr) : $lastLen;    
            $arr = array_slice($arr, $index + 1);    
            break;    
        }    
    }    
    $arr[] = $str[$i];
}

echo(count($arr) > $lastLen ? count($arr) : $lastLen);
