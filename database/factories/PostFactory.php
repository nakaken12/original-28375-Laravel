<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->randomElement(['タイタニック', 'すばらしき世界', 'ヱヴァンゲリヲン新劇場版:破', 'ジョジョ・ラビット', 'ジョーカー', 'ボヘミアン・ラプソディ', 'カメラを止めるな', '君の名は', 'オデッセイ']),
        'genre' => $faker->randomElement(['アニメ', 'アクション', 'アドベンチャー', 'SF', 'キッズ・ファミリー', 'コメディ', 'サスペンス', '時代劇', '青春', '戦争', 'ドキュメンタリー', 'ドラマ', 'ファンタジー', 'ホラー', 'ミュージカル・音楽', '恋愛']),
        'spoiler' => $faker->randomElement(['0', '1']),
        'content' => $faker->realText(200),
        'user_id' => $faker->randomElement([1, 2 ,3, 4]),
    ];
});
