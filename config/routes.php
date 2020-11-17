<?php

return [
    '' => 'HomeController@index',
    'forgot' => 'LoginController@forgot',
    'login' => 'LoginController@login',
    'logout' => 'LoginController@logout',
    'profile' => 'ProfileController@index',
    'register' => 'RegisterController@register',

    'contact' => 'AboutController@index',
    'blog' => 'BlogController@index',
    'shop' => 'ShopController@index',
    'config' => 'ConfigController@index',
    'admin' => 'Admin\DashboardController@index',


    'admin/categories' => 'Admin\CategoryController@index',
    'admin/brands' => 'Admin\BrandController@index',
    'admin/products' => 'Admin\ProductController@index',
    'admin/guestbook' => 'Admin\GuestbookController@index',
    'admin/roles' => 'Admin\RoleController@index',
    'admin/users' => 'Admin\UserController@index',

    'admin/guestbook/show/{id}' => 'Admin\GuestbookController@show',
    'admin/guestbook/edit/{id}' => 'Admin\GuestbookController@edit',
    'admin/guestbook/update' => 'Admin\GuestbookController@update',
    'admin/guestbook/delete/{id}' => 'Admin\GuestbookController@destroy',

    'admin/categories/create' => 'Admin\CategoryController@create',
    'admin/categories/store' => 'Admin\CategoryController@store',
    'admin/categories/show/{id}' => 'Admin\CategoryController@show',
    'admin/categories/edit/{id}' => 'Admin\CategoryController@edit',
    'admin/categories/update' => 'Admin\CategoryController@update',
    'admin/categories/delete/{id}' => 'Admin\CategoryController@destroy',

    'admin/brands/create' => 'Admin\BrandController@create',
    'admin/brands/store' => 'Admin\BrandController@store',
    'admin/brands/show/{id}' => 'Admin\BrandController@show',
    'admin/brands/edit/{id}' => 'Admin\BrandController@edit',
    'admin/brands/update' => 'Admin\BrandController@update',
    'admin/brands/delete/{id}' => 'Admin\BrandController@destroy',

    'admin/products/create' => 'Admin\ProductController@create',
    'admin/products/store' => 'Admin\ProductController@store',
    'admin/products/show/{id}' => 'Admin\ProductController@show',
    'admin/products/edit/{id}' => 'Admin\ProductController@edit',
    'admin/products/update' => 'Admin\ProductController@update',
    'admin/products/delete/{id}' => 'Admin\ProductController@destroy',

    'admin/roles/create' => 'Admin\RoleController@create',
    'admin/roles/store' => 'Admin\RoleController@store',
    'admin/roles/show/{id}' => 'Admin\RoleController@show',
    'admin/roles/edit/{id}' => 'Admin\RoleController@edit',
    'admin/roles/update' => 'Admin\RoleController@update',
    'admin/roles/delete/{id}' => 'Admin\RoleController@destroy',

    'admin/users/create' => 'Admin\UserController@create',
    'admin/users/store' => 'Admin\UserController@store',
    'admin/users/show/{id}' => 'Admin\UserController@show',
    'admin/users/edit/{id}' => 'Admin\UserController@edit',
    'admin/users/update' => 'Admin\UserController@update',
    'admin/users/delete/{id}' => 'Admin\UserController@destroy',
    '404' => 'ErrorController@notFound',

    'api/categories/insert_image' => 'Admin\CategoryController@insertImage',
    'api/products/insert_image' => 'Admin\ProductController@insertImage',

    'api/products' => 'HomeController@getProducts',
    'api/products/{id}' => 'HomeController@getProduct',

    'api/categories' => 'HomeController@getCategories',
    'api/brands' => 'HomeController@getBrands',


];