<?php
const MIN = 60;
const HOUR = 3600;
const DAY = 84600;
const MONTH = DAY * 30;
const YEAR = MONTH * 12;

date_default_timezone_set('Europe/Moscow');

function time_ago(string $data) {
    $timeStamps = strtotime($data);
    $difference = time() - $timeStamps;

    if ($difference < MIN) return $difference . 'сек назад';
    elseif ($difference < HOUR) return floor($difference / MIN) . 'мин назад';
    elseif ($difference < DAY) return floor($difference / HOUR) . 'ч назад';
    elseif ($difference < MONTH) return floor($difference / DAY) . 'дн назад';
    elseif ($difference < YEAR) return floor($difference / MONTH) . 'мес назад';
    return floor($difference / YEAR) . 'лет назад';

}


$posts = [
    [
        'id' => 1,
        'title' => 'Бу!',
        'author' => 'Ваня Денисов',
        'author_icon' => 'images/denisov.svg',
        'post_img' => 'images/post1.png',
        'content' => 'Так красиво сегодня на улице! Настоящая зима)) Вспоминается <br> Бродский: «Поздно ночью, в уснувшей долине, на самом дне, в городке, занесенном снегом по ручку двери...» ',
        'reactions' => '203',
        'time' => time_ago('2026-08-23 3:20:00'),
        '' => ''
    ],
    [
        'id' => 2,
        'title' => 'Буль-буль-буль',
        'author' => 'Лиза Дёмина',
        'author_icon' => 'images/liza.svg',
        'post_img' => 'images/post2.jpg',
        'content' => 'текст',
        'reactions' => '143',
        'time' => time_ago('2026-08-21 14:30:00'),
        '' => ''
    ]
]


?>