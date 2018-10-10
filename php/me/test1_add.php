<!DOCTYPE html>
<html lang='ru'>
   <head>
      <meta charset='UTF-8'>
      <title>Домашнее задание #1, дополнение</title>
   </head>
   <body>
      <?php
         $x = rand(0,100);
         $number_1 = 1;
         $number_2 = 1;

         echo '<p>Число ', $x, '</p>';
         for ($i = 0; $i <= 100; $i++) {
         if ($number_1 < $x) {
           $number_3 = $number_1;
           $number_1 += $number_2;
           $number_2 = $number_3;
         } else {
         break;
         }
         }
         if ($number_1 > $x) {
         echo 'Число ', $x,' не входит в числовой ряд';
         }
         else if ($number_1 == $x) {
         echo 'Число ', $x,' входит в числовой ряд';
         }
         ?>
   </body>
</html>
