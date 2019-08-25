<?php

function  word_waf($str,$exp)
{
    $badword ="";
    if($exp == 'sql')
    {
        $badword = "drop|delete|where|to|by|order|group|limit|eval|ascii|mid|modify|alter|and|or|from|float|exp|union|select|sleep|";
        $badword = $badword . "show|having|set|\/|\"|'|\+|=|<|>|\*| |,|\.\.|\.|-|{|@|0x|0X|\(|\)|#";
    }
    if($exp == 'xss')
    {
        $badword = "script|onerror|windows|location|herf|alert|javascript|<.*>";
    }
    
    $denger_word = explode("|",$badword);

    $str_yuna =$str;
    $str1 = "1";
    $str2 = "2";
    while($str1 != $str2)
    {
        $str1 = $str;
        $str = urldecode($str);
        foreach ($denger_word as $value) {

            $str = preg_replace("/$value/i", "", $str);
        }
        $str2 = $str;
    }
    if($str_yuna!=$str)
    {
        echo "<script >alert('非法字符！！')</script>";
        echo '<script language="javascript">window.location = "";</script>';
    }
    return $str;
}


?>
