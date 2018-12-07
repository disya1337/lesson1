<?php
/**
 * Created by godzie@yandex.ru.
 * Date: 03.12.2018
 */


//напишем игру
//компьютер загадывает число, и предлагает пользователю угадать его, если пользователь угадывает
//число то игра выиграна. Если не угадывает то компьютер дает подсказку (больше / меньше)

echo 'Privet ti v igre ugadai chislo!' . PHP_EOL;

$secretNumber = rand(0, 100);

while (true) {
    echo 'Vvedite chislo:' . PHP_EOL;

    $printedNumber = (int) fgets(STDIN);

    if ($printedNumber > $secretNumber) {
        echo 'Vi vveli: ' . $printedNumber . ', Eto slishkom mnogo!' . PHP_EOL;
    } elseif ($printedNumber < $secretNumber) {
        echo 'Vi vveli: ' . $printedNumber . ', Eto slishkom malo!' . PHP_EOL;
    } else {
        echo 'Pozdravlyaem, vi viigrali !';
        break;
    }
}