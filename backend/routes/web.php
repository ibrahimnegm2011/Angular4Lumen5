<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/api/movies', ['middleware' => 'auth'], function () use ($router) {
    return [
        [
            'name' => "Movie 1",
            'date' => "2017-10-11",
            'photo' => 'photo.png'
        ],
        [
            'name' => "Movie 2",
            'date' => "2017-10-11",
            'photo' => 'photo.png'
        ],
        [
            'name' => "Movie 3",
            'date' => "2017-10-11",
            'photo' => 'photo.png'
        ],
        [
            'name' => "Movie 4",
            'date' => "2017-10-11",
            'photo' => 'photo.png'
        ],
        [
            'name' => "Movie 5",
            'date' => "2017-10-11",
            'photo' => 'photo.png'
        ]
    ];
});
