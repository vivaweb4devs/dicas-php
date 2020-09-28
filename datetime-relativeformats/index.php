<?php
include __DIR__ . "/vendor/autoload.php";

$now = new \DateTime('now');
dump($now);

$tomorrow = new \DateTime('tomorrow');
dump($tomorrow);

$tomorrow2315 = new \DateTime('tomorrow 23:15');
dump($tomorrow2315);

$now_3day = new \DateTime('+3 day');
dump($now_3day);

$nextmonday = new \DateTime('next monday');
dump($nextmonday);

$lastday = new \DateTime('last day of this month');
dump($lastday);