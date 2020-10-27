<?php
    $title = 'Contact US';
    $addressTitle = 'Our Adress';
    $address =  config('config');
    render('/about/index',compact('title','addressTitle','address'));
?>