<?php

$userName = 'Терёхин Денис';
$userAge = '35';
$userEmail = 'denis.tv@mail.ru';
$userCity = 'Набережные Челны';
$userAbout = 'Привет! Я обучаюсь программированием на PHP языке с августа 2018 года. Стараюсь успевать выполнять все домашние задания в срок. Пожелайте мне удачи!';

?>

<!DOCTYPE>
<html lang="ru">
    <head>
        <title><?= $userName . ' из г. ' . $userCity ?></title>
        <meta charset="utf-8">
        <style>
            body {
                font-family: sans-serif;  
            }
        </style>
    </head>
    <body>
		<?php if ($userName) { ?>
			<div>
				<h1>Информация о студенте Нетологии</h1>
				<div>
					<p>Имя: <?= $userName ?></p>
					<p>Возраст: <?= $userAge ?> лет</p>
					<p>Эл.почта: <?= $userEmail ?></p>
					<p>Город: <?= $userCity ?></p>
				</div>
				<div>
					<h2>Коротко о себе</h2>
					<p><?= $userAbout ?></p>
				</div>
			</div>
		<?php }
        else { ?>
            <div>
                <p>Пользователь отсуствует!</p>
            </div>
		<?php } ?>
		
		<br/><hr>
		
		<h2>Дополнительное задание</h2>	
		
		<?php
			$x = rand(1,100);	//Cлучайное число
			$num1 = 1;      	// Переменная 1
			$num2 = 1;      	// Переменная 2
			
			echo "Используется случайное число (от 1 до 100): ".$x; ?> 
			<br/><br/>
			<?

			function chNum(){
				global $x;
				global $num1; //
				global $num2; //

				while ($x){
					echo 'Число пользователя ' .$x. '<br>';
					echo 'Первая переменная = ' .$num1. '<br>';
					echo 'Вторая переменная = ' .$num2. '<br>';
					echo '<br>';

					if($num1 > $x){
						return 'Задуманное число не входит в числовой ряд' . '<br>';
					}

					elseif ($num1 === $x){
						return 'Задуманное число входит в числовой ряд' . '<br>';
					}

					else {
						$num3 = $num1;
						$num1 = $num1 + $num2;
						$num2 = $num3;
					}

				}
			}

			echo chNum();

			?>
    </body>
</html>
