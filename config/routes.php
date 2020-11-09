<?php

return [
    '' => 'HomeController@index',
    'contact'=>'AboutController@index',
    'blog'=>'BlogController@index',
    'shop'=>'ShopController@index',
    'config'=>'ConfigController@index',
    'admin'=>'Admin\DashboardController@index',
    'admin/categories'=>'Admin\CategoryController@index',
    'admin/guestbook'=>'Admin\GuestbookController@index',
    'admin/guestbook/show/{id}'=>'Admin\GuestbookController@show',
    'admin/guestbook/edit/{id}'=>'Admin\GuestbookController@edit',
    'admin/guestbook/update'=>'Admin\GuestbookController@update',
    'admin/guestbook/delete/{id}'=>'Admin\GuestbookController@destroy',
    'admin/categories/create'=>'Admin\CategoryController@create',
    'admin/categories/store'=>'Admin\CategoryController@store',
    'admin/categories/show/{id}'=>'Admin\CategoryController@show',
    'admin/categories/edit/{id}'=>'Admin\CategoryController@edit',
    'admin/categories/update'=>'Admin\CategoryController@update',
    'admin/categories/delete/{id}'=>'Admin\CategoryController@destroy',
    '404'=>'ErrorController@notFound'
];