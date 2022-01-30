<?php
//создать файл из 2м строк
/*
$f = fopen('db.txt', 'w');

for($i = 0; $i < 2000000; $i++) {
    fwrite($f, mt_rand(1000000, 10000000) . "\n");
}

fclose($f);
*/

// * это посмотреть сколько памяти съест функция file
//$a = file('db.txt');
//echo memory_get_usage();

// а здесь уже юзаем низкоуровневые дешевые функции. Задача: у нас есть файл на 2м строк с данными по стоимости квартир в НН (от 1м до 10м цена). Нужно посчитаь среднюю цену

$f = fopen('db.txt', 'r');
$total = 0;
$cnt = 0;
//
while (!feof($f)) {
    $str = rtrim(fgets($f));
    if ($str !== '') {
        $total += $str; // это сложили цену на каждой операции и добавили в $total
        $cnt++; // а это счетчик - сколько было операций, чтобы потом получить делением среднюю цену
    }
}

echo $total / $cnt;
fclose($f);