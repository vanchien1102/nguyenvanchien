<?php
$tong = 0;
$x = 1;
while ($x <101) {
    $tong += $x*$x;
    $x++; 
    if ($x ==50)
    {
        break;
    }
}
echo $tong;