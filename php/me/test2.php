<!DOCTYPE html>
<html lang='ru'>
   <head>
     <meta charset='UTF-8'>
      <title>Домашнее задание #2</title>
   </head>
   <body>
       <?php
$animals = array(
  'Africa' => array('Loxodonta', 'Giraffa camelopardalis rothschildi', 'Calcochloris obtusirostris', 'Dama dama'),
  'North America' => array('Mammuthus columbi', 'Lynx rufus', 'Panthera', 'Puma'),
  'Antarctica' => array('Aptenodytes forsteri', 'Pygoscelis antarctica', 'Belgica'),
  'Australia' => array('Macropus', 'Phascolarctos cinereus', 'Tachyglossus aculeatus', 'Ornithorhynchus anatinus'),
);
$animalsTwo = array();
echo '<h2> Исходный массив </h2>';

foreach ($animals as $country => $massive) {
  echo "<i><b>$country</i></b>"."\r\n";
  foreach ($massive as $inner_key => $value) {
    echo 'Ключ ->'."<i>$country</i>". ', значение ->'.$value."\r\n";
    echo "</br>";
    $words = str_word_count($value);
    if($words === 2) {
      array_push($animalsTwo, $value);
    }
 }
}
echo '<h2> Массив из названий, состоящих из двух слов. </h2>';
foreach ($animalsTwo as $i => $value) {
echo  $value.', ';
}
echo "</br>";
$animalsFirstWord = array();
$animalsLastWord = array();
for ($i = 0; $i < count($animalsTwo); $i++) {
$x = strtok($animalsTwo[$i], " ");
array_push($animalsFirstWord, $x);
$split = explode(" ", $animalsTwo[$i]);
$y = $split[count($split)-1];
array_push($animalsLastWord, $y);
}

echo "<p><i>Промежуточные массивы</i></p>";
foreach ($animalsFirstWord as $i => $value) {
echo  $value.', ';
}
echo "</br>";
foreach ($animalsLastWord as $i => $value) {
echo  $value.', ';
}

$animalsNew = array();
for ($i = 0; $i <= count($animalsFirstWord) * count($animalsLastWord); $i++) {
  $x = array_rand($animalsFirstWord);
  $y = array_rand($animalsLastWord);
  $z = "$animalsFirstWord[$x]"." $animalsLastWord[$y]";
  if($z !== $w) {
    array_push($animalsNew, $z);
    $w = $z;
}
}

  echo "</br>";
  echo "Итоговый массив </br>";
  foreach ($animalsNew as $key => $value) {
  echo $key." -> значение ".$value."</br>";
  }
       ?>
   </body>
</html>
