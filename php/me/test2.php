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
var_dump($animals);
echo '</br>';
echo '</br>';
foreach ($animals as $country => $massive) {
  echo $country."\r\n";
  foreach ($massive as $inner_key => $value) {
    echo 'Ключ ->'.$country. ', значение ->'.$value."\r\n";
    echo "</br>";
    $words = str_word_count($value);
    if($words === 2) {
      array_push($animalsTwo, $value);
    }
 }
}
echo "</br>";
var_dump($animalsTwo);
echo "</br>";
print_r  ($animalsTwo);

       ?>
   </body>
</html>
