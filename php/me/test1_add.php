<?php
   $x = rand(0,100);
   echo "<p>Число ", $x, "</p>";
   $number_1 = 1;
   $number_2 = 1;
   for ($i = 0; $i<=100; $i++)
   {
   if ($number_1 > $x) {
     echo "Число ", $x," не входит в числовой ряд";
     break;
   } else {
   if ($number_1 == $x) {
     echo "Число ", $x," входит в числовой ряд";
     break;
   } else {
   $number_3 = $number_1;
   $number_1 += $number_2;
   $number_2 = $number_3;
   }
   }
   }
?>
