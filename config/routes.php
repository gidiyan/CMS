<?php

return [
    '' => 'HomeController@index',
    'contact'=>'AboutController@index',
    'blog'=>'BlogController@index',
    'shop'=>'ShopController@index',
    'config'=>'ConfigController@index',
    'admin'=>'Admin\DashboardController@index',
    'admin/categories'=>'Admin\CategoryController@index',
    'admin/categories/create'=>'Admin\CategoryController@create',
    'admin/categories/store'=>'Admin\CategoryController@store',
    '404'=>'ErrorController@index'
];