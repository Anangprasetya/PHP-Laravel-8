<?php

use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Anang Nur Prasetya",
        "email" => "anangnr.pras@gmail.com",
        "image" => "gambar.jpg"
    ]);
});


Route::get('/blog', function () {

    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Anangprasetya",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit inventore et eaque commodi, asperiores at saepe! Perferendis, ducimus possimus obcaecati suscipit nisi commodi quo corporis recusandae aperiam totam voluptate unde ea eum sapiente necessitatibus veritatis sed sunt architecto dolorem delectus. Aliquid temporibus, provident iure maiores sunt omnis reprehenderit aliquam sapiente corporis, magnam expedita officiis pariatur dicta itaque nemo excepturi dolorem maxime quod. Veritatis vel voluptatibus molestiae deserunt earum ratione nostrum fugit, iure assumenda consectetur officia! Dolor vitae architecto sit mollitia."
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "DoDwi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum! Fuga culpa similique omnis non? Ipsa nisi non odit mollitia optio blanditiis iusto labore modi atque! Saepe delectus odit suscipit illo officiis officia iusto quae. Architecto reiciendis delectus impedit quia ea iusto voluptas iste consectetur tempora, ullam laudantium tempore autem assumenda fuga minus! Nisi repellat assumenda rem exercitationem quis est nostrum autem similique deleniti dolores fugit amet expedita, totam ratione maiores quod hic dolorem repudiandae. Deleniti ab eveniet nesciunt accusamus sed fuga ratione incidunt quisquam. Quam atque ratione obcaecati aut magni nobis ad, similique distinctio eaque, libero ex corrupti laudantium architecto dolores aliquid saepe est assumenda recusandae repellendus deleniti voluptatem asperiores blanditiis eum? Ipsa sequi impedit minima ea, a repellat?"
        ],
    ];

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_post
    ]);
});
