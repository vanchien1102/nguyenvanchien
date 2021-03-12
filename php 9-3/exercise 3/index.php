<?php
$tong=0;
$x=1;
$i=20;
while ($x <101) {
    $tong += $x;
    $x++;
}
echo $tong;
while ($i <50) {
    $tong += $i;
    if ($i%3==0)
        $i++;
}
echo $tong;