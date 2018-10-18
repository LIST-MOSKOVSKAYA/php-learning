<?php
   $a1=array($argv);
   $list = file('C:\tmp\scripts\data.csv');
   $test = array();
   foreach($list as $row) {
    $value = explode(",",$row);
     array_push($test, $value);
   }

   foreach($list as $row => $massive) {
     foreach ($massive as $key => $value) {
       foreach ($a1 as $row => $a2) {
           $pos = strpos($value, $a2[1]);
           $y = $key+3;
           if ($pos !== false) {
             echo "Страна: ".$value." Визовый режим: ".$massive[$y];
             break; }
           } else {
             echo "Не найдено!";
           };
   }
   }
   }
?>
