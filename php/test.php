<?php
function SecurePass($pass)
{
    $pass = "4905e0c34e24".sha1(crc32(htmlentities($pass, ENT_QUOTES, "UTF-8")))."s487m36ffu9";
    $a = md5($pass);
    $pass[0] = $a[3];
    $pass[17] = $a[14];
    $pass[7] = $a[0];
    $pass[13] = $a[10];
    $pass[23] = $a[28];
    $pass[30] = $a[20];
    $pass[23] = $a[11];
    $pass[39] = $a[2];
    $pass[32] = $a[5];
    $pass[8] = $a[8];
    return $pass;
}


echo SecurePass("Jaroslaw123");
?>