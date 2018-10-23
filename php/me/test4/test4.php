<?php
   $json = file_get_contents(__DIR__ .'/test4.json');
   $data = json_decode($json, true);
   var_dump($data);
   ?>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Домашнее задание #4</title>
   </head>
   <body>
      <table>
         <tr>
            <th> Номер </th>
            <th> Имя </th>
            <th> Фамилия </th>
            <th> Адрес </th>
            <th> Номер телефона </th>
         </tr>
         <?php  foreach ($data as $i => $unit) : ?>
         <tr>
            <td> <?=$i + 1?></td>
            <td><?php echo $unit["firstName"] ?></td>
            <td><?php echo $unit["lastName"] ?></td>
            <td><?php echo $unit["address"] ?></td>
            <td><?php echo $unit["phoneNumber"] ?></td>
         <tr>
            <?php endforeach ?>
      </table>
   </body>
   </htm>
