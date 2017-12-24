<?php
// Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами 
// цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза

$num = rand(000000000000, 999999999999);
print "Было сгенерировано число $num\n";
$nfind = readline("Введите одну цифру, для подсчёта вхождений в сгенерированное число: ");

if (is_numeric($nfind) == false or strlen($nfind) > 1) exit("Введены некорректные данные, программа завершена.");

$arrnum = str_split($num, 1);
$occ_count = 0;

// print_r($arrnum);
for ($i = 0; $i < strlen($num); $i++) {
    if ($arrnum[$i] == $nfind) {
        $occ_count++;
    }
}

print "Число вхождений - $occ_count\n";

?>