<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $viewsData = [
        'user' => [
        'name' => 'DBZ Space',
        'handle' => '@dbzspace',
        'description' => '#dokkanbattle, #dblegends, anything #dbz related, game info, updates, news',
        'descriptionLink' => 'http://youtube.com/DBZSpaceman',
        'website' => 'dbz.space',
        'joined' => 'Joined February 2016',
        'tweets' => '3,278',
        'following' => 294,
        'followers' => '43.5K',
        'likes' => '1,141',
        'lists' => 1,
    ],
        
        'userTweet' => [
            [
              'image' => 'https://pbs.twimg.com/profile_images/730526242076647424/xWZUrd4M_bigger.jpg',
              'name' => 'DBZ Space',
              'handle' => '@dbzspace',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate est incidunt sapiente mollitia, debitis quae adipisci asperiores pariatur repellat repudiandae.',
              'img' => 'https://pbs.twimg.com/media/DiU4ZBRWkAAGDiA.jpg',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/730526242076647424/xWZUrd4M_bigger.jpg',
              'name' => 'DBZ Space',
              'handle' => '@dbzspace',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate est incidunt sapiente mollitia, debitis quae adipisci asperiores pariatur repellat repudiandae.',
              'img' => 'https://pbs.twimg.com/card_img/1062394090757722113/OsnMJjZE?format=jpg&name=600x314',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/730526242076647424/xWZUrd4M_bigger.jpg',
              'name' => 'DBZ Space',
              'handle' => '@dbzspace',
              'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate est incidunt sapiente mollitia, debitis quae adipisci asperiores pariatur repellat repudiandae.',
              'img' => 'https://pbs.twimg.com/media/DiU4ZBRWkAAGDiA.jpg',
            ],
        ],

        'youMightLike' => [
            [
              'image' => 'https://pbs.twimg.com/profile_images/1039510285797609472/Y6ZVFm5c_bigger.jpg',
              'name' => 'iSeriously',
              'handle' => '@iseriuosly_',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/994195108219183105/bGNhq3Jb_bigger.jpg',
              'name' => 'Jx',
              'handle' => '@dokkaninfo',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/955723771616219137/tI6-mbse_bigger.jpg',
              'name' => 'Kabuki',
              'handle' => '@GTallen',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/984583042550390784/Kgs_MD0X_bigger.jpg',
              'name' => 'zakura',
              'handle' => '@TDokkaner',
            ],
            [
              'image' => 'https://pbs.twimg.com/profile_images/958943091859378177/K5sAdvB2_bigger.jpg',
              'name' => 'Nordax',
              'handle' => '@Nordax974',
            ],
          ],
    ];
    return view('welcome', $viewsData);

});




Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});


