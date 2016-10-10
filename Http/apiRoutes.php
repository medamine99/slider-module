<?php

use Illuminate\Routing\Router;

/** @var Router $router */

$router->group(['prefix' => '/slide'], function (Router $router) {
    $router->post('/update', [
        'as' => 'api.slide.update',
        'uses' => 'SlideController@update',
        'middleware' => 'can:slider.slides.update',
    ]);
    $router->post('/delete', [
        'as' => 'api.slide.delete',
        'uses' => 'SlideController@delete',
        'middleware' => 'can:slider.slides.destroy'
    ]);
});