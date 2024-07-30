<?php

return [

    // тут будет лента со всеми постами
    '#^$#' => ['Controllers\HomeController', 'index'],

    //пути для регистрации и тд
    '#^login$#' => ['Controllers\AuthController', 'login'],
    '#^register$#' => ['Controllers\AuthController', 'register'],

    //post пути
    '#^post/create$#' => ['Controllers\PostController', 'create'],
    '#^post/update$#' => ['Controllers\PostController', 'create'],
    '#^post/delete$#' => ['Controllers\PostController', 'create'],
    // Добавьте другие маршруты здесь
];