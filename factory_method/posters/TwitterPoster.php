<?php

use DesignPattern\FactoryMethod\SocialNetworkConnector;
use DesignPattern\FactoryMethod\SocialNetworkPoster;
use DesignPattern\FactoryMethod\TwitterConnector;

class TwitterPoster extends SocialNetworkPoster
{
    private $email, $password;

    public function __construct(string $login, string $password)
    {
        $this->email = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new TwitterConnector($this->email, $this->password);
    }
}