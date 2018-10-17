<?php
$file = fopen('C:\tmp\scripts\money.csv', 'a+') or die("Не удалось подключить файл");
var_dump($argv);
echo "</br>";
$listOut = array_splice($argv, 3);
$x = implode(' ', $listOut);
array_push($argv, $x);
echo 'Итог';
var_dump($argv);

foreach ($argv as $arg) {
    fputcsv($file, explode(',', $arg), ';');
}
fclose($file);
$listOut_1 = array_splice($argv, 1);
$y = implode(' ', $listOut_1);
echo '# Добавлена строка '.$y;
echo 'OK';
?>
