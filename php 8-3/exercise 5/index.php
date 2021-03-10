<?php
$x = 132;

$bac1 = ($x - 100) * 600 + 45000;
$bac2 = ($x - 200) * 750 +105000;
$bac3 = ($x - 300) * 900 +180000;
$bac4 = ($x - 500) * 1000 +360000;
$bac5 = ($x - 1000) * 1200+860000;

$thuebac1=$bac1*(10/100);
$thuebac2=$bac2*(10/100);
$thuebac3=$bac3*(10/100);
$thuebac4=$bac4*(10/100);
$thuebac5=$bac5*(10/100);

if ($x < 101) {
    echo $x * 450;
} elseif ($x < 201) {
    echo "Tiền điện khi chưa Tính thuế VAT: ".($bac1)."<br>";
    echo "Tiền điện khi đã Tính thuế VAT: ".($bac1+$thuebac1);
} elseif ($x < 301) {
    echo "Tiền điện khi chưa tính thuế VAT: ".($bac2)."<br>";
    echo "Tiền điện khi đã tính thuế VAT: ".($bac2+$thuebac2);
} elseif ($x < 501) {
    echo "Tiền điện khi chưa tính thuế VAT: ".($bac3)."<br>";
    echo "Tiền điện khi đã tính thuế VAT: ".($bac3+$thuebac3);
} elseif ($x < 1001) {
    echo "Tiền điện khi chưa tính thuế VAT: ".($bac4)."<br>";
    echo "Tiền điện khi đã tính thuế VAT: ".($bac4+$thuebac4);
} elseif ($x > 1000) {
    echo "Tiền điện khi chưa tính thuế VAT: ".($bac5)."<br>";
    echo "Tiền điện khi đã tính thuế VAT: ".($bac5+$thuebac5);
}
?>