<?php

namespace DesignPattern\FactoryMethod;

interface SocialNetworkConnector{

    public function login(): void;

    public function logout(): void;

    public function post($content): void;
}