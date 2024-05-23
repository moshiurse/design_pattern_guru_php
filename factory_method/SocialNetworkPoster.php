<?php

namespace DesignPattern\FactoryMethod;

abstract class SocialNetworkPoster{

    abstract public function getSocialNetwork(): SocialNetworkConnector;
    
    public function post($content): void {
        $network = $this->getSocialNetwork();
        $network->login();
        $network->post($content);
        $network->logout();
    }
}