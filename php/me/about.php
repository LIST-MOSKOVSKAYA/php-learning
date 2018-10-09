<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
    <title>Домашнее задание #1</title>
    <style>
    p strong {
      margin-left: 20px;
    }
    </style>
</head>
<body>
  <h1>Страница Московской Ольги. Домашнее задание №1</h1>
<?php
$name = 'Московская Ольга';
$age = 38;
$email = 'moskovskayaolga@gmail.com';
$town = 'Moscow';
$aboutme = 'Тестировщик ПО, ведущий инженер техподдержки, постановщик технического задания';
 ?>
<p>Имя:</p>
<p><strong> <?php echo $name; ?> </strong></p>
<p>Возраст:</p>
<p><strong> <?php echo $age; ?> </strong></p>
<p>Электронная почта:</p>
<p><strong> <?php echo $email; ?> </strong></p>
<p>Место жительства:</p>
<p><strong> <?php echo $town; ?> </strong></p>
<p>О себе:</p>
<p><strong> <?php echo $aboutme; ?> </strong></p>

<body>
</html>
