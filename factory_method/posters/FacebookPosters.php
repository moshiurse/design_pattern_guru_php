<?php

use DesignPattern\FactoryMethod\SocialNetworkConnector;
use DesignPattern\FactoryMethod\FacbookConnector;
use DesignPattern\FactoryMethod\SocialNetworkPoster;

class FacebookPoster extends SocialNetworkPoster
{
    private $login, $password;

    public function __construct(string $login, string $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacbookConnector($this->login, $this->password);
    }
}