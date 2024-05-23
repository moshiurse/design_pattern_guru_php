<?php

namespace DesignPattern\FactoryMethod;

class TwitterConnector implements SocialNetworkConnector{

    private $login, $password;

    public function __construct(string $login, string $password){
        $this->login = $login;
        $this->password = $password;
    }

    public function login(): void
    {
        echo "Log in user to Twitter $this->login with " . "password $this->password\n";
    }

    public function logout(): void
    {
        echo "Log out user from Twitter $this->login\n";
    }

    public function post($content): void
    {
        echo "Make a post in Twitter timeline.\n $content \n";
    }
}