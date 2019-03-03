<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Message::class, function (Faker $faker) {
    $from=1;
    $to=1;
    do {
        $from = rand(1, 15);
        $to = rand(1, 15);
    } while ($from==$to);
    return [
       'from' => $from,
       'to' => $to,
       'text' => $faker->sentence,
    ];
});
