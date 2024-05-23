<?php

namespace DesignPattern\FactoryMethod;
use DesignPattern\FactoryMethod\SocialNetworkConnector;

class FacbookConnector implements SocialNetworkConnector{

    private $login, $password;

    public function __construct(string $login, string $password){
        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "Log in user $this->login with " . "password $this->password\n";
    }

    public function logout(): void
    {
        echo "Log out user $this->login\n";
    }

    public function post($content): void
    {
        echo "Make a post in Facebook timeline.\n $content \n";
    }
}