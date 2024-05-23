<?php

use DesignPattern\FactoryMethod\SocialNetworkPoster;

function clientEnd(SocialNetworkPoster $user){

    $user->post('Helllo Guyssssss');
    $user->post('Tata Bye bye');

}

clientEnd(new FacebookPoster('mosiur', '1234567890'));
clientEnd(new TwitterPoster('mosiur', '1234567890'));